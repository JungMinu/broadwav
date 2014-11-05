<?php
session_start();
$errflag = false;

$dbhost 	= "localhost";
$dbname		= "broadwav";
$dbuser		= "broadwav";
$dbpass		= "qksrkql1";
 
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 
 
$user = $_POST['id'];
$password = $_POST['pw'];
 
if($user == '') {
	//$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	//$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}
 
$result = $conn->prepare("SELECT * FROM swaveuser WHERE usrid= :hjhjhjh AND usrpw= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);

if($rows > 0) {

$_SESSION['usrid'] =$user;
header("location: http://broadwav.com/timeline");
exit();
}
else{
	//$errmsg_arr[] = 'Username and Password are not found';
header("location: http://broadwav.com/timeline");

	$errflag = true;
}
if($errflag) {
	//$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
//	header("location: http://broadwav.com/app");
	exit();
}?>