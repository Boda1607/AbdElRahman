<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set the email details
    $to = "ahesham3tren@gmail.com";  // Your email address
    $subject = "New message from: " . $full_name;  // Subject of the email
    $message_body = "
    Name: $full_name\n
    Email: $email\n
    Phone: $phone\n
    Subject: $subject\n
    Message: $message
    ";

    // Set the headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n"; // Add reply-to header
    $headers .= "MIME-Version: 1.0\r\n"; // MIME version for email
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Content type for plain text emails

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "There was a problem sending your message.";
    }
}
?>
