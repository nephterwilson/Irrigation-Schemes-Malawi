


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "info@kabikiconsulting.com";
    $subject = "New Contact Form Submission: Kabikiconsulting";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
