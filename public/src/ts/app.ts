declare global {
    interface Window {
        YT: any;
    }
}
window.YT = window.YT || {};

import { Nav } from "./nav";
import { Main } from "./main";
import { Fullscreen, AutoPlay, YoutubeVideos } from "./video";

new Main();
new Nav();
new AutoPlay();
new YoutubeVideos();
