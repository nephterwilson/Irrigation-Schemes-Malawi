





<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $area    = htmlspecialchars(trim($_POST["area"])); // Added line
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "info@kabikiconsulting.com";
    $subject = "New Contact Form Partnership: Kabikiconsulting";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $body    = "Name: $name\nEmail: $email\nArea of Partnership: $area\n\nMessage:\n$message"; // Modified line

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
