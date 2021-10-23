<?php
//get data from form  

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "hello@vinaygodawarthi.in";
$subject = "Mail From Personal website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@vinaygodawarthi.in" . "\r\n" .
"CC: vinaygodawarthi@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>