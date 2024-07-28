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

// Check if form data is received
if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    // Getting the values from the registration form
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);
    $email = sanitizeInput($_POST['email']);
    $role = "regular"; // Default role for new users

    // Validate input data
    if (empty($username) || empty($password) || empty($email)) {
        handleError("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        handleError("Invalid email format.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert user data
    $stmt = $conn->prepare("INSERT INTO registered_users (username, password, email, role) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        handleError("Failed to prepare statement: " . $conn->error);
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ssss", $username, $hashedPassword, $email, $role);

    if ($stmt->execute()) {
        // Set cookie for username
        setcookie("username", $username, time() + (86400 * 30), "/"); // Set cookie for 30 days
        // Redirect to login page
        header("Location: login.php");
        exit; // Ensure no further code is executed after redirection
    } else {
        handleError("Failed to register: " . $stmt->error);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    handleError("Form data not received!");
}
?>
