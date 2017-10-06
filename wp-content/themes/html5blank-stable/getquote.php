<?php 

// $name = $_REQUEST['contact.name'];
// $phone = $_REQUEST['contact.phone'];
// $email = $_REQUEST['contact.email'];
// $message = $_REQUEST['contact.message'];

$to = 'vianawebdev@gmail.com';
$subject = 'Quote';
$body = 'hello';
$headers = 'From: accviana@outlook.com' . "\r\n" .
    'Reply-To: vianawebdev@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);

?>