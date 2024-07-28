/*JS FOR THE HAMBURGER MENU */
const hamburgerMenu = document.getElementById('hamburger-menu');
const verticalNav = document.getElementById('vertical-nav');

hamburgerMenu.addEventListener('click', () => {
  hamburgerMenu.style.opacity = 0;
  hamburgerMenu.style.pointerEvents = 'none';
  verticalNav.style.display = 'block';
  setTimeout(() => {
    verticalNav.style.opacity = 1;
  }, 100);
});


verticalNav.addEventListener('mouseleave', () => {
  verticalNav.style.opacity = 0;
  setTimeout(() => {
    verticalNav.style.display = 'none';
    hamburgerMenu.style.opacity = 1;
    hamburgerMenu.style.pointerEvents = 'auto';
  }, 300);
});

// js FOR THE NAVBAR ANIMATION
document.addEventListener("DOMContentLoaded", function() {
  const searchIcon = document.getElementById('searchIcon');
  const searchInputContainer = document.getElementById('searchInputContainer');
  const searchInput = document.getElementById('searchInput');

  searchIcon.addEventListener('click', function() {
    this.style.opacity = '0'; // Fade out the search icon
    searchInputContainer.style.opacity = '1'; // Fade in the yellow line
    searchInput.focus(); // Focus on the input field
  });

  searchInput.addEventListener('blur', function() {
    searchIcon.style.opacity = '1'; // Fade in the search icon
    searchInputContainer.style.opacity = '0'; // Fade out the yellow line
  });
});





