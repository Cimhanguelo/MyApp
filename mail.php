<?php


$fullname = $_POST['fullname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "paindiary@gmail.com";
$subject = "Mail From PainDiary";
$txt ="Name = ". $fullname . "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . "\r\n  Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@paindiary.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect to thankyou page
header("Location:thankyou.html");







?>