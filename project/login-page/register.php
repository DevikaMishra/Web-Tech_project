<?php 
	session_start();
	error_reporting(0);
	if($_POST['submit']){
		$username = strip_tags($_POST['username']);
		$name = strip_tags($_POST['name']);
		$password = strip_tags($_POST['password']);
		$db = mysqli_connect("localhost", "root", "", "quiz") or die ("Failed to connect");
		$query = "INSERT INTO users VALUES('$username','$name', '$password')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Succesfully registered";
			header('Location: index.php');
		}
		else {
			echo "Failed to register";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h1>Register</h1>
<form method="post" action="register.php">
	<input type="text" name = "username" placeholder="Enter username">
	<input type="text" name = "name" placeholder="Enter name">
	<input type="password" name="password" placeholder="Enter password here">
	<input type="submit" name="submit" value="Register">
</form>
<a href = "index.php" >Login</a>

</body>
</html>