<?php
require 'assets/php/connect.php';
$msg = "";
if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    $stmt = $conn->prepare("SELECT id FROM users WHERE email=? AND token=? AND token<>'' AND tokenexpire>NOW()");
    $stmt->bind_param("ss", $email, $token);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        if (isset($_POST['submit'])) {
            $newpass = sha1($_POST['newpass']);
            $cnewpass = sha1($_POST['cnewpass']);
            if ($newpass == $cnewpass) {
                $stmt_u = $conn->prepare("UPDATE users SET token='', pass=? , cpass=? WHERE email=?");
                $stmt_u->bind_param("sss", $newpass, $cnewpass, $email);
                $stmt_u->execute();

                $msg = "Password changed successfully!<br> <a href='index.php'>Login Here</a>";
            } else {
                $msg = "Password did not matched!";
            }
        }
    } else {
        header("location:index.php");
        exit();
    }
} else {
    header("location:index.php");
    exit();
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
        <div class="row justify-content-center">
            <div class="col-lg-5 mt-5">
                <h2 class="text-center p-2 rounded">Reset Your Password</h2>
                <h4 class="text-success text-center"><?= $msg; ?></h4>
                <form action="" method="POST" role="form" class="p-2" id="forgot-form">
                    <div class="form-group">
                        <p class="text-center">Changed your password.</p>
                    </div>
                    <div class="form-group">
                        <input type="password" name="newpass" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="cnewpass" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group text-center">
                        <div class="d-inline-block" style="width: 50%;">
                            <input type="submit" name="submit" value="Reset Password" class="btn btn-success w-100">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>