// Side bar Open JS

let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .fa-bars");
let menuCloseBtn = document.querySelector(".nav-links .fa-times");
menuOpenBtn.onclick = function() {
    navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
    navLinks.style.left = "-100%";
}

//SideBar submenu Open & Close JS Code

let htmlcssArrow = document.querySelector(".htmlcss-arrow");