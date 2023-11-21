/*===== Menu Dropdown =====*/
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


/*===== Nav Active =====*/
const scrollActive = () => {
  const scrollY = window.pageYOffset;
  const menuItem = document.querySelectorAll('#menu-main-menu li');

  menuItem.forEach((item) => {
    const sectionId = item.querySelector('a').getAttribute('href').substring(1);
    const section = document.getElementById(sectionId);

    if (section) {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop - 60;
      const sectionBottom = sectionTop + sectionHeight;

      // Check if more than half of the section is visible
      if (scrollY > sectionTop - window.innerHeight / 2 && scrollY <= sectionBottom - window.innerHeight / 2) {
        item.classList.add('active-link');
      } else {
        item.classList.remove('active-link');
      }
    }
  });
};

window.addEventListener('scroll', scrollActive);
window.addEventListener('load', scrollActive);