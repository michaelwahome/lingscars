<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>

	<!--Personal css file-->
	<link rel="stylesheet" href="style_login.css">
	<!--Bootstrap css-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--Bootstrap Bundle-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
	
	<div class="canvas">
		<!--Navigation Bar-->
		<nav class="navbar navbar-dark bg-dark">
		 	<div class="container-fluid">
		    	<a class="navbar-brand" href="/" style="font-family: Lucida Handwriting; font-size: x-large;">
		      		<!--
		      		<img src="optional-image" width="70" class="d-inline-block align-text" style="border-radius: 50%;">
		      		-->
		      		Lingscars
		      	</a>
			</div>
		</nav>

		<!--Login Form-->

		<h1>Log In To Your Account</h1>
		
		<div class="login_form">
			<form method="post" action="">
				<!--  csrf_field()  -->

				<div class="mb-3">
				  	<label class="form-label" for="email">Email</label>
					<input class="form-control" type="text" placeholder="Enter Your Email Here" id="email" name="email" required>
				</div>
				<div class="mb-3">
				  	<label class="form-label" for="password">Password</label>
					<input class="form-control" type="password" placeholder="Enter Your Password Here" id="password" name="password" required>
				</div>				

				<div style="text-align: center;">
					<input class="btn btn-dark" type="Submit" value="Login">
				</div>
				
				<hr class="solid">
				
				<p>Don't Have An Account Yet? 
					<a href="/auth/register" style="text-decoration: none; color: green;">Sign Up Here.</a>
				</p>
			</form>
		</div>
		
		
	</div>
</body>
</html>