<?php
session_start();
$errflag = false;

$dbhost 	= "localhost";
$dbname		= "broadwav";
$dbuser		= "broadwav";
$dbpass		= "qksrkql1";
 
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 
$user = $_POST['id'];
$cox = $_POST['pw'];
 
 $cox=nl2br($cox);
$stmt = $conn->prepare("INSERT INTO swaveuser (usrid,usrpw) VALUES (?, ?)");
$stmt->bindParam(1, $user);
$stmt->bindParam(2, $cox);


$stmt->execute();

?>
<script>
alert("Thanks for Signing up!");
location.href="/timeline";
</script>