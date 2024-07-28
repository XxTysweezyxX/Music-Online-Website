<?php
include 'pageElements.php';
include 'functions.php';
include 'databaseConnection.php';

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Function to handle errors
function handleError($message) {
    echo "<p>Error: $message</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <?php writeCommonStyles(); ?>
</head>
<body>
    <?php
    // Include header
    writeHeader("SEARCHED");

    // Check if the search query is set
    if (isset($_GET['query'])) {
        // Sanitize the search query
        $searchQuery = sanitizeInput($_GET['query']);

        // Prepare SQL statement to search for items
        $sql = "SELECT * FROM rnblistings WHERE description LIKE ?";

        // Prepare and bind the statement
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            handleError("Failed to prepare SQL statement: " . $conn->error);
        }

        $searchParam = "%" . $searchQuery . "%"; // Adding wildcards to search for partial matches
        $stmt->bind_param("s", $searchParam);

        // Execute the statement
        $stmt->execute();

        // Fetch the results
        $result = $stmt->get_result();

        // Display the search results
        echo "<main>";
        echo "<h2>Search Results</h2>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Display item details here using $row data
                echo '<div class="item">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['description'] . '">';
                echo '<h3>' . $row['description'] . '</h3>';
                echo '<p>Price: ' . $row['price'] . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No items found matching your search query.</p>";
        }
        echo "</main>";

        // Close statement
        $stmt->close();
    } else {
        // If no search query is provided, display a message or handle it as you prefer
        echo "<p>No search query provided.</p>";
    }

    // Close connection
    $conn->close();
    ?>

    <?php
    // Include footer
    writeFooter();
    ?>
</body>
</html>
