<?php
	session_start();

	$FILE_LOCATION = '../uploads/' . basename( $_FILES['COMPOSE_UPLOAD']['tmp_name']);

	if(move_uploaded_file($_FILES['COMPOSE_UPLOAD']['tmp_name'],$FILE_LOCATION)){

		$FILE_TABLE_NAEM = basename( $_FILES['COMPOSE_UPLOAD']['tmp_name']);
		//uploaded Files -> input file name
		
	}else{

		$FILE_TABLE_NAEM ="";
		//If not uploaded Files -> blank table
		
	}

	$errflag = false;

	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';

	$CONTENTS_TEMP = $_POST['COMPOSE_TEXT'];
	$PRESENT_TIME = $_POST['PRESENT_TIME'];

	$CONTENTS = nl2br($CONTENTS_TEMP);
	 
	$STATEMENT =  $DB_CONNECT -> prepare("INSERT INTO timeline (user_id,contents,photos,time) VALUES (?,?,?,?)");
	$STATEMENT -> bindParam(1, $USER_ID);
	$STATEMENT -> bindParam(2, $CONTENTS);
	$STATEMENT -> bindParam(3, $FILE_TABLE_NAEM);
	$STATEMENT -> bindParam(4, $PRESENT_TIME);

	$STATEMENT -> execute();
	
	header("Location: /timeline/");
	exit();
?>