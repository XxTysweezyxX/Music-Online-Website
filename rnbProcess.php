<?php
// Include the database connection file
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['image'], $_GET['description'], $_GET['price'])) {
    // Extract item details from the query parameters
    $image = sanitizeInput($_GET['image']);
    $description = sanitizeInput($_GET['description']);
    $price = sanitizeInput($_GET['price']);

    // Validate inputs
    if (empty($image) || empty($description) || empty($price)) {
        handleError("Image, description, and price are required.");
    }

    if (!is_numeric($price)) {
        handleError("Price must be a number.");
    }

    // Insert data into database
    $sql = "INSERT INTO rnblistings (image, description, price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        handleError("Failed to prepare SQL statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $image, $description, $price);
    if ($stmt->execute()) {
        // Redirect the user to a confirmation page or back to the previous page
        header("Location: viewItems.php");
        exit(); // Ensure no further code execution after redirection
    } else {
        handleError("Failed to insert record: " . $stmt->error);
    }

    // Close statement
    $stmt->close();
} else {
    handleError("Form data not received.");
}

// Close connection
$conn->close();
?>

