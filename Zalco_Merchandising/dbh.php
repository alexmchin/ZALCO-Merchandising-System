<?php

$serverName="localhost";
$dBuserName="root";
$dBpassword="";
$dBName="Zalco";


$conn= mysqli_connect($serverName,$dBuserName,$dBpassword,$dBName);

if(!$conn) {
	die("Connection failed:" .mysql_connect_error());
}

