<?php
use PHPMailer\PHPMailer\PHPMailer;
require '/usr/lib/vendor/autoload.php';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail';
    $mail->Port = 25;
    $mail->setFrom($email, 'Docker Workshop');
    $mail->addAddress('info@mailcatcher.com', 'Receiver Name');
    $mail->Subject = 'New message';

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br($message)];
    $body = join('<br />', $bodyParagraphs);
    $mail->Body = $body;
    if (!$mail->send()) {
        $message =  'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $message =  'The email message was sent. Thank you!';
    }
}
?>

<html>
	<head>
		<title>Contact Us Example</title>
	</head>
<body>
	<h3>Contact Us</h3>
	<form name="frmContactUs" method="post" action="contactus.php">
		<p>Name: <input type="text" name="name" value="" /></p>
		<p>Email: <input type="text" name="email" value="" /></p>
		<p>Message: <textarea name="message"></textarea></p>
		<input type="submit" value="Submit" />
	</form>

	<p>
	<?php echo((!empty($message)) ? $message : '') ?>
	</p>
</body>
</html>