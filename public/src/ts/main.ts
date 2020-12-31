import gsap from "gsap";
import { matchMedia, IntMmedia, env, Analitics, toggleClass } from "./helpers";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export class Main {
    private matchMedia: IntMmedia;
    private env: Analitics;
    constructor() {
        this.env = env();
        this.matchMedia = matchMedia();
        this.removePreloader();
        this.layeredPinning();
        this.xGallery();
        this.audio();
        this.collapseComponent();
        this.configurator();
        this.stagger();
        this.gsReveal();
        console.log(this.matchMedia);
    }

    private removePreloader = () => {
        const preloader = document.getElementById("preloader");
        if (!preloader) return;
        const readyStateCheckInterval = setInterval(() => {
            // console.log(document.readyState);
            if (document.readyState === "complete") {
                document.body.style.overflowY = "auto";
                preloader.remove();
                clearInterval(readyStateCheckInterval);
            } else {
                readyStateCheckInterval;
            }
        }, 100);
    };

    layeredPinning = () => {
        const panels = document.querySelectorAll(".panel");
        if (!panels) return;
        panels.forEach((panel) => {
            ScrollTrigger.create({
                trigger: panel,
                start: "top top",
                pin: true,
                pinSpacing: false,
                markers: false,
                snap: 1 / (panels.length - 1), // snap whole page to the closest section!
            });
        });
    };

    xGallery = () => {
        const containers = document.querySelectorAll(".x-gallery");
        if (containers.length === 0) return;

        containers.forEach((container) => {
            // const images = gsap.utils.toArray(".x-gallery img");
            // const images = container.querySelectorAll(".img");
            document.body.style.overflow = "auto";
            document.scrollingElement?.scrollTo(0, 0);
            const sections = container.querySelectorAll(".section-gallery");

            sections.forEach((section, index) => {
                const _section = section as HTMLElement;
                const w = _section.querySelector(".wrapper")!;
                const [x, xEnd] =
                    index % 2
                        ? ["100%", (w.scrollWidth - _section.offsetWidth) * -1]
                        : [w.scrollWidth * -1, 0];
                gsap.fromTo(
                    w,
                    { x },
                    {
                        x: xEnd,
                        scrollTrigger: {
                            trigger: _section,
                            // pin: true,
                            scrub: 0.5,
                            start: "top bottom",
                            end: "bottom center",
                            markers: false,
                        },
                    }
                );
            });
        });

        gsap.utils.toArray("section").forEach((section: any, index) => {});
    };

    collapseComponent = () => {
        const components = document.querySelectorAll(".collapse-component");
        if (components.length === 0) return;
        components.forEach((component) => {
            const buttons = component.querySelectorAll(".btn");
            const targets = component.querySelectorAll(".collapse");
            buttons.forEach((button) => {
                button.addEventListener("click", () => {
                    const t = button.getAttribute("data-target")!;
                    const target = document.getElementById(t);
                    toggleClass(<HTMLElement>target, targets);
                    toggleClass(<HTMLElement>button, buttons);
                });
            });
        });
    };

    stagger = () => {
        const elements = document.querySelectorAll(".trigger-stagger");
        if (elements.length > 0) {
            elements.forEach((element) => {
                const anime = element.querySelectorAll(`.stagger`);
                let tl = gsap.timeline();
                tl.from(anime, { y: -50, opacity: 0, stagger: 0.2 });

                ScrollTrigger.create({
                    trigger: element,
                    animation: tl,
                    toggleActions: "play none none reverse", //onEnter, onLeave, onEnterBack, onLeaveBack
                    start: "top bottom-=200px",
                    end: "bottom bottom-=200px",
                    markers: false,
                });
            });
        }
    };

    gsReveal = () => {
        gsap.utils.toArray(".gs_reveal").forEach((e) => {
            const elem = e as HTMLElement;
            this.gsHideElement(elem);
            let markers = false;
            if (elem.classList.contains("markers")) {
                markers = true;
            }
            ScrollTrigger.create({
                trigger: elem,
                onEnter: () => {
                    // console.log("onEnter");
                    this.gsRevealAnimateFrom(elem);
                },
                onEnterBack: () => {
                    // console.log("onEnterBack");
                    this.gsRevealAnimateFrom(elem, -1);
                },
                onLeave: () => {
                    // console.log("onLeave");
                    this.gsHideElement(elem);
                },
                onLeaveBack: () => {
                    // console.log("onLeaveBack");
                    this.gsHideElement(elem);
                },
                markers: markers,
            });
        });
    };

    gsRevealAnimateFrom = (elem: HTMLElement, direction = 1) => {
        let x = 0,
            y = direction * 150;
        if (elem.classList.contains("gs_reveal_fromLeft")) {
            x = -150;
            y = 0;
        } else if (elem.classList.contains("gs_reveal_fromRight")) {
            x = 150;
            y = 0;
        }
        gsap.fromTo(
            elem,
            { x: x, y: y, autoAlpha: 0 },
            {
                duration: 1.25,
                x: 0,
                y: 0,
                autoAlpha: 1,
                ease: "expo",
                overwrite: "auto",
                delay: 0.5,
            }
        );
    };

    gsHideElement = (elem: HTMLElement) => {
        gsap.set(elem, { autoAlpha: 0 });
    };

    scrollSequenceFadeIn = () => {
        const triggers = document.querySelectorAll(".scrollSequenceFadeIn");
        if (triggers.length === 0) return;
        triggers.forEach((trigger) => {
            const container = trigger.querySelector(".sequence-wrap")!;
            const elements = container.querySelectorAll(".anime");
            if (elements.length === 0) return;
            const tl = gsap.timeline();
            tl.from(elements, {
                opacity: 0,
                ease: "power2.out",
            });

            const params = {
                trigger: trigger,
                animation: tl,
                scrub: true,
                pin: ".sequence-wrap",
                start: "top top",
                end: "",
                markers: false,
            };

            if (this.matchMedia.portrait) {
                params.end = "70% top";
            }

            ScrollTrigger.create(params);
        });
    };

    audio = () => {
        const buttons = document.querySelectorAll(".sound-icon");
        if (buttons.length === 0) return;
        buttons.forEach((button) => {
            const btn = button as HTMLElement;
            btn.addEventListener("click", () => {
                const dataTarget = btn.getAttribute("data-target")!;
                const target = document.getElementById(dataTarget)!;
                const audio = target as HTMLAudioElement;
                if (audio.currentTime > 0) {
                    btn.setAttribute(
                        "src",
                        this.env.app_url + "/images/svg/sound-icon.svg"
                    );
                    audio.pause();
                    audio.load();
                } else {
                    this.audioReset(buttons);
                    audio.play();
                    btn.setAttribute(
                        "src",
                        this.env.app_url + "/images/svg/sound-icon-stop.svg"
                    );
                }
            });
        });
    };

    private audioReset = (buttons: NodeList) => {
        buttons.forEach((button) => {
            const btn = button as HTMLElement;
            btn.setAttribute(
                "src",
                this.env.app_url + "/images/svg/sound-icon.svg"
            );
        });
        const audio = document.getElementsByTagName("audio");
        if (audio.length > 0) {
            for (let item of audio as any) {
                item.pause();
                item.load();
            }
        }
    };

    configurator = () => {
        const id = "CONFIGURATOR";
        const parent = document.getElementById(id);
        if (!parent) return;
        let selectedModel = parent.getAttribute("data-defaultModel");
        const modelSelector = document.getElementById("models-selector");
        if (!modelSelector) return;
        const modelButtons = modelSelector.querySelectorAll(".model");
        if (modelButtons.length === 0) return;
        const selector = document.getElementById("colors-selector");
        if (!selector) return;
        const buttons = selector.querySelectorAll(".color");
        if (buttons.length === 0) return;
        const images = document.querySelectorAll(`#${id} .img-wrap img`)!;
        if (images.length === 0) return;
        images.forEach((element) => {
            if (!element.classList.contains(`active`)) {
                this.gsHideElement(element as HTMLElement);
            }
        });
        const nameContainer = document.getElementById(
            "CONFIGURATOR__colorName"
        );

        const show = (
            current: HTMLElement,
            colorCode: string,
            colorName: string
        ) => {
            // Recupero il bottone colore da selezionare
            const currentColrorBtn = document.querySelector(
                `#${id} .color-${colorCode}`
            )!;
            toggleClass(<HTMLElement>currentColrorBtn, buttons);
            toggleClass(current, images);

            gsap.timeline().to(current, {
                autoAlpha: 1,
                duration: 1,
            });

            if (nameContainer) {
                nameContainer.innerHTML = colorName;
            }

            // Setto tutte le altre immagini ad alpha 0
            images.forEach((element) => {
                if (element !== current) {
                    gsap.timeline().to(element, {
                        autoAlpha: 0,
                        duration: 1,
                    });
                }
            });
        };

        modelButtons.forEach((mBtn) => {
            mBtn.addEventListener("click", () => {
                toggleClass(<HTMLElement>mBtn, modelButtons);
                const modelCode = mBtn.getAttribute("data-modelCode")!;
                const colorCode = mBtn.getAttribute("data-colorCode")!;
                const colorName = mBtn.getAttribute("data-colorName")!;
                selectedModel = modelCode;
                // Recupero l'immagine da mostrare
                const current = document.querySelector(
                    `#${id} .car-${selectedModel}-${colorCode}`
                )!;
                show(<HTMLElement>current, colorCode, colorName);
            });
        });
        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                toggleClass(<HTMLElement>button, buttons);
                const colorCode = button.getAttribute("data-colorCode")!;
                const colorName = button.getAttribute("data-colorName")!;
                // Recupero l'immagine da mostrare
                const current = document.querySelector(
                    `#${id} .car-${selectedModel}-${colorCode}`
                )!;
                show(<HTMLElement>current, colorCode, colorName);
            });
        });
    };
}
