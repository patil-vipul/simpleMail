<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$HOST = 'mail.sit.hosting.acm.org';
$SMTP_USERNAME = 'noreply@sit.hosting.acm.org';
$SMTP_PASSWORD = 'SIT@ACM123';
$SMTP_PORT = 2525;
$SEND_FROM_MAIL = 'noreply@sit.hosting.acm.org';
$SEND_FROM_NAME = 'ACM SIT';
$SUBJECT = 'Thanks for showing interest in ACM SIT';
$BODY =  "<div style='font-family:Arial, Helvetica, sans-serif;width: 100%;'>
<p>Hello, " . $_GET['name'] . "</p>
<p>Thank for showing interest in ACM SIT's Student Chapter</p>
<p>Happy Exploring</p>
<p>ACM Members</p>
</div>";
$BODY_ALT = "Thanks for showing interest in ACM SIT Student Chapter We'll get back to you shortly";

if (isset($_GET['name']) && isset($_GET['email'])) {
    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = $HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = $SMTP_USERNAME;
        $mail->Password   = $SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $SMTP_PORT;
        $mail->setFrom($SEND_FROM_MAIL,);
        $mail->addAddress($_GET['email'], $_GET['name']);
        $mail->isHTML(true);
        $mail->Subject = $SUBJECT;
        $mail->Body    = $BODY;
        $mail->AltBody = $BODY_ALT;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


//Simple Mail Testing PHP Script,
//developer.vipulpatil@gmail.com
