<?php
	$USER_ID = $_SESSION['usrid'];
?>

<header class="TOPBAR">

	<div class="TOPBAR_WAPPER">
		<div class="TOPBAR_HOME">
			<ul class="TOPBAR_BUTTON">
				<li><a class="TOPBAR_HOME_ICON" href="/timeline"><i></i></a></li>
			</ul>
		</div>
		
		<div class="TITLE"></div>
		
		<div id="COMPOSE_BUTTON" class="TOPBAR_COMPOSE">
			<ul class="TOPBAR_BUTTON">
				<li><a class="TOPBAR_COMPOSE_ICON"><i></i></a></li>
			</ul>
		</div>
		
		<div class="TOPBAR_ACCOUNT">
			<ul class="TOPBAR_BUTTON">
				<li>
					<a>
						<span>
							<div class="USER_PICTURE" style="background-image:url(http://broadwav.com/timeline/images/user.png);"></div>
						</span>
						
						<strong><?php echo $USER_ID; ?></strong>
					</a>
				</li>
			</ul>
			
			<div id="USER_CLOSE"></div>
			
			<div class="USER_MENU">
				<ul>
					<li onclick="javascript:location.href='/timeline/<?php echo $USER_ID; ?>'"><a>Profile</a></li>
					<div class="USER_MENU_BAR"></div>
					<li onclick="javascript:location.href='/timeline/accounts/edit/'"><a>Edit Profile</a></li>
					<div class="USER_MENU_BAR"></div>
					<li onclick="javascript:location.href='/timeline/accounts/logout/'"><a>Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>

</header>