<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "dgarg7978@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@portfolio.com" . "\r\n" .
"CC: sample@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>