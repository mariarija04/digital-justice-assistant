<?php
session_start();

// Define your database connection details
$servername = "localhost";
$username = "admin";
$password = "dec25";
$dbname = "rose";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['reg_user'])) {
    // Get user data from the registration form
    $userType = $_POST['userType'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $registrationNumber = isset($_POST['registrationNumber']) ? $_POST['registrationNumber'] : '';

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert user data into the database (you should use prepared statements for security)
    $sql = "INSERT INTO users (user_type, username, password, email, phone, registration_number) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $userType, $username, $hashedPassword, $email, $phone, $registrationNumber);

    if ($stmt->execute()) {
        // Registration successful
        $_SESSION['username'] = $username;
        header('Location: main-page.html'); // Redirect to the main page
    } else {
        // Registration failed
        header('Location: newsignup.html?error=1'); // Redirect back to the signup page with an error parameter
    }

    $stmt->close();
} else {
    header('Location: newsignup.html'); // Redirect back to the signup page if registration data is not posted
}

$conn->close();
?>
