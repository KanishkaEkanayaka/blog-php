<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogger</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
	<div class="pt-5 pb-5">
	  <h1 class="text-center display-1">Blogger</h1>
	</div>
  <div class="login-reg-panel mt-5">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>It's time to explore the new world.</p>
			<label class="btn btn-info" id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Get register today ro start your journey.</p>
			<label class="btn btn-info" id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
		<form method="post" action="loginform.php">
			<div class="login-show">
				<h2>LOGIN</h2>
				<input name="emaillog" type="text" placeholder="Email">
				<input name="pword" type="password" placeholder="Password">
				<div class="align-self-end ml-auto">
                  <button type="submit" class="btn btn-success">
                    Login!
                  </button>
            	</div>
				<a href="">Forgot password?</a>
			</div>
		</form>
		<form method="post" action="registerform.php">
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="password" name="confirmpassword" placeholder="Confirm Password" required>
				<div class="align-self-end ml-auto">
                  <button type="submit" class="btn btn-success">
                    Register!
                  </button>
            	</div>
			</div>
		</form>
		</div>
	</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src="login.js"></script>  

</body>
</html>