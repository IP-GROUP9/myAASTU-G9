<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
$mail = new PHPMailer();

function send_mail($subject, $email, $username, $link, $file = 'reset.html')
{
    global $mail;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->Username = 'myaastu@gmail.com';
    $mail->Password = 'vncixfylxonlkeip';
    $mail->setFrom('myaastu@gmail.com', 'myAASTU');
    $mail->addReplyTo('myaastu@gmail.com', 'myAASTU');
    $mail->addAddress($email, $username);
    $mail->Subject = $subject;
    $mail->msgHTML(str_replace('[code]', $link, file_get_contents($file)), __DIR__);
    $mail->addEmbeddedImage('images/logo.png', 'logo');
    if ($mail->send())
        return true;
    return false;
}
