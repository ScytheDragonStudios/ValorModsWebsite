<?php
if (isset($_POST['email']) && !empty($_POST['email']) {
    $subject = "New contact request: $_POST['subject']";
    $message = $_POST['body'];
    $headers = 'From: https://scythedragonstudios.github.io/ValorModsWebsite/contact.html' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    mail('kynpuppeteer@yahoo.com', $subject, $message, $headers);

    die('Thank you for your email');
})