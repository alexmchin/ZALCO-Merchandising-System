<?php 

if(isset($_POST["submit"])) {
    
    $uidname = $_POST["uid"];
    $password = $_POST["password"];
    
require_once 'dbh.php'; 
require_once 'function.php';

if (emptyInputsLogin($uidname,$password)!== false){
    header("location: ../Zalco_Merchandising/login.php?error=emptyinput");
    exit();
}    

loginUser($conn,$uidname,$password);
}
else{
    header("location: ../Zalco_Merchandising/login.php");
    exit();
}
        





