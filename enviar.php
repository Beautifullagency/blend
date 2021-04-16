<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/Exception.php';
require 'vendor/PHPMailer/PHPMailer.php';
require 'vendor/PHPMailer/SMTP.php';;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msj = $_POST['message'];

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$body = "<b>This message was sent by: </b>" . $name . "<br>".
"<br><b>E-mail: </b>" . $email . "<br>".
"<br><b>Telephone contact: </b>" . $phone . "<br>".
"<br><b>Mesagge: </b>" . $msj . "<br>". 
"<br><b>Sent on: </b>" . date('d/m/Y', time()). "<br>";

//$body = utf8_decode($body);


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@blendaec.com';                     //SMTP username
    $mail->Password   = 'AECServices-2020';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@blendaec.com', 'Mesagge to Blend');
    $mail->addAddress('info@blendaec.com');     //Add a recipient             //Name is optional
    // $mail->addBCC('$email');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'New message from Blendaec.com';
    $mail->Body    = $body;

    $mail->send();
    echo 'Message has been sent';
    header("Location:index.html");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
