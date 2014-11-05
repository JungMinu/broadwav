<!DOCTYPE html>
<html>
<head>

	<title>S-Wavelate</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="../../../static/swavelate-css.css"/>
	
</head>
<body class="sidebar-page page-accounts">

<div class="root">
<div class="page">

<header class="top-bar top-bar-new">

	<div class="top-bar-wrapper">

		<div class="title"></div>

		<div class="top-bar-left">
			<ul class="top-bar-actions">
				<li>
					<a class="top-bar-home" href="/timeline" label="Home"><i></i></a>
				</li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="top-bar-actions">
				<li>
					<a class="top-bar-com" href="/timeline" label="Compose"><i></i></a>
				</li>
			</ul>
		</div>
		<div class="top-bar-right_2 account-state" id="top_bar_right">
			<ul class="top-bar-actions">
				<li class="link-profile">
					<a href="javascript:brodo();">
						<span class="img img-outset current-user-avatar" style="background-image:url(http://images.ak.instagram.com/profiles/anonymousUser.jpg);">
							<img src="http://images.ak.instagram.com/profiles/anonymousUser.jpg">
						</span>
						<strong>S-Wavelate</strong>
					</a>
				</li>
			</ul>
			<div class="user_window_bg">
				<div class="user_window_1">Profile</div>
					<div class="user_window_bar"></div>
				<div class="user_window_2">Edit Profile</div>
					<div class="user_window_bar"></div>
				<div class="user_window_3">Log Out</div>
			</div>
		</div>
	</div>
</header>
<!-- Top bar -->  

<div class="sidebar">
	<div class="wrapper">
		<nav class="sidebar-nav">
			<div class="sidebar-content">
			<h2>Your Account</h2>

			<ul>
				<li>
					<a href="/timeline/accounts/edit/">Edit Profile<i class="disclosure"></i></a>
				</li>

				<li class="active">
					<a href="/timeline/accounts/password/change/">Password Change<i class="disclosure"></i></a>
				</li>
				<li>
					<a href="/timeline/accounts/logout/">Logout<i class="disclosure"></i></a>
				</li>
			</ul>

			</div>
		</nav>
	</div>
</div>
<!-- Side Menu --> 

<div class="main">
	<div class="wrapper">
		<section class="nav-page-content" role="main">
                
			<header>
				<h1>Password Change</h1>
			</header>

			<form method="POST" accept-charset="utf-8" class="adjacent bordered wide">
				<p><label for="id_old_password">Current Password:</label> <input type="password" name="old_password" id="id_old_password" /></p>
				<p><label for="id_new_password1">New Password:</label> <input type="password" name="new_password1" id="id_new_password1" /></p>
				<p><label for="id_new_password2">Confirm Password:</label> <input type="password" name="new_password2" id="id_new_password2" /></p>
				<input type="hidden" name="csrfmiddlewaretoken" value="8797ea01ceff744d00e98c3b4e171035"/>
				<p class="form-actions"><input type="submit" value="Submit"></p>
			</form>
			<script>document.getElementById('id_old_password').focus();</script>

		</section>
	</div><!-- wapper -->
</div><!-- main -->

</div><!-- page -->  
<footer class="page-footer" role="contentinfo">
	<div class="wrapper">
		<nav>
			<ul>
				<li><a href="/about/">About Us</a></li>
				<li><a href="/privacy/">privacy</a></li>
				<li><a href="/terms/">terms</a></li>
				<li><a href="/contact/">Contact Us</a></li>
			</ul>
		</nav>

		<p class="copyright">C. Broadwav</p>
	</div>
</footer>
</div><!-- root -->  

</body>
</html>