<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['gname']);
    $email = htmlspecialchars($_POST['gmail']);
    $mobile = htmlspecialchars($_POST['cname']);
    $service_type = htmlspecialchars($_POST['cage']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "rapidfixplumbingdublinie@gmail.com"; // Replace with your email address
    $subject = "New Appointment Request";
    $body = "Name: $name\nEmail: $email\nMobile: $mobile\nService Type: $service_type\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Appointment request sent successfully.";
    } else {
        echo "Failed to send appointment request.";
    }
}
?>
