<?php
session_start();
require __DIR__ . "/vendor/autoload.php";
$client = new Google\Client;

$client->setClientId("987309453270-5psup4obanoq707c75e637246vu62ig0.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/redirect.php");
$client->addScope("email");
$client->addScope("profile");

$url = $client->createAuthUrl();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign In Dawm Agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/sigin1.css">
</head>

<body>
    <?php if (isset($_SESSION['error'])) { ?>
        <p class="error"><?php echo $_SESSION['error']; ?></p><br>
    <?php 
    unset($_SESSION['error']);
} ?>
    <script>
        window.onload = function() {
            const errorMessage = document.querySelector('.error');
            if (errorMessage) {
                setTimeout(() => {
                    errorMessage.style.display = 'none';
                }, 3000); // 3 secondes
            }
        };
    </script>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="signUp.php" method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="index.php" class="icon"><i class='bx bx-home-alt-2'></i></a>
                    <a href="<?= $url ?>" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="SignIn.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="index.php" class="icon"><i class='bx bx-home-alt-2'></i></a>
                    <a href="<?= $url ?>" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Your expert in creating high-performing,<br> attractive e-commerce websites.<br> Sign in to explore our services and turn your<br> vision into an online store.</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p> Welcome to DAWN Agency! Join us by signing up and gain access to personalized features, exclusive offers, and saved information. </p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <?php

    ?>
    <script src="assets/js/sigin1.js"></script>
    </div>


     
</body>

</html>