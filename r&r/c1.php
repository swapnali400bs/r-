<?php
$name=$_GET['Name'];
$email=$_GET['Email'];
$mobile=$_GET['Mobile'];
$message=$_GET['query'];

$servername="localhost";
$username="root";
$password="";
$db="r&r";

	$conn=mysqli_connect($servername, $username, $password, $db);
	
	$sql="insert into client(C_Name, Email, Phone, Query) values('$name','$email', '$mobile', '$message')";
	if(mysqli_query($conn,$sql)){
		echo"done";
	}
	else{
		echo"failed".mysqli_error($conn);
	}
	mysqli_close($conn);
?>