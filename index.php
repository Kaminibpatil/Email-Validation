<?php
include 'assets/php/constant.php';
include 'header.php';
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['email_status']) && $_SESSION['email_status'] == 1) {
    header("location:post.php");
}
?>
<title>Shiksha Sangam Portal</title>
</head>

<body style="background-image: url(assets/images/bannerImg1.png);" class="bg_img">
    <div class="logo">
        <img src="<?= base_url ?>/assets/images/logo.png" alt="not found">
    </div>
    <nav>
        <ul>
            <li class="sign">
                <a href="#" class="nav_link">Sign Up</a>
            </li>
            <li class="login">
                <a href="#" class="nav_link">Login</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="text-center">
            <img src="<?= base_url ?>/assets/images/loader.gif" width="50px" height="50px" class="m-2" id="loader">
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-4" id="alert">
                <div class="alert alert-success text-center">
                    <strong id="result">
                    </strong>
                </div>
            </div>
        </div>
        <!-- login form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="" method="POST" role="form" class="p-2" id="login-form">
                    <div class="form-group">
                        <input type="email" name="email" value="<?php if (isset($_COOKIE['email'])) {
                                                                    echo $_COOKIE['email'];
                                                                } ?>" class="form-control" placeholder="E-mail" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required minlength="8" value="<?php if (isset($_COOKIE['password'])) {
                                                                                                                                                echo $_COOKIE['password'];
                                                                                                                                            } ?>">
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-7">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rem" id="customCheck" <?php if (isset($_COOKIE['email'])) { ?>checked <?php }  ?> class="custom-control-input">
                                <label for="customCheck" class="custom-control-label">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
                        </div>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <div class="d-inline-block" style="width: 50%;">
                            <input type="submit" name="login" id="login" value="Login" class="btn btn-primary w-100">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <p class="text-center">New User? <a href="#" class="sign">Sign Up here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <!-- login form end -->

        <!-- sign up form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="signup-box">
                <h2 class="text-center mt-2">Sign Up</h2>
                <form action="" method="POST" role="form" class="p-2" id="signup-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required minlength="8" id="pass">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name="cpass" class="form-control" placeholder="Confirm password" required minlength="8" id="cpass">
                    </div>
                    <br>
                    <div class="form-group row">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rem" id="customCheck2" class="custom-control-input">
                                <label for="customCheck2" class="custom-control-label">I accepts all terms & conditions</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <div class="d-inline-block" style="width: 50%;">
                            <input type="submit" name="signup" id="signup" value="Sign Up" class="btn btn-primary w-100">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <p class="text-center">Already have an account? <a href="#" id="login-btn" class="login">Login here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <!-- signup form end -->

        <!-- forgot password form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="" method="POST" role="form" class="p-2" id="forgot-form">
                    <div class="form-group">
                        <p>To reset your password, enter the email address and we will send reset password link on you email.</p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="femail" class="form-control" placeholder="E-mail" required>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <div class="d-inline-block" style="width: 50%;">
                            <input type="submit" name="forgot" id="forgot" value="Get Reset Link" class="btn btn-primary w-100">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <a href="#" class="login">Back to login</a>

                    </div>
                </form>
            </div>
        </div>
        <!-- forgot password form end -->
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url ?>/assets/js/script.js"></script>
</body>
</html>