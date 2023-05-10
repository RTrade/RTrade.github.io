-->> let title = ["m","mi","min","mine","minec","minecr","minecra","minecraf","minecraft"]; <--
let titleInterval;
let title = ["minecraft",".gg/RJCabfrQEC"];

let iter = 0;
setInterval(() => {
    document.title = title[iter++ % title.length]
    if (iter >= title.length + 1) { iter = 0; }
}, 350)
