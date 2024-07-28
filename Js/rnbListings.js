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

//====================JS FOR THE PAGE CHANGE FOR FILTERING===========================


document.getElementById("color-filter").addEventListener("change", function() {
    var selectedColor = this.value;
    filterByColor(selectedColor);
});

function filterByColor(color) {
    // Get all items
    var items = document.querySelectorAll(".brand-items a");

    // Loop through each item
    items.forEach(function(item) {
        // Get the color of the item
        var itemColor = item.dataset.colour;

        // Check if the item matches the selected color
        if (color === '' || itemColor === color) {
            // Show the item
            item.style.display = "block";
        } else {
            // Hide the item
            item.style.display = "none";
        }
    });
}

//=============================JS FOR THE SEARCH FUNCTION======================
// Add this code to handle search functionality and Enter key press

// Add an event listener for the Enter key press on the search input field
document.getElementById("searchInput").addEventListener("keydown", function(event) {
  if (event.key === "Enter") {
      event.preventDefault(); // Prevent default behavior of Enter key (e.g., submitting the form)
      document.getElementById("searchForm").submit(); // Submit the form
  }
});

// Add this code to handle search functionality and Enter key press

document.getElementById("searchInput").addEventListener("input", function() {
  var query = this.value.trim(); // Trim white spaces from the search query
  if (query.length > 0) {
      searchItems(query);
  } else {
      // If the search query is empty, show all items
      showAllItems();
  }
});

document.getElementById("searchInput").addEventListener("keydown", function(event) {
  if (event.key === "Enter") {
      event.preventDefault(); // Prevent default behavior of Enter key (e.g., submitting the form)
      var query = this.value.trim(); // Trim white spaces from the search query
      if (query.length > 0) {
          searchItems(query);
      } else {
          // If the search query is empty, show all items
          showAllItems();
      }
  }
});

function searchItems(query) {
  // Send AJAX request to search.php with the search query
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
          // Replace the content of the brand-items div with the search results
          document.querySelector(".brand-items").innerHTML = this.responseText;
      }
  };
  xhr.open("GET", "search.php?query=" + encodeURIComponent(query), true);
  xhr.send();
}

function showAllItems() {
  // Send AJAX request to fetch all items from buyNsellProcess.php
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
          // Replace the content of the brand-items div with all items
          document.querySelector(".brand-items").innerHTML = this.responseText;
      }
  };
  xhr.open("GET", "buyNsellProcess.php", true);
  xhr.send();
}
//=========================JS FOR THE HIDDEN SEARCH ANIMATION=====================
document.getElementById("searchIcon").addEventListener("click", function() {
  // Get reference to the search input container
  var searchInputContainer = document.querySelector(".search-input-container");
  
  // Toggle the 'active' class to show/hide the search input container
  searchInputContainer.classList.toggle("active");
});


document.getElementById('searchIcon').addEventListener('click', function() {
  var searchIcon = document.getElementById('searchIcon');
  var searchContainer = document.getElementById('searchContainer');
  
  searchIcon.style.transition = 'opacity 0.3s ease';
  searchIcon.style.opacity = 0;
  
  setTimeout(function() {
      searchIcon.style.display = 'none';
      searchContainer.style.display = 'block';
      searchContainer.classList.add('active');
  }, 300); // Match the duration of the transition
});


document.getElementById('searchIcon').addEventListener('click', function() {
  var searchIcon = document.getElementById('searchIcon');
  var searchContainer = document.getElementById('searchContainer');
  
  searchIcon.style.transition = 'opacity 0.3s ease';
  searchIcon.style.opacity = 0;
  
  setTimeout(function() {
      searchIcon.style.display = 'none';
      searchContainer.style.display = 'block';
      searchContainer.style.opacity = 1;
  }, 300); // Match the duration of the transition
});


document.addEventListener('click', function(event) {
  var searchIcon = document.getElementById('searchIcon');
  var searchContainer = document.getElementById('searchContainer');
  var isClickInside = searchContainer.contains(event.target) || searchIcon.contains(event.target);

  if (!isClickInside) {
      searchContainer.classList.remove('active');
      searchContainer.style.display = 'none';
      searchIcon.style.display = 'block';
      setTimeout(function() {
          searchIcon.style.opacity = 1;
      }, 10); // Delay to ensure display property is set before changing opacity
  }
});












