<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "thebadfood";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}
?>