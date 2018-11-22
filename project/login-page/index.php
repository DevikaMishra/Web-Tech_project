<?php
session_start();
error_reporting(0);
if (isset($_POST))
{
if($_POST['submit']) {
	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	$db = mysqli_connect("localhost", "root", "", "question_gen") or die ("Failed to connect");
	$sql = "SELECT id,password FROM teacher where id = '$username' ";
	$query = mysqli_query($db, $sql);
	echo "hello";
	//echo $query;
	if($query) {
		$row = mysqli_fetch_row($query);
		echo $row;
		$userId= $row[0];
		//$dbUserName = $row[1];
		$dbPassword = $row[1];
	}
	if($username == $userId && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: ../faculty-ui/paper_details.html');
	}
	else {
		echo "<b><i>Incorrect credentials</i><b>";

	}
}
}

else echo "not set";

?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP-SQL Login</title>
	<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #99d9e8;
}


li {
    float: left;
    border-right:1px solid #000;
	
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

h1{
    color:white;
}

li a:hover:not(.active) {
    background-color: white;
}

.active {
    background-color: Blue
    ;
}
body {
    min-height:100%;
    background-color: #263238;
	color:white;
}
</style>

</head>
<body>
<ul class="header">
  <li><a class="active" href="../home.html">Home</a></li>
  <li><a href="">Student Registration</a></li>
  <li><a href="../angular_CRUD_download/index.html">Faculty Registration</a></li>
  <li style="float:right"><a href="">Login</a></li>
</ul>
<br/>
<h1>Login</h1>
<form method="post" action="">
	<input type="text" name = "username" placeholder="Enter username">
	<!--<input type="text" name = "name" placeholder="Enter name">-->
	<input type="password" name="password" placeholder="Enter password here">
	<input type="submit" name="submit" value="Login">
</form>

<a color = "white" href="../angular_CRUD_download/index.html" >Register</a>

</body>
</html>