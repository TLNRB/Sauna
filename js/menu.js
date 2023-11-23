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
  const menuItemEN = document.querySelectorAll('#menu-main-menu li');
  const menuItemHU = document.querySelectorAll('#menu-fo-menu li');

  // Add active class to menu items if its hungarian
  if (menuItemHU.length > 0) {
    menuItemHU.forEach((item) => {
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
  }
  // Add active class to menu items if its english
  else {
    menuItemEN.forEach((item) => {
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
  }

  
};

window.addEventListener('scroll', scrollActive);
window.addEventListener('load', scrollActive);

/*===== Image Display =====*/
function showImage(saunaId) {
  // Remove active class from all buttons
  document.querySelectorAll('.view-button').forEach(button => {
      button.classList.remove('button-active');
  });
  // Remove active class from all images
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

window.addEventListener('load', () => {
  const firstSauna = document.getElementById('sauna-container');
  if (firstSauna) {
    const firstSaunaId = firstSauna.id;
    showImage(firstSaunaId);
  }
});