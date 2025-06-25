<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 400px;
			margin: 50px auto;
			background-color: #fff;
			padding: 25px;
			border-radius: 10px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
			margin-bottom: 5px;
			color: #555;
		}
		input[type="text"],
		input[type="password"],
		input[type="date"],
		select {
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 4px;
			width: 100%;
			box-sizing: border-box;
		}
		.gender-options {
			display: flex;
			gap: 10px;
			align-items: center;
			margin-bottom: 10px;
		}
		.gender-options label {
			margin: 0;
		}
		input[type="submit"] {
			margin-top: 20px;
			padding: 10px;
			font-size: 16px;
			background-color: #28a745;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #218838;
		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Sign Up Account</h1>
		<form method="post">
			<label for="userid">User ID</label>
			<input type="text" id="userid" name="userid" placeholder="Enter User ID" required>

			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter Username" required>

			<label>Gender</label>
			<div class="gender-options">
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
			<input type="password" id="password" name="password" placeholder="Enter Password" required>

			<input type="submit" name="save" value="Save">
		</form>
	</div>

</body>
</html>
