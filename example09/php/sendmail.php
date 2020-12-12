<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mail';
$mail->Port = 25;
$mail->setFrom('info@dockerworkshop.com', 'Docker Workshop');
$mail->addAddress('example@email.com', 'Receiver Name');
$mail->Subject = 'Test Email';
$mail->Body = 'This is a plain text message body';
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>