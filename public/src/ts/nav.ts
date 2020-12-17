import { matchMedia } from "./helpers";
import gsap from "gsap";

export class Nav {
    constructor() {
        this.nav();
    }

    private nav = () => {
        const mMedia = matchMedia();
        const hamburger = document.getElementById("hamburger")!;
        const linkDropdownToggleSplit = document.getElementById(
            "link-dropdown-toggle-split"
        );
        const navbarCollapse = document.querySelector(
            ".navbar-collapse"
        ) as HTMLElement;
        const links = navbarCollapse.querySelectorAll(".nav-item");

        hamburger.addEventListener("click", () => {
            navbarCollapse.classList.toggle("show");
            hamburger.classList.toggle("collapsed");
            let tl = gsap.timeline();
            tl.from(navbarCollapse, { x: mMedia.width });
        });

        links.forEach((link) => {
            link.addEventListener("click", () => {
                if (link.classList.contains("dropdown-toggle")) return;
                collapsed();
            });
        });

        if (linkDropdownToggleSplit) {
            linkDropdownToggleSplit.addEventListener("click", () =>
                collapsed()
            );
        }

        const collapsed = () => {
            setTimeout(() => {
                navbarCollapse.classList.toggle("show");
                hamburger.classList.toggle("collapsed");
            }, 500);
        };
    };
}
