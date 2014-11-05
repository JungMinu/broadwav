<?php
	session_start();

	$errflag = false;

	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';

	$idx = $_POST['idx'];
		
	$SQL_DELETE_POST = "DELETE FROM timeline WHERE idx = ".$idx;
	
	$STATEMENT_POST = $DB_CONNECT->prepare($SQL_DELETE_POST);
	$STATEMENT_POST -> execute();
	
	$SQL_DELETE_COMMENTS = "DELETE FROM comments WHERE destination = ".$idx;
	
	$STATEMENT_COMMENTS = $DB_CONNECT->prepare($SQL_DELETE_COMMENTS);
	$STATEMENT_COMMENTS -> execute();
	
	//이미지 업로드된 파일 같이 삭제 기능 추가
	
	//라이크 테이블 같이 삭제 기능 추가 
?>