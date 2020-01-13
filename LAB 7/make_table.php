<?php
$servername = 'localhost';
$username = 'test';
$password = 'test';
$dbname = 'mydb';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("connection_failed:". $conn->connect_error);
}

$sql = 'CREATE TABLE MUGUESTS (
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(30),
	EMAIL VARCHAR(50),
	REG_DATE TIMESTAMP
)';

if($conn->query($sql) == TRUE){
	echo 'TABLE CREATED SUCCESSFULLY';
}
else{
	echo 'Error in TABLE Creation : ' . $conn->error;
}

$conn->close();





?>