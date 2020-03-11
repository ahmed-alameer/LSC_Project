<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lsc_db";

// $conn = new mysqli($host, $user, $pass, $db);
// if($conn->connect_error){
// 	echo "Failed:" . $conn->connect_error;
// }




try {

	$dns = "mysql:host=$host;dbname=$db";
	$conn = new PDO($dns, $user, $pass);
} catch (PDOException $e) {


	die($e->getMessage());
}