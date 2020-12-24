declare global {
    interface Document {
        mozCancelFullScreen?: () => Promise<void>;
        msExitFullscreen?: () => Promise<void>;
        webkitExitFullscreen?: () => Promise<void>;
        mozFullScreenElement?: Element;
        msFullscreenElement?: Element;
        webkitFullscreenElement?: Element;
    }

    interface HTMLElement {
        msRequestFullscreen?: () => Promise<void>;
        mozRequestFullScreen?: () => Promise<void>;
        webkitRequestFullscreen?: () => Promise<void>;
    }
}
declare const YT: any;
import gsap from "gsap";
import { toggleClass, matchMedia, scrollToElement } from "./helpers";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export class Fullscreen {
    constructor() {
        this.init();
    }

    init() {
        const buttons = document.querySelectorAll(".btn-video");
        if (buttons.length > 0) {
            buttons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    const elem = document.getElementById("myvideo");

                    const target = btn.getAttribute("data-video");
                    if (!target) return;

                    const container = document.createElement("div");
                    container.style.display = "none";
                    const _video = document.createElement("video");
                    _video.style.display = "block";
                    _video.setAttribute("controls", "true");
                    _video.setAttribute("loop", "true");
                    _video.innerHTML = `<source src='${target}' type='video/mp4'>`;
                    document.body.appendChild(_video);

                    document.addEventListener("fullscreenchange", (event) => {
                        if (document.fullscreenElement) {
                            console.log(
                                `Element: ${document.fullscreenElement.id} entered fullscreen mode.`
                            );
                        } else {
                            _video.remove();
                            console.log("Leaving full-screen mode.");
                        }
                    });

                    if (_video) {
                        this.toggleFullScreen(_video);
                    }
                });
            });
        }
    }

    private getFullScreenElement() {
        return (
            document.fullscreenElement ||
            document.webkitFullscreenElement ||
            document.mozFullScreenElement ||
            document.msFullscreenElement
        );
    }

    private toggleFullScreen(video: HTMLVideoElement) {
        if (this.getFullScreenElement()) {
            document.exitFullscreen();
        } else {
            video
                .requestFullscreen()
                .then(() => {
                    video.play();
                })
                .catch((e) => console.log(e));
        }
    }
}

export class AutoPlay {
    constructor() {
        this.play();
    }

    play() {
        const videos = document.querySelectorAll(".video");
        if (videos.length === 0) return;
        videos.forEach((video: any) => {
            const _video = video as HTMLVideoElement;
            const getTrigger = _video.getAttribute("data-trigger-element");
            const triggerElement = getTrigger ? getTrigger : _video;

            ScrollTrigger.create({
                trigger: triggerElement,
                onEnter: () => {
                    _video.play();
                },
                onEnterBack: () => {
                    _video.play();
                },
                onLeave: () => {
                    if (_video.currentTime > 0) _video.pause();
                },
                markers: false,
            });
        });
    }
}

export class YoutubeVideos {
    private player: any;
    private iframe: any;
    private videoId: any;
    constructor() {
        this.init();
        this.setupListener();
    }

    private init = () => {
        // Load the IFrame Player API code asynchronously.
        const tag = document.createElement("script");
        tag.src = "https://www.youtube.com/player_api";
        const firstScriptTag = document.getElementsByTagName("script")[0];
        // @ts-ignore
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    };

    private setupListener = () => {
        const btns = document.querySelectorAll(".btn-video-youtube");
        if (btns.length === 0) return;
        btns.forEach((btn) => {
            this.videoId = btn.getAttribute("data-videoId")!;
            btn.addEventListener("click", () => {
                this.onYouTubePlayerAPIReady();
            });
        });
    };

    private onYouTubePlayerAPIReady = () => {
        // https://developers.google.com/youtube/iframe_api_reference?hl=it
        window.YT.ready(() => {
            this.player = new YT.Player("ytplayer", {
                height: "0",
                width: "0",
                videoId: this.videoId,
                playerVars: { rel: 0, showinfo: 0, ecver: 2 },
                events: {
                    onReady: this.playFullscreen,
                    onStateChange: this.onPlayerStateChange,
                },
            });
        });
    };

    private playFullscreen = () => {
        this.player.playVideo(); //won't work on mobile
        this.iframe = document.getElementById("ytplayer");

        var requestFullScreen =
            this.iframe.requestFullScreen ||
            this.iframe.mozRequestFullScreen ||
            this.iframe.webkitRequestFullScreen;
        if (requestFullScreen) {
            requestFullScreen.bind(this.iframe)();
        }
    };

    private onPlayerStateChange = (event: any) => {
        if (event.data == YT.PlayerState.PLAYING) {
            this.iframe.addEventListener(
                "fullscreenchange",
                () => {
                    if (!this.iframe.fullscreenElement) this.stopAndDestroy();
                },
                false
            );

            this.iframe.addEventListener(
                "msfullscreenchange",
                () => {
                    if (!this.iframe.webkitFullscreenElement)
                        this.stopAndDestroy();
                },
                false
            );

            this.iframe.addEventListener(
                "mozfullscreenchange",
                () => {
                    if (!this.iframe.mozFullScreenElement)
                        this.stopAndDestroy();
                },
                false
            );

            this.iframe.addEventListener(
                "webkitfullscreenchange",
                () => {
                    if (!this.iframe.msFullscreenElement) this.stopAndDestroy();
                },
                false
            );
        }
    };

    private stopAndDestroy = () => {
        this.player.stopVideo();
        this.player.destroy();
    };
}

export class Features {
    constructor() {
        this.manualVideoControls();
    }

    manualVideoControls() {
        const mm = matchMedia();
        const hooks = document.querySelectorAll(".manual-video-controls");
        if (hooks.length === 0) return;
        hooks.forEach((hook) => {
            const buttons = hook.querySelectorAll(".icons");
            const content = hook.querySelector(
                ".manual-video-controls__content"
            )!;
            if (buttons.length === 0) return;
            buttons.forEach((button) => {
                const btn = button as HTMLElement;
                btn.addEventListener("click", () => {
                    scrollToElement(hook);
                    toggleClass(btn, buttons);
                    const params = JSON.parse(
                        button.getAttribute("data-params")!
                    );

                    const title = hook.querySelector(".title")! as HTMLElement;
                    title.innerHTML = params.title;

                    const description = hook.querySelector(
                        ".description"
                    )! as HTMLElement;
                    description.innerHTML = params.description;

                    const video = hook.querySelector(
                        ".videos"
                    )! as HTMLVideoElement;

                    if (params.controls) {
                        video.setAttribute("controls", "");
                    } else {
                        video.removeAttribute("controls");
                    }

                    if (mm.landscape && mm.small) {
                        scrollToElement(content, 32);
                    }

                    if (video.currentTime > 0) video.pause();
                    video.setAttribute("poster", "");
                    const source = video.getElementsByTagName("source")!;
                    source[0].setAttribute("src", params.video);
                    video.load();
                    video.play();
                });
            });
        });
    }
}
