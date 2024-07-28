<?php
// Start session
session_start();

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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $username = sanitizeInput($_POST["username"]);
    $password = sanitizeInput($_POST["password"]);

    // Validate inputs
    if (empty($username) || empty($password)) {
        handleError("Username and password are required.");
    }

    // Prepare SQL statement to fetch user data
    $sql = "SELECT * FROM registered_users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        handleError("Failed to prepare SQL statement: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists and verify the password
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Set a session variable to indicate user is logged in
            $_SESSION["logged_in"] = true;
            // Set a cookie to remember the username (optional)
            setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie lasts for 30 days
            // Redirect to admin dashboard
            header("Location: indexAdmin.php");
            exit();
        } else {
            // Set a session variable to indicate login failure
            $_SESSION["login_error"] = true;
            // Redirect back to login page with error message
            header("Location: login.php?error=1");
            exit();
        }
    } else {
        // Set a session variable to indicate login failure
        $_SESSION["login_error"] = true;
        // Redirect back to login page with error message
        header("Location: login.php?error=1");
        exit();
    }

    // Close statement
    $stmt->close();

} else {
    // Redirect to login page if form data is not received
    header("Location: login.php");
    exit();
}

// Close connection
$conn->close();
?>
