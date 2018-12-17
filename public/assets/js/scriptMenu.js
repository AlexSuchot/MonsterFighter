var x = document.getElementById("items-menu");
var i = document.getElementById("icon");
var l = document.getElementById("logo")
var n = document.getElementById("nav");

window.onresize = function () {
    detectSize();
};

window.onload = function () {
    detectSize();
};

function detectSize() {

    if (window.innerWidth <= 580) {
        mobile = true;
        x.style.display = "none";
        i.style.display = "block";
        l.style.display = "block";
        i.style.transform = "rotate(180deg)"
        n.style.backgroundColor = "white";
        x.style.backgroundColor = "white";
    } else {
        mobile = false;
        l.style.display = "none";
        i.style.display = "none";
        x.style.display = "flex";
    }
}

function clickMenu() {
    if (x.style.display === "block") {
        n.style.backgroundColor = "white";
        x.style.backgroundColor = "white";
        x.style.display = "none";
        i.style.transform = "rotate(180deg)";
    } else {
        n.style.backgroundColor = "white";
        x.style.backgroundColor = "white";

        x.style.display = "block";
        x.style.opacity = "1";
        i.style.transform = "rotate(90deg)";
    }
}