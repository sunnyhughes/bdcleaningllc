<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bradleywilliams41@yahoo.com";

    $service = htmlspecialchars($_POST["service"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Build the email body
    $body = "Service: $service\n";
    $body .= "Name: $firstname $lastname\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $firstname $lastname <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
}
?>