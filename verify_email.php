<?php
require 'assets/php/connect.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = $_GET['email'];
    $enteredOTP = $_POST['otp'];
    $stmt = $conn->prepare("SELECT otp FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        $stmt->bind_result($storedOTP);
        $stmt->fetch();
        $stmt->close();
                if ($enteredOTP == $storedOTP) {
                    $stmt_u = $conn->prepare("UPDATE users SET otp='', email_status=1 WHERE email=?");
                    $stmt_u->bind_param("s", $email);
                    if ($stmt_u->execute()) {
                        $msg = "OTP matched successfully!<br> You can <a href='index.php'>Login here</a>";
                    } else {
                        $msg = "Failed to update email status.";
                    }
                } else{
                    $msg="OTP does not match. Please try again.";
                }
            }
            else{
                $msg="Failed to retrieve OTP from database.";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Reset password</title>
</head>

<body>
    <div class="container">
        <div class="col-lg-4 offset-lg-4 bg-light rounded" id="verify-box">
            <h2 class="text-center mt-2">Email Verification</h2>

            <h4 class="text-success text-center"><?= $msg; ?></h4>
            <form action="" method="POST" role="form" class="p-2">
                <div class="form-group">
                    <p class="text-center">To verify your email, enter the OTP that we have sent to your email.</p>
                </div>
                <div class="form-group text-center">
                    <div class="d-inline-block" style="width: 50%;">
                        <input type="number" name="otp" class="form-control" required>
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="d-inline-block" style="width: 50%;">
                        <input type="submit" name="submit" value="Verify OTP" class="btn btn-success w-100">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

</body>

</html>