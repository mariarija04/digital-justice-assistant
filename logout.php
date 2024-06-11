<?php
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['success'] = "You have been logged out";
    header("location: main-page.php");
} else {
    header("location: main-page.php");
}
