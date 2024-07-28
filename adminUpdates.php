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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_product'])) {
        // Handle adding a new item

        // Validate and sanitize inputs
        $description = isset($_POST['description']) ? sanitizeInput($_POST['description']) : '';
        $price = isset($_POST['price']) ? sanitizeInput($_POST['price']) : '';

        if (empty($description) || empty($price)) {
            handleError("Description and price are required.");
        }

        if (!is_numeric($price)) {
            handleError("Price must be a number.");
        }

        // Handle file upload
        $targetDir = "uploads/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validate file upload
        if (isset($_FILES["image"]["tmp_name"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check === false) {
                handleError("File is not an image.");
            }

            if (file_exists($targetFile)) {
                handleError("File already exists.");
            }

            if ($_FILES["image"]["size"] > 5000000) {
                handleError("File is too large.");
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                handleError("Only JPG, JPEG, PNG & GIF files are allowed.");
            }

            if ($uploadOk && move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $image = $targetFile; // Path to uploaded image
            } else {
                handleError("Error uploading your file.");
            }
        } else {
            handleError("Image file is required.");
        }

        // Insert data into database
        $sql = "INSERT INTO rnblistings (image, description, price) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            handleError("Failed to prepare SQL statement: " . $conn->error);
        }

        $stmt->bind_param("sss", $image, $description, $price);

        if ($stmt->execute()) {
            header("Location: rnbListing.php");
            exit;
        } else {
            handleError("Error: " . $stmt->error);
        }

        $stmt->close();
    }
}

//=======================================UPDATE CODE=============================================
// Check if the form is submitted for updating an item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_item'])) {
    // Validate and sanitize inputs
    $id = sanitizeInput($_POST['item-id']);
    $description = sanitizeInput($_POST['description']);
    $price = sanitizeInput($_POST['price']);

    if (empty($id)) {
        handleError("Item ID is required.");
    }

    // Prepare the SQL statement
    $sql = "UPDATE rnblistings SET ";
    $params = [];
    $types = "";

    // Check if the description is provided and add to the query
    if (!empty($description)) {
        $sql .= "description = ?, ";
        $params[] = $description;
        $types .= "s";
    }

    // Check if the price is provided and add to the query
    if (!empty($price)) {
        if (!is_numeric($price)) {
            handleError("Price must be a number.");
        }
        $sql .= "price = ?, ";
        $params[] = $price;
        $types .= "s";
    }

    // Remove the trailing comma and space
    $sql = rtrim($sql, ", ");

    // Add the WHERE clause to update the specific item
    $sql .= " WHERE id = ?";
    $params[] = $id;
    $types .= "i";

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        handleError("Failed to prepare SQL statement: " . $conn->error);
    }
    $stmt->bind_param($types, ...$params);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: rnbListing.php");
        exit;
    } else {
        handleError("Error updating record: " . $stmt->error);
    }

    // Close statement
    $stmt->close();
}

//===========================================DELETE CODE======================================

// Check if the form is submitted for deleting an item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_item'])) {
    // Validate and sanitize input
    $id = sanitizeInput($_POST['item-id']);

    if (empty($id)) {
        handleError("Item ID is required.");
    }

    // Prepare the SQL statement for delete
    $sql = "DELETE FROM rnblistings WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        handleError("Failed to prepare SQL statement: " . $conn->error);
    }
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: rnbListing.php");
        exit;
    } else {
        handleError("Error deleting record: " . $stmt->error);
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
