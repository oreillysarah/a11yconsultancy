<?php

if(!isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject =$_POST['subject'];


//Validate first
if(empty($name||empty($email)||empty($subject))
{
    echo "name, emai and subject are required";
    exit;
}

$email_from='oreillysarah@gmail.com';
$email_subject="New Form submission";
$email_body="You have recieved a new message from the user $name. \n"."EMAIL ADDRESS: $email\n"."Here is the message:\n $message".

$to="oreillysarah@gmail.com";
$headers ="From: $email_from \r\n";

//send the email
mail($to,$subject,$email_body,$headers);
//done direct to thank you page



?>

