<?php

	session_start();
	if(isset($_SESSION['usrid'])){
		header("Location: http://broadwav.com/timeline/main/");
		exit();
	}
	
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

		<link rel="stylesheet" href="css/layout.css" /><!-- LAYOUT CSS LOAD  -->
		<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- FONTAWESOME CSS LOAD  -->
		
		<script src="../js/jquery-1.11.1.min.js"></script><!-- JQUERY LOAD  -->

	</head>
	
	<body>
<div id="LOGIN_BG">
<div id="LOGIN_CONTAINER">
<div id="LOGIN_WINDOW">
		<div class="LOGIN_TITLE">
			<img src="./images/brand-header-simple.png" alt="S-Wavelate"/>
		</div>
		
		<form id="SWAVELATE_LOGIN" action="/timeline/accounts/login/" method="post">
			<div class="LOGIN_TEXT">Sign In</div>
			
			<div class="USER_ID">
				<input type="text" name="id" required="" placeholder="User Mail" title="Email">
			</div>
			<div class="PASSWORD">
				<input type="password" name="pw" required="" placeholder="Password" title="Password">
			</div>
			<div class="SWAVELATE_LOGIN_BUTTON">
				<button type="submit">Login</button>
			</div>
			<div class="SWAVELATE_LOGIN_CHECK">
				<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y"> Keep me signed in.
			</div>
			<div class="SWAVELATE_LOGIN_MENU">
				<a href="#">Find Account Info</a> | <a href="./signup/">Sign Up</a>
			</div>
			<div class="SWAVELATE_BADGE">
				<img src="./images/badge_tizen.png" alt="S-Wavelate"/>
				<img src="./images/badge_android.png" alt="S-Wavelate"/>
				<img src="./images/badge_ios.png" alt="S-Wavelate"/>
			</div>
			<div class="SWAVELATE_BADGE_S">
				<img src="./images/badge_tizen_s.png" alt="S-Wavelate"/>
				<img src="./images/badge_android_s.png" alt="S-Wavelate"/>
				<img src="./images/badge_ios_s.png" alt="S-Wavelate"/>
			</div>
		</form>	
		<?php include_once($BOTTOM_BAR); ?><!-- BOTTOM BAR -->
</div>
</div>
	</body>
</html>