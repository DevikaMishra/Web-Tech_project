<?php 
// Including database connections
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input")); 
// Escaping special characters from submitting data & storing in new variables.
$id = mysqli_real_escape_string($con, $data->id);
$fname = mysqli_real_escape_string($con, $data->fname);
$lname = mysqli_real_escape_string($con, $data->lname);
$email = mysqli_real_escape_string($con, $data->email);
$branch = mysqli_real_escape_string($con, $data->branch);
$password = mysqli_real_escape_string($con, $data->pass);


// mysqli insert query
$query = "INSERT INTO teacher(id,Fname,Lname,Branch,password,email) VALUES ('$id','$fname','$lname','$branch','$pssword','$email')";
// Inserting data into database
//INSERT INTO `teacher`(`id`, `Fname`, `Lname`, `Branch`, `password`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
mysqli_query($con, $query);
echo true;
?>



