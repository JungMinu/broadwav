<?php
	session_start();

	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';
	
	$STATEMENT =  $DB_CONNECT -> prepare("INSERT INTO likes (usrid,logs) VALUES (? , ?)");

	$usrix = $_POST['contents'];
	$dx = $_POST['destination'];

	$STATEMENT -> bindParam(1, $usrix);
	$STATEMENT -> bindParam(2, $dx);

	$STATEMENT -> execute();
?>

