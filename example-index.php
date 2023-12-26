<?php

require_once "database/connect.php";

$user_fname = $_POST['user_fname'];
$user_lname = $_POST['user_lname'];
$user_nickame = $_POST['user_nickname'];

$query =  "INSERT INTO users_adm (`user_fname`, `user_lname`, `user_nickname`) 
              VALUES ('$user_fname', '$user_lname', '$user_nickname')" or die(mysqli_error());	
if (mysqli_query($conn, $query,)) 
{	
	header('location: example.html');
	 exit;
}

else
{
	echo "Error: Could not able to execute $query. ".mysqli_error($conn);
}

?>