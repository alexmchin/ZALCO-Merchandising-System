<?php

if(isset($_POST["submit"])) {
    $rname = $_POST["username"];
    $uidname = $_POST["uid"];
    $email = $_POST["email"];
    $password = $_POST["password"];


require_once 'dbh.php'; 
require_once 'function.php';

if (emptyInputsSignup($rname,$uidname,$email,$password)!== false){
	header("location: ../Zalco/adduser.php?error=emptyinput");
	exit();
}
if (invalidUid($uidname)!== false){
	header("location: ../Zalco/Zalco/Zalco/adduser.php?error=invaliduid");
	exit();
}
if (invalidEmail($email)!== false){
	header("location: ../Zalco/Zalco/adduser.php?error=invalidemail");
	exit();
}

if (uidExist($conn, $uidname,$email )!== false){
	header("location: ../Zalco/adduser.php?error=usernametaken");
	exit();
}

createUser($conn, $rname,$uidname,$email,$password);
}
else{
	 header("location: ../Zalco/adduser.php");

}