let dropwdown = document.querySelector('.menu-icon');
let menu = document.querySelector('#menu');
let menuItem = document.querySelectorAll('.menu-item > a');

dropwdown.addEventListener('click', () => {
    dropwdown.classList.toggle('nav-active');
    menu.classList.toggle('menu-active');
});

menuItem.forEach((item) => {
    item.addEventListener('click', () => {
        dropwdown.classList.remove('nav-active');
        menu.classList.remove('menu-active');
    });
});