<?php
if( isset($_POST['submit']))
//get data from form  
{
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$email = "enchantedsimply@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@simplyhere.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("C:\Users\SAYANTANI DEY\Desktop\AMITY FOLDER\PROGRAMS\HTML\homepage.html");
}
?>