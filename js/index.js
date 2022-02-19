function toggleNav() {
    let close = "/images/icons/close.svg"
    let menu = "/images/icons/menu.svg"
    let links = document.querySelector(".links");
    let ico = document.querySelector(".logo button img");
    if (links.style.display == "block") {
        ico.src = menu;
        links.style.display = "none";
    } else {
        ico.src = close;
        links.style.display = "block";
    }
}