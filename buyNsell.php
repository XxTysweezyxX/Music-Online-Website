<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kicks Kulture</title>
        <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Css/buyNsell.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/Kicks_culture_logo-removebg-preview.png" type="image/x-icon">
    </head>


    <body>
      

      <!--Html for the whole background of the page-->
        
        <div class="horizontal-bar">
        
          <!--SEARCH BAR-->
        <div class="search-bar">
        <div class="ico-mglass" id="searchIcon"></div>
        <div class="search-input-container" id="searchInputContainer">
          <input type="text" class="search-input" id="searchInput" placeholder="Search...">
        </div>
        </div>

        <!--Music online logo-->
        <div class="heading">BUY AND SELL</div>
        <!--Link to google foe the fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
        
         <!--Hamburger menu and navbar-->
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
         


          
<!-- Code for the Buy and sell items  -->
<div class="item-container">
    <img id="item-image" src="rnbImages" alt="Item Image">
    <div id="item-description"></div>
    <div id="item-price"></div>
    <button id="buy-button">Buy</button>
    <button id="sell-button">Sell</button>
</div>

</body>



    <script src="Js/buyNsell.js"> </script>

</html>











  