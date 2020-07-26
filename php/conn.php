<?php



$host = "localhost";
$username = "root";
$password = "";
$dbname = "trainingccs";

// Create connection
$conn = new mysqli( $host, $username, $password,$dbname ) or 
die($conn->error);
?>