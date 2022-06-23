<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../../css/register.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/cf05e83bf0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h2 style="text-align: center"><a href="/">Lingscars</a></h2>
        <div class="form">
            <h1>Log In To Your Account</h1>
            <form action="/Auth/processLogin" method="post">
                <?= csrf_field() ?> 
                <div class="input-div">
                    <label class="label" for="email">Enter Your Email</label>
                    <input class="input" type="email" name="email" id="email" placeholder="Enter Your E-mail Here">
                    <i id="user-icon" class="fas fa-user"></i>
                </div>
                <div class="input-div">
                    <label  class="label" for="password">Enter Your Password</label>
                    <input class="input" type="password" name="password" id="password" placeholder="Enter Your Password Here">                    
                    <i id="password-icon" class="fas fa-lock"></i>
                </div>
                <button class="cta" type="submit" name="login">Log In</button>
            </form>
            <a href="#">Forgot password</a>
            <p>Don't have an account?<a href="/auth/register">Sign Up Here</a></p>
        </div>
    </div>
</body>
</html>