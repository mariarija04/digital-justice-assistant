<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $caseTitle = $_POST['caseTitle'];
    $caseDescription = $_POST['caseDescription'];

    // Compose the email message
    $to = "21csa35@karpagamtech.ac.in"; // Replace with your email address
    $subject = "New Case Consultation Request";
    $message = "Case Title: $caseTitle\n\n";
    $message .= "Case Description: $caseDescription\n\n";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false));
    }
}
?>
