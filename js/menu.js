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

function showImage(saunaId) {
  // Remove active class from all buttons
  document.querySelectorAll('.view-button').forEach(button => {
      button.classList.remove('button-active');
  });
  // Remove active class from all img
  document.getElementById('sauna-container').querySelectorAll('img').forEach(img => {
      img.classList.add('hidden')
  });

  // Add active class to the clicked button
  document.getElementById(saunaId).querySelector('.view-button').classList.add('button-active');

  // Add active class to the corresponding image
  document.getElementById(saunaId).querySelector('img').classList.remove('hidden');

  // Get the corresponding image source
  const imageSource = document.getElementById(saunaId).querySelector('img').src;

  // Set the image source for the large screen
  document.getElementById('largeScreenImage').src = imageSource;
}