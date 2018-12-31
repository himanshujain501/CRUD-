<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Sign In</title>
<link href="{{ url('/')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="{{ url('/')}}/css/style.css" rel='stylesheet' type='text/css' />
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="name" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
				<a href="#">Forgot Password</a><br>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="dashboard">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>