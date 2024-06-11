<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === "demo" && $password === "password123") {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: main-page.html");
        exit;
    } else {
        header("Location: newlogin.php?content=" . $_POST["content"] . "&error=1");
        exit;
    }
} else {
    header("Location: main-page.html");
    exit;
}
?>
