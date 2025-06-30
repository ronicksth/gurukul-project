<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ronick_sth";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["submit"]))
{
	$userid=$_POST["userid"];
	$username=$_POST["username"];
	$gender=$_POST["gender"];
	$dob=$_POST["dob"];
	$country=$_POST["country"];
	$password=$_POST["password"];
	$confirmPassword=$_POST["confirmPassword"];

	$sql = "INSERT INTO signup(userid, username, gender, dob, country, password, confirmPassword) VALUES('$userid', '$username', '$gender','$dob','$country','$password','$confirmPassword')";

	if($conn->query($sql)===TRUE)
	{
		header("Location: login.php");
	}
	else
	{
		echo "Error in signup ";
	}
	$conn->close();
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign Up</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 400px;
			margin: 50px auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
		}
		h1 {
			text-align: center;
			color: #333;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		label {
			margin-top: 10px;
			color: #333;
		}
		input, select {
			padding: 10px;
			margin-top: 5px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 14px;
		}
		.gender-group {
			display: flex;
			align-items: center;
			gap: 10px;
			margin-top: 5px;
		}
		input[type="submit"] {
			margin-top: 20px;
			background-color: #28a745;
			color: white;
			border: none;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #218838;
		}
		.error {
			color: red;
			font-size: 13px;
		}
	</style>
</head>
<body>

<div class="container">
	<h1>Sign Up Account</h1>
	<form method="post" onsubmit="return validateForm()">
		<label for="userid">User ID</label>
		<input type="text" id="userid" name="userid" placeholder="Enter User ID" required>

		<label for="username">Username</label>
		<input type="text" id="username" name="username" placeholder="Enter Username" required>

		<label>Gender</label>
		<div class="gender-group">
			<input type="radio" id="male" name="gender" value="male" required>
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label>
		</div>

		<label for="dob">Date of Birth</label>
		<input type="date" id="dob" name="dob" required>

		<label for="country">Country</label>
		<select id="country" name="country" required>
			<option value="">Select Country</option>
			<option value="nepal">Nepal</option>
			<option value="india">India</option>
		</select>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" placeholder="Enter Password" required minlength="6">

		<label for="confirmPassword">Confirm Password</label>
		<input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required minlength="6">

		<span id="error-message" class="error"></span>

		<input type="submit" value="Save" name="submit">
	</form>
</div>

<script>
	function validateForm() {
		const password = document.getElementById("password").value;
		const confirmPassword = document.getElementById("confirmPassword").value;
		const errorMessage = document.getElementById("error-message");

		if (password !== confirmPassword) {
			errorMessage.textContent = "Passwords do not match.";
			return false;
		}
		errorMessage.textContent = "";
		return true;
	}
</script>

</body>
</html>
