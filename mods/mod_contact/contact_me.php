<?php
include "phpmailer/class.phpmailer.php";
include "phpmailer/class.smtp.php";

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = utf8_decode($_POST['name']);
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = utf8_decode($_POST['message']);
	
// Create the email and send the message

$email_user = "admin@c2k.cl";
$email_password = "1973906090Kdoki";
$the_subject = "Contacto desde la web";
$address_to = "info@c2k.cl";
$from_name = $name;
$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "mail.c2k.cl"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;

$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->From = $email_address;
$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h2 style='color:#3498db;'><i>".$name."</i></h2>";
$phpmailer->Body .= "<p>".$message."</p>";
$phpmailer->Body .= "<p>_____________________________________</p>";
$phpmailer->Body .= "<p>Contacto: ".$phone."</p>";
$phpmailer->IsHTML(true);

$phpmailer->Send();
return true;
?>
