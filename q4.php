<html>
<head>
	<title>PHP REGISTRATION FORM</title>
	<style type="text/css">
		.h1
		{
			text-align: center;
			color: purple;
		}
		.container
		{
			margin-left: 38%;
			margin-top: 1%;
			border: 1px solid black;
			background-color: skyblue;
			width: fit-content;
			text-align: center;
		}
		.button 
		{
			display: flex;
			margin-left: 105%;
			color: black;
			background-color: white;
			border: 2px solid black;
			width: fit-content;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1 class="h1">PHP REGISTRATION FORM EXAMPLE</h1>
	<div class="container">
		<form method="POST">
			<table>
				<tr>
					<td>Enter your Name:</td>
					<td><input type="text" name="name" placeholder="Enter name"></td>
				</tr>
				<tr>
					<td>Enter your Email:</td>
					<td><input type="email" name="email" placeholder="Enter name"></td>
				</tr>
				<tr>
					<td>Enter your password:</td>
					<td><input type="password" name="password" placeholder="Enter password"></td>
				</tr>
				<tr>
					<td>Enter your address:</td>
					<td><textarea height=250 width=250 name="address" id="address" placeholder="Enter Address"></textarea></td>
				</tr>
				<tr>
					<td>Enter out mobile number:</td>
					<td><input type="tel" name="mobile" placeholder="Enter number"></td>
				</tr>
				<tr>
					<td>Select your gender:</td>
					<td>Male<input type="radio" name="gender" value="Male">
                        Female<input type="radio" name="gender" value="Female"></td>
				</tr>
				<tr>
					<td>Choose your hobbies:</td>
                    <td>
                	Cricket<input type="checkbox" name="hobbies[]" value="Cricket" id="cricket">
                	Singing<input type="checkbox" name="hobbies[]" value="Singing" id="singing">
                	Dancing<input type="checkbox" name="hobbies[]" value="Dancing" id="dancing">
                	</td>
				</tr>
				<tr>
                    <td>Set your profile pic:</td>
                    <td><input type="file" name="profile"></td>
                </tr>
                <tr>
                    <td>Select your date of birth:</td>
                    <td><input type="date" name="birthdate"><br><br></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Register" class="button" align="center"></td>
                </tr>
			</table>
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
         	$email = $_POST['email'];
         	$password = $_POST['password'];
         	$address = $_POST['address'];
         	$mobile = $_POST['mobile'];
         	$gender = $_POST['gender'];
         	$hobbies = $_POST['hobbies'];
         	$profilepic = "";
         	if(isset($_FILES['profile']))
            {
             	$profilepic = $_FILES['profile'];
            }
            $dob = $_POST['birthdate'];
            echo "Registration Successfull";
         	echo "<br>";
         	echo $name;
         	echo "<br>";
         	echo $email;
         	echo "<br>";
         	echo $password;
         	echo "<br>";
         	echo $address;
         	echo "<br>";
         	echo $mobile;
         	echo "<br>";
         	echo $gender;
         	echo "<br>";
         	foreach($hobbies as $values)
            {
              	echo "$values\n";
            }
         	echo "<br>";
         	echo $profilepic;
		}
		?>
	</div>
</body>
</html>
