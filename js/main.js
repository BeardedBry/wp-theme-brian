console.log('main js');




// Mobile Menu

var mobileNav = document.querySelector('header .mobile-nav');

document.querySelector(".hamburger-wrapper").addEventListener('click', function HamburgerClick() {
    console.log('mobile menu click');
    mobileNav.classList.toggle('show');
});