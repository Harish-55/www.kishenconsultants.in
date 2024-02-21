<?php

require 'mail/PHPMailerAutoload.php';

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];

$mail = new PHPMailer;

$mail-> isSMTP();

$mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@kishenconsultants.in';                 // SMTP username
$mail->Password = 'Kishen@2023';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('no-reply@kishenconsultants.in', 'Kishen Structural Consultants');
$mail->addAddress('kishenpatrick@gmail.com');
$mail->addBCC('testing.zworktechnology@gmail.com');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Enquiry from Submission mail from Kishen Structural Consultants';
$mail->Body    = " Name: {$name}<br>
Email: {$email}<br>
Mobile Number: {$mobile}<br>
Message: {$message}";
// $masil->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Refresh:1, url=redirect.php");
    exit();
}  
?>