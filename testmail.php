<?php
$to = 'garomagalana3@gmail.com';
$subject = 'Test email from your portfolio';
$message = 'If you see this, PHP mail() works!';
$headers = 'From: webmaster@yourdomain.com';
if(mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully.';
} else {
    echo 'Mail failed.';
}
?>