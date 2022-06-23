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
            <h1>Sign Up For Lings Cars</h1>
            <form action="/Auth/processRegistration" method="post">
            <?= csrf_field() ?>
                <div class="input-div">
                    <label class="label" for="fname">What's Your First Name?</label>
                    <input class="input" type="text" name="fname" id="fname" placeholder="Enter Your First Name" required>
                </div> 
                <div class="input-div">
                    <label class="label" for="lname">What's Your Last Name?</label>
                    <input class="input" type="text" name="lname" id="lname" placeholder="Enter Your Last Name" required>
                </div>
                <label class="label" for="gender">What's Your Gender?</label>
                <select class="input dropdown" name="gender" id="gender" required>
                    <option value="" selected disabled>Choose Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <div class="input-div">
                    <label class="label" for="email">What's Your Email?</label>
                    <input class="input" type="email" name="email" id="email" placeholder="Enter Your E-mail Here" required>
                    <i id="user-icon" class="fas fa-user"></i>
                </div> 
                <div class="input-div">
                    <label class="label" for="password">Choose A Password</label>
                    <input class="input" type="password" name="password" id="password" placeholder="Enter Your Password Here" required>                    
                    <i id="password-icon" class="fas fa-lock"></i>
                </div>
                <div class="input-div">
                    <label class="label" for="confpassword">Confirm Your Password</label>
                    <input class="input" type="password" name="confpassword" id="confpassword" placeholder="Confirm Your Password Here" required>                    
                    <i id="password-icon" class="fas fa-lock"></i>
                </div>
                
                <button class="cta" type="submit" name="register">Sign Up</button>
            </form>
            <p>Already have an account?<a href="/auth/login">Login Here</a></p>
        </div>
    </div>
</body>
</html>

<!-- JS code to validate password confirmation fields -->
<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confpassword");

    function validatePassword()
    {
        if(password.value != confirm_password.value) 
        {
            confirm_password.setCustomValidity("Passwords Don't Match");
        }
        else
        {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
