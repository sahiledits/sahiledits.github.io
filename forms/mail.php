<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "sahiljosan50@gmail,com";

$subject = "Mail From sahiljosan.github.io";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@sahiljosan.github.io" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html");
?>