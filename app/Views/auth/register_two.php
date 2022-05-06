<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/register.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/cf05e83bf0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h2 style="text-align: center"><a href="/">Lingscars</a></h2>
        <div class="form">
            <h1>Sign Up For Lings Cars</h1>
            <h2>Page 2 Of 2</h2>
            <form action="" method="post">
                <div class="input-div">
                    <label for="fname">What's Your First Name?</label>
                    <input class="input" type="text" name="fname" id="fname" placeholder="Enter Your First Name">
                </div> 
                <div class="input-div">
                    <label for="lname">What's Your Last Name?</label>
                    <input class="input" type="text" name="lname" id="lname" placeholder="Enter Your Last Name">
                </div>
                <label for="gender">What's Your Gender?</label>
                <select class="input dropdown" name="gender" id="gender">
                    <option value="" selected disabled>Choose Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <button class="cta" type="submit" name="register">Sign Up</button>
            </form>
            <p>Already have an account?<a href="/auth/login">Login Here</a></p>
        </div>
    </div>
</body>
</html>