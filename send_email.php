<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $caseTitle = $_POST['caseTitle'];
    $caseDescription = $_POST['caseDescription'];

    $to = "21csa35@karpagamtech.ac.in"; // Replace with your email address
    $subject = "New Case Consultation: $caseTitle";
    $message = "Case Title: $caseTitle\n\nCase Description:\n$caseDescription";
    $headers = "From: webmaster@example.com"; // Replace with your email address

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    echo "You are not allowed to access this page.";
}
?>
