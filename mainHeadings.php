<!DOCTYPE html>
<?php 
require 'pageElements.php';
require 'functions.php'
?>


<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kicks Kulture</title>
    <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/mainHeadings.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Kicks_culture_logo-removebg-preview.png" type="image/x-icon">
</head>

<body>



<!-- Placeholders for functions -->
<?php writeSearchBar(); ?>
<?php writeHamburgerMenu(); ?>
<?php writeVerticalNav(); ?>
<?php writeHeading("GENRES"); ?>

<div class="second-background">
    <div class="brand-items">
        <a href="rnbListing.php" class="item-box item-1">
            <img src="img/rnb image.jpg">
            <div class="overlay">
                <span class="text">R&B</span>
            </div>
        </a>

        <a href="rnbListing.php" class="item-box item-2">
            <img src="img/Burna Boy ♡.jpg">
            <div class="overlay">
                <span class="text">AFRO BEATS</span>
            </div>
        </a>

        <a href="rnbListing.php" class="item-box item-3">
            <img src="img/Drake.jpg">
            <div class="overlay">
                <span class="text">RAP</span>
            </div>
        </a>
    </div>
</div>

<script src="Js/brands.js"></script>

</body>
</html>
