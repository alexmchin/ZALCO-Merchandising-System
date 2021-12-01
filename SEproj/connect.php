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

$request = filter_input(INPUT_GET,'auth',FILTER_SANITIZE_STRING);
/*
if($request=="logout"){
    $_SESSION['firstname'] = null;
    $_SESSION['id'] = null;
    $_SESSION['email'] = null;
    $_SESSION['page']="home.php";
}
else 
if($request=="login"){
if(isset($_SESSION['id'])){?>
        <?= "True"; ?>
        <?php } else {?>
            <?= "False"; ?>
                <?php }}?>
                */
 ?>