<?php
$servername = 'localhost';
$username = 'test';
$password = 'test';
$dbname = 'mydb';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("connection_failed:". $conn->connect_error);
}

$sql = "Insert into muguests (name,email) values ('hohn', 'hohn@gmail.com');";
$sql .=  "Insert into muguests (name,email) values ('mang', 'mang@gmail.com');";
$sql .=  "Insert into muguests (name,email) values ('ccs', 'dsae@gmail.com');";

if($conn->multi_query($sql) == TRUE){
	echo 'Value Inserted SUCCESSFULLY';
}
else{
	echo 'Error in Row Insertion ' . $conn->error;
}

$conn->close();





?>