document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector(".navbar.floating-navbar");
    function updateNavbar() {
        if (window.scrollY > 60) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    }
    window.addEventListener("scroll", updateNavbar);
    updateNavbar();
});
