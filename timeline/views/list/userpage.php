<div class="MAIN">
	<div class="WARPPER">
		<div class="USER_PROFILE">
			<span class="USER_PICTURE_BOX">
				<span class="user-USER_PICTURE" style="background-image:url(<? ?>);"></span>
				
				<span class="USER_EDIT_BUTTON">
						<span onclick="javascript:('<? ?>');">Edit Profile</span>
				</span>
			</span>
			
			<div class="USER_INFO" >
				<div class="USER_NAME">
					<span onclick="javascript:('<? ?>');"><? ?></span>
				</div>
				
				<div class="USER_BIO">
					<span><? ?></span>
				</div>
				
				<div class="USER_WEB">
					<span href="<? ?>" target="_blank" ><? ?></span>
				</div>
			</div>
			
			<div class="USER_NUMBER_STAT">
				<ul>
					<li>
						<span class="NUMBER_STAT"><? ?></span>
						<span> posts</span>
					</li>
					<li>
						<span class="NUMBER_STAT" onclick="javascript:('<? ?>');"><? ?></span>
						<span> followers</span>
					</li>
					<li>
						<span class="NUMBER_STAT" onclick="javascript:('<? ?>');"><? ?></span>
						<span> following</span>
					</li>
				</ul>
			</div>
		</div>

		<div class="TIMELINE_CONTAINER">
			<div class="TIMELINE_LIST">
				<div class="TIMELINE_SIDEBAR">
					<div class="NAME_PLATE_PICTURE" style="background-image:url('<? ?>');"></div>
					<div class="NAME_PLATE_USER"><? ?></div>
					<div class="NAME_PLATE_TIME"><? ?></div>
				</div><!-- TIMELINE_SIDEBAR -->
				
				<div class="TIMELINE_ITEM">
					<? if( ){ }else{ ?>
					<div class="TIMELINE_ITEM_PICTURE" style="background-image:url('<? ?>');"></div>
					<? } ?>
					<div class="TIMELINE_ITEM_MENU">
						<div class="MENU_LIKE_BUTTON">
						<? if(1>1){ ?>
							<span class="LIKE_BUTTON_OFF" onclick="javascript:('<? ?>');"></span>
						<? }else{ ?>
							<span class="LIKE_BUTTON_ON" onclick="javascript:('<? ?>');"></span>
						<? } ?>
						</div>
						<div class="MENU_LIKE_LIST">
							<? if(){ ?>
							<span>
								Be The first Person like this.
							</span>
							<? else if(){ ?>
							<span>
								userid_1; Like This.
							</span>
							<? else if(){ ?>
							<span>
								<a onclick="javascript:('<? ?>');">userid_1;</a> , <a onclick="javascript:('<? ?>');">userid_2;</a> Like This.
							</span>
							<? else(){ ?>
							<span>
								<a onclick="javascript:('<? ?>');">userid_1;</a> , <a onclick="javascript:('<? ?>');">userid_2;</a> and <a onclick="javascript:('<? ?>');">usernumber;</a> Like This.
							</span>
							<? } ?>
						</div>
						<div class="MENU_BUTTON" id="<? ?>" >
						<? if(){ ?>
							<div class="MENU_WINDOW_USER" id="<? ?>">
								<ul>
									<li onclick="javascript:('<? ?>');"><a>DELETE</a></li>
								</ul>
							</div>
						<? }else{ ?>
							<div class="MENU_WINDOW_OTHERS" id="<? ?>" >
								<ul>
									<li onclick="javascript:('<? ?>');"><a>Profile</a></li>
									<div class="USER_MENU_BAR"></div>
									<li onclick="javascript:('<? ?>');"><a>Follow</a></li>
									<div class="USER_MENU_BAR"></div>
									<li onclick="javascript:('<? ?>');"><a>Unfollow</a></li>
									<div class="USER_MENU_BAR"></div>
									<li onclick="javascript:('<? ?>');"><a>Block</a></li>
									<div class="USER_MENU_BAR"></div>
									<li onclick="javascript:('<? ?>');"><a>Report</a></li>
								</ul>
							</div>
						<? } ?>
						</div>
					</div>
					<div class="TIMELINE_ITEM_COMMENTS">
						<? if( ){ }else{ ?>
						<div class="COMMENTS_MORE">
							<span onclick="javascript:('<? ?>');">commnet_num; More Commnets</span>
						</div>
						<? } ?>
						<div class="COMMENTS_SCROLL">
							<? ?>
						</div>
						<div class="COMMENTS_COMPOSE">
							<form class="timelineCommentForm">
								<input type="text" placeholder="Write a comment...">
								<input type="hidden" >
							</form>
						</div>
					</div>
				</div><!-- TIMELINE_SIDEBAR -->				
			</div><!-- TIMELINE LIST -->
		</div><!-- TIMELINE CONTAINER -->
	</div><!-- WRAPPER -->  
</div><!-- MAIN --> 