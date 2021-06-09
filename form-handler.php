<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='info@website.com';
$subject="Site querry";
$email_body= "Username : $name.\n"
            "User Email : $visitor_email.\n"
            "Subject : $subject.\n"
            "User Email: $message.\n";

$to ='client@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply to $visitor_email \r\n";
mail($to,$subject,$email_body,$headers)

header("Location: contact.html")
 ?>
