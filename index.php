<?php
$name = $_POST['name'];
$visitor_email= $_POST['email'];
$message = $_POST['message'];

$email_from= 'wecandoit7404@gmail.com';
$email_subject = "New form submission";
$emial_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n"
                "User Message: $message.\n"; 

$to = "taniyagarg18012001@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $vistor_email \r\n";
mail($to, $email_subject, $emial_body, $headers);
header("Location: index.html");
?>