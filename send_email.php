<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'kbpatil370922@kkwagh.edu.in';                     //SMTP username
        $mail->Password   = 'kbpatil370922@kkwagh';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('kbpatil370922@kkwagh.edu.in', 'Shiksha Sangam');
        $mail->addAddress($femail);               //Name is optional
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password';
        $mail->Body    = '<h3> Click on below link to reset your password.</h3><br> <a href="http://localhost/shiksha_sangam/reset_password.php?email=?$femail&$token=$token"> click here</a><br> <h3> Regards <br> Shiksha Sangam</h3>';

        if($mail->send()){
            echo "We have send you the reset link in your email Id, Please check your email.";
        }
        else{
            echo " Something went wrong, Please try again later.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

