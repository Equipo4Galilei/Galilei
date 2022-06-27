// Javascript for navigation bar effect on scroll
window.addEventListener("scroll", function() {
    var header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

$(function() {
    $(document).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('#logo').attr('src', '../assets/img/Logogaline.png ')
        }
        if ($(this).scrollTop() < 1) {
            $('#logo').attr('src', '../assets/img/Logogali.png');
        }
    });
});

$(function() {
    $(document).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('#logo2').attr('src', '../assets/img/LogoGalileineg.png')
        }
        if ($(this).scrollTop() < 1) {
            $('#logo2').attr('src', '../assets/img/LogoGalilei.png');
        }
    });
});

//Javascript for responsive harmburger 

var menu = document.querySelector('.menu');
var menuBtn = document.querySelector('.menu-btn');
var closeBtn = document.querySelector('.close-btn')

menuBtn.addEventListener('click', () => {
    menu.classList.add('active');
});

closeBtn.addEventListener('click', () => {
    menu.classList.remove('active');
});