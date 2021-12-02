<?php 
$host = 'localhost';
$username = 'root';
$password = " ";
$dbname = 'Zalco';
session_start();
$conn = new mysqli("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
 ?>