<!DOCTYPE html>
<?php
require 'pageElements.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Music Online</title>
    <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/rnbListings.css" />
    <link rel="icon" href="img/Kicks_culture_logo-removebg-preview.png" type="image/x-icon">
</head>
<body>
    <!--Html for the whole background of the page-->
    <div class="horizontal-bar">
        <!--SEARCH BAR-->
        <div class="search-bar">
            <div class="ico-mglass" id="searchIcon"></div>
            <div class="search-input-container" id="searchContainer">
                <form id="searchForm" action="searchResults.php" method="get">
                    <input type="text" name="query" id="searchInput" placeholder="Search...">
                </form>
            </div>
        </div>

        <!--Music online logo-->
        <div class="heading">R&B</div>
        <!--Link to google for the fonts-->
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

    <!-- Code for the brand headings -->
    <div class="brand-items">
        <?php
        // Include the database connection file
        include 'databaseConnection.php';

        // Fetch items from database
        $sql = "SELECT * FROM rnbListings";
        $result = $conn->query($sql);

        if ($result === false) {
            // Query failed, display error message
            echo "Error: " . $conn->error;
        } else {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Start the link with item-box class
                    echo '<a href="buyNsell.php?image=' . $row['image'] . '&description=' . $row['description'] . '&price=' . $row['price'] . '" class="item-box">';

                    // Start the container for the item
                    echo '<div class="item-container">';
                    
                    // Grey background container with 3/4 height
                    echo '<div class="img-background" style="height: 75%;">';
                    // Image tag with class for styling
                    echo '<img src="' . $row['image'] . '" class="item-image">';
                    echo '</div>';

                    // Description and price containers
                    echo '<div class="item-details">';
                    echo '<div class="item-name">' . $row['description'] . '</div>';
                    echo '<div class="item-price">£' . $row['price'] . '</div>';
                    echo '</div>'; // Close item-details
                    
                    // Close the item-container
                    echo '</div>'; 

                    // Close the link
                    echo '</a>';
                }
            } else {
                echo "No items found.";
            }
        }

        // Close connection
        $conn->close();
        ?>
    </div>

    <script src="Js/rnbListings.js"> </script>
    <script>
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
    </script>
</body>
</html>
