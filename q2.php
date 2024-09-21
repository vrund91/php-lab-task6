<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		div{
			align-items: center;
		}
		.container, .container2 {
			align-content: center;
            background-color: white;
            border-radius: 8px;
            width: 100%;
            max-width: 600px;
            padding: 20px;

		body{
			align-items: center;
			margin: 0;
		}
		table{
			border-collapse: collapse;
			width: 40%;
		}
		td,th{
			border: 1px solid black;
			padding: 8px;
			background-color: cyan;
		}
		th{
			background-color: purple;
		}
	</style>
</head>
<body>
	<div class="container" align="center">
	<form method="POST">
	<table>
		<tr>	
		  <th colspan="2" class="form-title" align="center">Registration Form</th>
	    </tr>
		</div>
		<tr>
			<td>Username</td>
			<td><input type="text" name="name1" required/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" required/></td>
		</tr>
		<tr>
			<td>User Type</td>
			<td>
				<select name="user_type" id="user_type">
				<option value="">--select--</option>
				<option value="Administrator">Administrator</option>
				<option value="ordinary user">ordinary user</option>
				<option value="operator">operator</option>				
				</select>
			</td>
		</tr>
		<tr>
			<td>Display Name</td>
			<td><input type="text" name="Details" required/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
			<textarea id="Address" name="Address" rows="4" cols="50" required/>
			</textarea>
		</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" name="mail" required/>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Male">Male
			</td>
		</tr>
		<tr>
			<div style="background-color: cyan;">
			<td colspan="2" align="center" ><input type="checkbox" name="terms" /required>I accept Terms and Conditions</td>
			</div>
		</tr>
		<tr>
			<th colspan="2" align="center"><input type="submit" name="submit" value="submit"></th>
		</tr>
		<br>
	</table>
</form>
</div>
<div class="container2" align="center">
<table>
<?php
if(isset($_POST['submit']))
{
	$Username=$_POST['name1'];
	$Password=$_POST['pass'];
	$user_type=$_POST['user_type'];
	$Display=$_POST['Details'];
	$Address=$_POST['Address'];
	$Email=$_POST['mail'];
	$Gender=$_POST['gender'];

    echo "<h2>Your output is:</h2>";
    
	echo "<tr>";
	echo "<td>";
	echo "Username: " . $Username;
	echo "<br>";
	echo "Password: " . $Password;
	echo "<br>";
	echo "User Type: " . $user_type;
	echo "<br>";
	echo "Display: "  . $Display;
	echo "<br>";
	echo "Address: " . $Address;
	echo "<br>";
	echo "Email: "  . $Email;
	echo "<br>";
	echo "Gender: " . $Gender;
	echo "<br>";
	echo "</td>";
	echo "</tr>";
}
?>
</table>
</div>
</body>
</html>