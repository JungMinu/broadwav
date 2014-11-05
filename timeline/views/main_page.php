<?php
	session_start();

	if(!isset($_SESSION['usrid'])){
		
		header("Location: http://broadwav.com/timeline/");
		exit();
	}

    $USER_ID = $_SESSION['usrid'];

	$COMPOSE = $_SERVER['DOCUMENT_ROOT'];
	$COMPOSE .= "/timeline/views/common/compose.php";

	$TOP_BAR = $_SERVER['DOCUMENT_ROOT'];
	$TOP_BAR .= "/timeline/views/common/topbar.php";

	$TIMELINE = $_SERVER['DOCUMENT_ROOT'];
	$TIMELINE .= "/timeline/views/list/timelinepage.php";

	$BOTTOM_BAR = $_SERVER['DOCUMENT_ROOT'];
	$BOTTOM_BAR .= "/timeline/views/common/bottombar.php";
?>

<!DOCTYPE html>

<html>
	<head>

		<title>S-Wavelate</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
		
		<meta name="keywords" content="Broadwav,sns,web service"/>
		<meta name="description" content="THE NEW WAY OF BROADCAST NETWORK SOLUTION"/>
		
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />

		<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport" />	

		<link rel="stylesheet" href="../css/layout.css" /><!-- LAYOUT CSS LOAD  -->
		<link rel="stylesheet" href="../css/font-awesome.min.css" /><!-- FONTAWESOME CSS LOAD  -->
		
		<script src="../js/jquery-1.11.1.min.js"></script><!-- JQUERY LOAD  -->

	</head>

	<body>

		<?php include_once($COMPOSE); ?><!-- COMPOSE WINDOW -->

		<?php include_once($TOP_BAR); ?><!-- TOP BAR -->

		<?php include_once($TIMELINE); ?><!-- TIMELINE -->

		<?php include_once($BOTTOM_BAR); ?><!-- BOTTOM BAR -->
	
	</body>
</html>