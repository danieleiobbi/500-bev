import { matchMedia } from "./helpers";
import gsap from "gsap";

export class Nav {
    constructor() {
        this.nav();
    }

    private nav = () => {
        const hamburger = document.getElementById("hamburger")!;
        const drawerVeil = document.getElementById("drawer-veil")!;

        const navbarCollapse = document.querySelector(
            ".navbar-collapse"
        ) as HTMLElement;
        const links = navbarCollapse.querySelectorAll(".nav-item");

        // Toggle menu start

        let tl = gsap.timeline({ paused: true });
        tl.to(navbarCollapse, {
            x: 0,
            ease: "Power1.easeOut",
            duration: 0.25,
        })
            .to(navbarCollapse, { autoAlpha: 1, duration: 0.15 }, 0)
            .reverse()
            .to(drawerVeil, { autoAlpha: 0.2, duration: 0.15 }, 0)
            .reverse();

        let openDrawer = false;
        const toggleDrawerTween = () => {
            tl.reversed(!tl.reversed());
            hamburger.classList.toggle("collapsed");
            // body
            openDrawer = !openDrawer;
            const overflow = openDrawer ? "hidden" : "auto";
            document.body.style.overflow = overflow;
        };

        hamburger.onclick = toggleDrawerTween;
        drawerVeil.onclick = toggleDrawerTween;
        links.forEach((nl) => {
            nl.addEventListener("click", () => {
                toggleDrawerTween();
            });
        });
    };
}
