
//======================Js for the slideshow====================//
let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.querySelectorAll(".slides");

  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("fade-in-right", "fade-out-left");
    slides[i].style.display = "none";
  }

  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }

  slides[slideIndex - 1].style.display = "block";
  slides[slideIndex - 1].classList.add("fade-in-right");

  setTimeout(function() {
    slides[slideIndex - 1].classList.add("fade-out-left");

    setTimeout(function() {
      showSlides();
    }, 200); // Delay for the fade out animation duration
  }, 6000); // Change image every 6 seconds
}

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




//jS FOR THE VINYL CASE ANIMATION
const vinylCase = document.getElementById('vinyl-case');

vinylCase.addEventListener('mouseenter', () => {
  document.getElementById('vinyl-disk').style.right = '50px'; // Roll out to halfway
});

vinylCase.addEventListener('mouseleave', () => {
  document.getElementById('vinyl-disk').style.right = '-100px'; // Roll back in fully
});


