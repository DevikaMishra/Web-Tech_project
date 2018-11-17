<html>
<body>
<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "question_gen";
$con = new mysqli($servername, $username, $password, $dbname);
$con = mysql_connect();

if ($con->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
	$query="INSERT INTO Teacher VALUES ('$_POST[fid]','$_POST[first-name]','$_POST[last-name]','$_POST[branch]','$_POST[password]')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	?>
	<html>
	<prompt>
	<?php
		echo "succussful Sign-up";
	?>
	</prompt>
	
	<prompt>
	<?php
	}	
	
	else
		echo "unsucc";?></prompt></html>
	
	<?php
			} 

	?>

</body>
</html>