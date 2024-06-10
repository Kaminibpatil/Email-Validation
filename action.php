<?php
require "assets/php/connect.php";
// email verifications files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// when signup form submitted
if (isset($_POST['action']) && $_POST['action'] == 'signup') {
    $name = check_input($_POST['name']);
    $email = check_input($_POST['email']);
    $pass = check_input($_POST['pass']);
    $cpass = check_input($_POST['cpass']);
    $pass = sha1($pass);
    $cpass = sha1($cpass);
    $created_dt = date('Y-m-d');

    if ($pass != $cpass) {
        echo "password did not matched";
        exit();
    } else {
            // Check email is already registered
        $sql = $conn->prepare("SELECT email FROM users WHERE email=?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();
        if ($result->num_rows > 0) {
            echo "Email Id is already registered, try different";
        } else {
            // insert new user into db
            $stmt = $conn->prepare("INSERT INTO users (name, email, pass, cpass, created_dt) VALUES(?,?,?,?,?)");
            $stmt->bind_param("sssss", $name, $email, $pass, $cpass, $created_dt);
            if ($stmt->execute()) {

                // generate and store otp
                $otp = rand(100000, 999999);
                $stmt_otp = $conn->prepare("UPDATE users SET otp=? WHERE email=?");
                $stmt_otp->bind_param("is", $otp, $email);
                $stmt_otp->execute();

                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'your email address';                     //SMTP username
                $mail->Password   = 'email password';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
                //Recipients
                $mail->setFrom('your email address', 'Shiksha Sangam');
                $mail->addAddress($email);               //Name is optional

                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Verify Email';
                $mail->Body =  "Your OTP for email verification is:<strong>".$otp."</strong>";

                if ($mail->send()) {
                    echo 'Sign up successfully, Please verify your email ID <a href="verify_email.php?email=' . $email .'">Verify Now</a>';
                } else {
                    echo "Failed to send OTP. Please try again later.";
                }
            } else {
                echo "something is wrong, Please try again";
            }
        }
    }
}

// when login form submitted
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    session_start();
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $stmt_l = $conn->prepare("SELECT * FROM users WHERE email=? AND pass=?");
    $stmt_l->bind_param("ss", $email, $password);
    $stmt_l->execute();
    $result = $stmt_l->get_result();
    $user=$result->fetch_assoc();

    if ($user != null) {
        $_SESSION['email'] = $email;
        if (!empty($_POST['rem'])) {
            setcookie('email', $_POST['email'], time() + (10 * 365 * 24 * 60 * 60));
            setcookie('password', $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
        } else {
            if (isset($_COOKIE['email'])) {
                setcookie("email", "");
            }
            if (isset($_COOKIE['password'])) {
                setcookie("password", "");
            }
        }

        if($user['email_status']==0){
            echo 'Check your email to verify OTP.<br><a href="verify_email.php?email=' . $email .'">Verify Now</a>';

            exit();
        }
        else{
            echo "ok";
        }
    } 
    else {
        echo "Login Failed, check your email and password";
    }
}



// when forgot form submitted
if (isset($_POST['action']) && $_POST['action'] == 'forgot') {
    $femail = $_POST['femail'];
    $stmt_p = $conn->prepare("SELECT id FROM users WHERE email=?");
    $stmt_p->bind_param("s", $femail);
    $stmt_p->execute();
    $res = $stmt_p->get_result();

    if ($res->num_rows > 0) {
        $token = "asdfghjkloiuytrewsdcfvg875421369856";
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);

        $stmt_i = $conn->prepare("UPDATE users SET token=? , tokenexpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email=?");
        $stmt_i->bind_param("ss", $token, $femail);
        $stmt_i->execute();

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'your email address';                     //SMTP username
        $mail->Password   = 'email password';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('email address', 'Shiksha Sangam');
        $mail->addAddress($femail);               //Name is optional

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password';
        $mail->Body = '<h4> Click on below link to reset your password.</h4><a href="http://localhost/shiksha_sangam/reset_password.php?email=' . $femail . '&token=' . $token . '"> Click here</a><br> <h3> Regards <br> Shiksha Sangam</h3>';

        if ($mail->send()) {
            echo "We have send you the reset link in your email Id, Please check your email.";
        } else {
            echo " Something went wrong, Please try again later.";
        }
    } else {
        echo "Email id is not registered";
    }
}

function check_input($data)
{
    $data = trim($data);                  //remove whitespaces
    $data = stripslashes($data);          //remove slashes
    $data = htmlspecialchars($data);
    return $data;
}
