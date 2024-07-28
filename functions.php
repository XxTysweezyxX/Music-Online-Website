<?php

function writeSearchBar() {
    // Placeholder function
    echo '<div class="search-bar">';
    echo '<input type="text" placeholder="Search...">';
    echo '</div>';
}

function writeHamburgerMenu() {
    // Placeholder function
    echo '<div class="hamburger-menu">';
    echo '<div class="line"></div>';
    echo '<div class="line"></div>';
    echo '<div class="line"></div>';
    echo '</div>';
}

function writeVerticalNav() {
    // Placeholder function
    echo '<nav class="vertical-nav">';
    echo '<a href="#">Link 1</a>';
    echo '<a href="#">Link 2</a>';
    echo '<a href="#">Link 3</a>';
    echo '</nav>';
}

function writeLogo() {
    // Placeholder function
    echo '<div class="logo">';
    echo '<img src="logo.png" alt="Logo">';
    echo '</div>';
}

function writeSlideshow($image, $text) {
    // Placeholder function
    echo '<div class="slides fade">';
    echo '<img src="' . $image . '" style="width:100%">';
    echo '<h1 class="pic-text">' . $text . '</h1>';
    echo '</div>';
}



function writeHeading($text) {
    echo '<div class="horizontal-bar">';
    echo '<div class="search-bar">';
    echo '<div class="ico-mglass" id="searchIcon"></div>';
    echo '<div class="search-input-container" id="searchInputContainer">';
    echo '<input type="text" class="search-input" id="searchInput" placeholder="Search...">';
    echo '</div>';
    echo '</div>';
    echo '<div class="heading cinzel-decorative-bold">' . $text . '</div>';
    echo '</div>';
}







?>


