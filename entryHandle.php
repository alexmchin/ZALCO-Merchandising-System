<?php
 
function emptyInputsSignup($store,$picture){
 	$result;
 	if(empty($store) ||empty($picture)  ){
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }

  function invalidStore($store){

 	$result;
 	if(!preg_match("/^[a-zA-Z0-9]*$/",$store)) {
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }


   function invalidPicture($picture){

 	$result;
 	if(!preg_match("/^[a-zA-Z0-9]*$/",$picture)) {
 		$result=true;
 	}
 	else{
 		$result=false;	
 	}
 	return $result;
 }

 function uidExist($conn, $store,$picture){

 $sql ="SELECT * FROM supermarket WHERE sName=? OR planogram =?;";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../SoftEng_part/addEntry.php?error=stmtfailed");
	exit();
 }

 mysqli_stmt_bind_param($stmt,"ss",$store,$picture);
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

  function createUser($conn,$store,$picture){

 $sql ="INSERT INTO supermarket(sName,planogram) VALUES(?,?)";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt, $sql)){
	header("location: ../SoftEng_part/addEntry.php?error=stmtfailed");
	exit();
 }

 mysqli_stmt_bind_param($stmt,"ss",$store,$picture);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../SoftEng_part/addEntry.php?error=none");
exit();
 }



