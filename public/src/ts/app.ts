declare global {
    interface Window {
        YT: any;
    }
}
window.YT = window.YT || {};

import { Nav } from "./nav";
import { Main } from "./main";
import { AutoPlay, Features as videoFeatures } from "./video";

new Main();
new Nav();
new AutoPlay();
new videoFeatures();
