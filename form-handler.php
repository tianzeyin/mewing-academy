<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$email_from = "yintz1207@gmail.com";

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n".

$to = "yintz1207@gmail.com";
$headers = "From: $small_from \r\n";
$headers . = "Reply-To: $visitor_email \r\n";

mail ($to, $small_subject, $email_body, $headers);
header("location: contact.html");
?>