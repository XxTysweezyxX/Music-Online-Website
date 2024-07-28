<!DOCTYPE html>

<?php
require 'pageElements.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Items</title>
    <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/viewItems.css"> 
</head>
<body>
    <h1>Items List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php
        include 'databaseConnection.php';

        // Fetch items from database
        $sql = "SELECT * FROM rnbListings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td><img src='" . $row["image"] . "' alt='" . $row["description"] . "' width='50'></td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>£" . $row["price"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No items found.</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
</body>
</html>
