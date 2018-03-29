<?php

require 'classSimpleMail.php';

$mail = new SimpleMail();

$mail->host = 'smtp.gmail.com';
$mail->user = 'username@gmail.com';
$mail->pass = 'password';
$mail->port = 465;
$mail->security = 'ssl';

$mail->subject = 'Hello';
$mail->message = 'This is a test message.';

$mail->from('username@gmail.com', 'Sender name');
$mail->to('recipient@domain.com', 'Receiver name');

if ($mail->send())
	echo 'Mail sent successfully.';
else
	echo 'Error: ' . $mail->error;

?>
