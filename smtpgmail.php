<?php
include("al.php"); 
?><?php
include "classes/class.phpmailer.php"; // include the class name
include ("connection.php"); 
if($_POST['StudentAlert']) 
{
    	$rno=$_POST['rno'];
  $sname=$_POST['sname'];
   $emailid=$_POST['emailid'];
  $phone=$_POST['phone'];
  $mdate=$_POST['mdate'];
   $mcourse=$_POST['mcourse'];
  $mbatch=$_POST['mbatch'];
 $mdesc=$_POST['mdesc'];
}




$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // 465 or 587
$mail->IsHTML(true);
$mail->Username = "forstudentsuse@gmail.com";
$mail->Password = "a2zstudent";
$mail->SetFrom("forstudentsuse@gmail");
$mail->Subject = "Alumni Alert";
$mail->Body = "<b>Dear Alumni $sname,</b><br/>Meeting Details are as follows.<br/>Sheduled for: $mcourse in $mbatch batch.<br/>Scheduled on: $mdate.<br/>Additional Details about meeting: <b>$mdesc</b><br/>";

$mail->AddAddress("$emailid");
$mail->AddAddress("$phone@ideacellular.net");


 if(!$mail->Send())
{
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
header('Location:alumnialert.php?status=Updated'); 
	//echo "Message has been sent";
}
	


?>