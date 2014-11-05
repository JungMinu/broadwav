<?php
	session_start();

	$errflag = false;

	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';

	$idx = $_POST['idx'];

	$SQL_DELETE = "DELETE FROM comments WHERE idx =  ".$idx;
	
	$STATEMENT = $DB_CONNECT->prepare($SQL_DELETE);
	$STATEMENT -> execute();
?>