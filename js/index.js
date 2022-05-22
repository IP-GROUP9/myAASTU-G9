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

function toggleDropdown() {
    document.getElementById("my-dropdown").classList.toggle("is-active");
  }
  
  window.onclick = function(event) {
    if (!event.target.matches('.dropdown-btn')) {
      var dropdowns = document.getElementsByClassName("dropdown-body");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('is-active')) {
          openDropdown.classList.remove('is-active');
        }
      }
    }
} 
  