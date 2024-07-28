<!DOCTYPE HTML>

<?php
 require 'adminUpdates.php';
 require 'pageElements.php';
 require 'databaseConnection.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Music Online Admin</title>
    <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php writeCommonStyles(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Kicks_culture_logo-removebg-preview.png" type="image/x-icon">
</head>

<body>

<?php writeHeader(""); ?>

<!-- Add section -->
<div class="add-div">
    <form action="adminUpdates.php" method="post" enctype="multipart/form-data">
        <label for="product-image">Product Image:</label>
        <input type="file" id="product-image" name="image" required><br>
        <label for="product-description">Description:</label>
        <input type="text" id="product-description" name="description" required><br>
        <label for="product-price">Price:</label>
        <input type="text" id="product-price" name="price" required><br>
        <input type="submit" name="add_product" value="Add Product">
    </form>
</div>


<!-- UPDATE SECTION -->
<div class="update-div">
    <h2>Update Item</h2>
    <form action="adminUpdates.php" method="post">
        <div class="form-group">
            <label for="item-id">Item ID:</label>
            <input type="text" id="item-id" name="item-id" placeholder="Enter item ID" required>
        </div>
        <div class="form-group">
            <label for="description">New Description:</label>
            <input type="text" id="description" name="description" placeholder="Enter new description">
        </div>
        <div class="form-group">
            <label for="price">New Price:</label>
            <input type="text" id="price" name="price" placeholder="Enter new price">
        </div>
        <!-- Hidden input field to indicate update for item -->
        <input type="hidden" name="update_item" value="1">
        <button type="submit">Update</button>
    </form>
</div>


<!-- DELETE SECTION -->
<div class="delete-section">
    <h2>Delete Item</h2>
    <form action="adminUpdates.php" method="post">
        <div class="form-group">
            <label for="item-id">Item ID:</label>
            <input type="text" id="item-id" name="item-id" placeholder="Enter item ID" required>
        </div>
        <input type="hidden" name="delete_item" value="1">
        <button type="submit">Delete</button>
    </form>
</div>


<?php writeFooter(); ?>

<script src="brands.js"></script>
</body>
</html>
