<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rahul_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
 if (isset($_POST['log']))
 {
    
    $user_id=$_POST["user_id"];
    $pass=$_POST["pass"];
    

     $sql="select * from sign_up where user_id='$user_id' and pass='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        
        header("Location: index.php");
    } 
    else 
    {
        echo "Invalid username or password.";
    }
 }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assest/css/log.css">
</head>
<body>
<h1>Login To Site</h1>
<form method="post">
	<input type="textbox" name="user_id" placeholder="Enter your user id"><br>
	<input type="password" name="pass" placeholder="Enter your password"><br>
	<input type="submit" name="log" value="login">
</form>
</body>
</html>