<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.form
		{
			margin-left: 45%;
			margin-top: 10%;
			width: 50%;
			text-align: center;
			background-color: white;
			padding: 30px;
			border-radius: 5px;
			width: fit-content;
		}
		.button
		{
			display: flex;
			background-color: green;
			margin-left: 34%;
			border: green;
			border-radius: 3px;
			color: white;
		}
	</style>
</head>
<body bgcolor="seagreen">
	<div class="form">
		<h2>Login</h2>
		<form method="POST">
			<input type="text" name="username" placeholder="Enter your username"/><br><br>
			<input type="password" name="password" placeholder="Enter your password"/><br><br>
			<h5 align="left">Forgot password?</h5>
			<input type="submit" name="submit" value="Login" class="button" align="center"><br><br>
			Don't have an account:<a href="signup.php">Signup</a>
		</form>
	</div>
</body>
</html>