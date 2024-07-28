<?php
function writeCommonStyles() {
    echo '
        <link rel="stylesheet" type="text/css" href="Css/viewItems.css">
        <link rel="stylesheet" type="text/css" href="Css/admin.css">
        <link rel="stylesheet" type="text/css" href="Css/searchResults.css">
        <link rel="stylesheet" type="text/css" href="Css/rnbListings.css">
        <link rel="stylesheet" type="text/css" href="Css/mainHeadings.css">
        <link rel="stylesheet" type="text/css" href="Css/about-Us.css">
        <link rel="stylesheet" type="text/css" href="Css/buyNsell.css">
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" type="text/css" href="Css/contact-Us.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    ';
}

function writeHeader($pageTitle) {
    echo '
        <div class="horizontal-bar">
            <div class="search-bar">
                <div class="ico-mglass" id="searchIcon"></div>
                <div class="search-input-container" id="searchInputContainer">
                    <input type="text" class="search-input" id="searchInput" placeholder="Search...">
                </div>
            </div>
            <div class="heading">' . $pageTitle . '</div>
            <div class="hamburger-menu" id="hamburger-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="vertical-nav" id="vertical-nav">
                <a href="index.php">Home</a>
                <hr class="gray-line">
                <a href="mainHeadings.php">Genres</a>
                <hr class="gray-line">
                <a href="about-us.php">About us</a>
                <hr class="gray-line">
                <a href="contact-us.php">Contact us</a>
            </nav>
        </div>
    ';
}

function writeFooter() {
    echo '
        <footer>
            <p>&copy; ' . date("Y") . ' Kicks Kulture. All rights reserved.</p>
        </footer>
    ';
}
?>
