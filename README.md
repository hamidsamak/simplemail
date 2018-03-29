# Simple Mail
PHP SMTP Mail Library

Simple Mail is a PHP library for sending email through SMTP protocol using authentication.

Supports SSL and TLS security.

```php
require 'classSimpleMail.php';

$mail = new SimpleMail('smtp.gmail.com', 587, 'tls');
$mail->auth('gmaccount@gmail.com', 'password');

$mail->from('burt.johnson@hotmail.com', 'Burt Johnson');
$mail->to('john.smith@yahoo.com', 'John Smith');

$mail->subject = 'Hello, partner';
$mail->message = '<h3>My Message</h3>
                  <b>This</b> is a html test message.'

if ($mail->send())
	echo 'Mail sent successfully.';
else
	echo 'Error: ' . $mail->error;
```
