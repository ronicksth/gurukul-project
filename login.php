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
	$password=$_POST["password"];
	$confirmPassword=$_POST["confirmPassword"];

	If($password==$confirmPassword)
	{
		$msg="password matched";
		$sql = "INSERT INTO loginin (userid,password,confirmPassword) VALUES ('$userid','$password','$confirmPassword')";

		if($conn->query($sql)===TRUE)
		{
			header("Location: index.php");
		}
		else
		{
			echo "Signup failed";
		}
	}
	else
	{
		$msg="password doesnt match";
	}

	
	$conn->close();
}




?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Form</title>
	<style>
		body {
			margin: 0;
			font-family: Arial, sans-serif;
			background-color: #f0f2f5;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.container {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 0 15px rgba(0,0,0,0.1);
			width: 100%;
			max-width: 400px;
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
			color: #333;
		}
		input[type="text"],
		input[type="password"],
		input[type="submit"] {
			width: 100%;
			padding: 12px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #007bff;
			color: white;
			border: none;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
		.message {
			text-align: center;
			margin-top: 15px;
			font-weight: bold;
		}
		.success {
			color: green;
		}
		.error {
			color: red;
		}
	</style>
</head>
<body>

<div class="container">
	<h2>User Registration</h2>
	<form method="post" action="">
		<input type="text" name="userid" placeholder="Enter User ID" required>
		<input type="password" name="password" placeholder="Enter Password" required minlength="6">
		<input type="password" name="confirmPassword" placeholder="Confirm Password" required minlength="6">
		<span id="error-message" class="error"></span>
		<input type="submit" name="submit" value="Submit">
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
