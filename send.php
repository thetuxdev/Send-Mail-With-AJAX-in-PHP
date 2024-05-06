<?php

$email = $_POST['email'];
$object = $_POST['object'];
$message = $_POST['message'];

$to = 'hello@albydev.net';
$subject = 'Mail sent from MyWebsite';

$emailBody = '
<html>
    <head>
        <title>Email da ' . $email . '</title>
    </head>
    <body>
        Messaggio recapitato dal sito MyWebsite<br><br>

        <b>EMAIL:</b> ' . $email . '
        <b>OGGETTO:</b> ' . $object . '
        <b>MESSAGGIO:</b> <br>' . $message . '
    </body>
</html>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . '' . "\r\n";


if (mail($to, $subject, $message, $headers)) {
    $data['success'] = true;
    echo json_encode($data);
    die();
} else {
    $data['success'] = false;
    echo json_encode($data);
    die();
}
