export function hamburger() {
    var hamburger = document.querySelector(".hamburger-menu");
    var navBar = document.getElementById("navbar");

    hamburger.onclick = function() {
        navBar.classList.toggle("active");
    }
}