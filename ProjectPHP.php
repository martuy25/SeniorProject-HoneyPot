<?php

$servername= "localhost";
$username = 'root';
$password = 'Q47Qfsex4m7tCqxhptcT';
$dbname = "honeypot";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed: " . mysqli_error());
}
?>