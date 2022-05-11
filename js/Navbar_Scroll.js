const burger = document.getElementById('burger');
const logo = document.getElementById("logo");
const nav = document.querySelector('.navbar');
const text = document.getElementById('tekst');
const phone = document.getElementById('phone');
const navLink = document.querySelector('.nav-link');
const navLink1 = document.querySelector('.nav-link1');
const navLink2 = document.querySelector('.nav-link2');


window.addEventListener('scroll', function () {
    if (window.pageYOffset > 250) {
        logo.setAttribute("fill", "#0C0623");
        burger.setAttribute("fill", "black");
        nav.classList.add('bg-light', 'shadow');


        navLink.classList.add('text-black');
        navLink1.classList.add('text-black');
        navLink2.classList.add('text-black');


    } else {
        logo.setAttribute("fill", "white");
        burger.setAttribute("fill", "white")
        nav.classList.remove('bg-light', 'shadow');
        navLink.classList.remove('text-black');
        navLink1.classList.remove('text-black');
        navLink2.classList.remove('text-black');
        logo.classList.remove("scroll-logo");

    }
});

