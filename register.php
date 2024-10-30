<?php
// Database connection details
$host = 'localhost';
$db = 'ai_virtual_tryon';
$user = 'root'; // Use your MySQL username
$pass = 'Root@123';     // Use your MySQL password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validate form data
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password before storing it
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Insert user into the database
    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password_hash) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $password_hash);

    if ($stmt->execute()) {
        echo "Registration successful!";
        // Redirect to dashboard or login page
        header("Location: dashboard.html");
        exit;
    } else {
        // Handle error (e.g., email already exists)
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
