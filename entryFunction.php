<?php

if(isset($_POST["submit"])) {
    $store = $_POST["store"];
    $picture = $_POST["picture"];



require_once 'supermarket.php'; 
require_once 'entryHandle.php';

if (emptyInputsSignup($rname,$uidname,$email,$password)!== false){
	header("location: ../ZALCO-Merchandising-System/addEntry.php?error=emptyinput");
	exit();
}
if (invalidStore($store)!== false){
	header("location: ../ZALCO-Merchandising-System/addEntry.php?error=invalidStore");
	exit();
}
if (invalidPicture($picture)!== false){
	header("location: ../ZALCO-Merchandising-System/addEntry.php?error=invalidPicture");
	exit();
}

if (uidExist($conn, $store,$picture )!== false){
	header("location: ../ZALCO-Merchandising-System/addEntry.php?error=nameTaken");
	exit();
}

createUser($conn, $rname,$store,$picture);
}
else{
	 header("location: ../ZALCO-Merchandising-System/addEntry.php?");

}