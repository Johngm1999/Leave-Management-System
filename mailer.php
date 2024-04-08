<?php

/**
 * This example shows how to send a message to a whole list of recipients efficiently.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/PHPMailer.php'
require 'phpmailer/src/Exception.php'
require 'phpmailer/src/SMTP.php'

mail($addr,$sub,$body){
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->Username = 'jacobyohannan005@gmail.com';
    $mail->Password = 'ttifzbjcmiscorhu';
    $mail->SMTPSecure = 'tls';

    $mail->setFrom('jacobyohannan005@gmail.com');
    
    $mail->isHTML(true);
    $mail->addAddress($_POST['email']);
    $mail->Subject =$_POST['subject'];
    $mail->Body =$_POST['message'];
    $mail->send();
}
?>