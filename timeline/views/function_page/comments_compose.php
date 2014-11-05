<?php
	session_start();

	$errflag = false;

	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';

	$CONTENTS = $_POST['contents'];
	$DESTINATION = $_POST['destination'];
	 
	$STATEMENT =  $DB_CONNECT -> prepare("INSERT INTO comments (user_id,contents,destination) VALUES (?,?,?)");

	$STATEMENT -> bindParam(1, $USER_ID);
	$STATEMENT -> bindParam(2, $CONTENTS);
	$STATEMENT -> bindParam(3, $DESTINATION);

	$STATEMENT -> execute();
?> 