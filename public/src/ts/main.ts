import gsap from "gsap";
import { matchMedia, IntMmedia } from "./helpers";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export class Main {
    private matchMedia: IntMmedia;
    constructor() {
        this.matchMedia = matchMedia();
        this.removePreloader();
        this.layeredPinning();
        this.xGallery();
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
                            markers: true,
                        },
                    }
                );
            });
        });

        gsap.utils.toArray("section").forEach((section: any, index) => {});
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
}
