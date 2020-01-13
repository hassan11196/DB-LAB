<?php
$servername = 'localhost';
$username = 'test';
$password = 'test';


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("connection_failed:". $conn->connect_error);
}

$sql = 'CREATE DATABASE mydb';

if($conn->query($sql) == TRUE){
	echo 'DATABASE CREATED SUCCESSFULLY';
}
else{
	echo 'Error in DB Creation : ' . $conn->error;
}

$conn->close();





?>