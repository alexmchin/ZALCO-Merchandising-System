<?php
 
function emptyInputsSignup($rname,$uidname,$email,$password){
 	$result;
 	if(empty($rname) ||empty($uidname) ||empty($email) ||empty($password) ||empty($rname) ){
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }

  function invalidUid($uidname){

 	$result;
 	if(!preg_match("/^[a-zA-Z0-9]*$/",$uidname)) {
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }


   function invalidEmail($email){

 	$result;
 	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }

 function uidExist($conn, $uidname,$email){

 $sql ="SELECT * FROM users WHERE usersUid=? OR usersEmail =?;";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../Zalco_Merchandising/adduser.php?error=stmtfailed");
	exit();
 }

 mysqli_stmt_bind_param($stmt,"ss",$uidname,$email);
 mysqli_stmt_execute($stmt);
 $resultData=mysqli_stmt_get_result($stmt);

 if($row=mysqli_fetch_assoc($resultData)){
 	return $row;
 }
 else{
 	$result= false;
 	return $result;
 }

  mysqli_stmt_close($stmt);
 }

  function createUser($conn, $rname,$uidname,$email,$password){

 $sql ="INSERT INTO users(usersName,usersUid,usersEmail,usersPwd) VALUES(?,?,?,?)";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../Zalco_Merchandising/adduser.php?error=stmtfailed");
	exit();
 }
$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
 mysqli_stmt_bind_param($stmt,"ssss",$rname,$uidname,$email,$hashedPwd);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../Zalco_Merchandising/adduser.php?error=none");
exit();
 }

function emptyInputsLogin($uidname,$password){
 	$result;
 	if(empty($uidname)||empty($password) ){
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }

function position($uidname){
	 	if (str_ends_with($uidname, "ma")) {
    	header("location: ../Zalco_Merchandising/Manager.html");
 		exit();
 		}
 		else if (str_ends_with($uidname, "me")){
 		header("location: ../Zalco_Merchandising/Merchandiser.html");
 		exit();
}
}
 function loginUser($conn,$uidname,$password){
 	$uidExists = uidExist($conn, $uidname,$uidname);

 	if ($uidExists=== false){
 		header("location: ../Zalco_Merchandising/login.php?error=wronglogin");
 		exit();

 	}
 	$pwdHashed= $uidExists ["usersPwd"];
 	$checkPwd = password_verify($password,$pwdHashed);
 	if($checkPwd===false){
 		header("location: ../Zalco_Merchandising/login.php?error=wronglogin");
 		exit();
 	}
 	else if ($checkPwd===true){
 		session_start();
 		$_SESSION["userid"]=$uidExists ["usersId"];
 		$_SESSION["userid"]=$uidExists ["usersId"];
 		position($uidname);
 		
 		

 	}

 }