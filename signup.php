<html>
<head>
	<title>Signup</title>
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
			border:green;
			border-radius: 3px;
			color: white;
		}
	</style>
</head>
<body bgcolor="seagreen">
	<div class="form">
		<h2>Sign up</h2>
		<form method="POST">
			<input type="text" name="username" placeholder="Enter your username"><br><br>
			<input type="password" name="password" placeholder="Enter your password"/>
			<br><br>
			<input type="password" name="confirmpass" placeholder="Enter confrim password"/><br><br>
			<input type="submit" name="submit" value="signup" class="button" align="center"><br>
			Already have an account:<a href="q3.php">Login</a>
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$Username=$_POST['username'];
			$password=$_POST['password'];
			$confirmpass=$_POST['confirmpass'];

			echo "Sign up is Successfull!";
			echo "<br>";
			echo "your name is:".$Username;
			echo "<br>";
			echo "your password is:".$password;
		}
		?>
	</div>
</body>
</html>