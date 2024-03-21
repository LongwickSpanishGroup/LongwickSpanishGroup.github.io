<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send an email with the form data
    $to = "deniko76@gmail.com";
    $subject = "Interest in Longwick Spanish Conversation Group";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    mail($to, $subject, $body);
    
    // Redirect back to the webpage with a success message
    header("Location: thankyou.html");
    exit;
}
?>