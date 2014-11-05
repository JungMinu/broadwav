<?php
	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';

	$SQL_SELECT = 'SELECT * FROM timeline ORDER BY idx desc';

	$RESULT = $DB_CONNECT->prepare($SQL_SELECT);
	$RESULT->execute();

	$ROW_NUMBER = $RESULT->fetchColumn();
	$ROW = $ROW_NUMBER;
?>

<script src="../js/jquery.livequery.js"></script><!-- LIVE UPDATE PLUGIN LOAD  -->
<script src="../js/jquery.timeago.js"></script><!-- TIME PLUGIN LOAD  -->
<script src="../js/comments_load.js"></script><!-- COMMENTS LOAD  -->

<div class="MAIN">
	<ul class="TIMELINE_CONTAINER">
		<?php foreach  ($DB_CONNECT->query($SQL_SELECT) as $ROW) { ?>
			<li class="TIMELINE_LIST" id="POST_INDEX<?echo $ROW['idx'];?>">
				<div class="TIMELINE_SIDEBAR">
					<div class="NAME_PLATE_PICTURE" style="background-image:url(http://broadwav.com/timeline/images/user.png);"></div>
					<div class="NAME_PLATE_USER">
						<a href="/timeline/<? echo $ROW['user_id']?>" target="_blank"><? echo $ROW['user_id']?></a>
					</div>
					<div class="NAME_PLATE_TIME"><a class='TIMEAGO' title="<?php echo $ROW['time']?>"></a></div>
				</div><!-- TIMELINE_SIDEBAR -->

				<div class="TIMELINE_ITEM">
					<div class="TIMELINE_ITEM_CONTAINER">
						<?php if($ROW['photos']==""){ }else{ ?>
						<div class="TIMELINE_ITEM_PICTURE" style="background-image:url('http://broadwav.com/uploads/<? echo $ROW['photos']?>');"></div>
						<? } ?>
						<div class="TIMELINE_ITEM_MENU">
							<div class="MENU_LIKE_BUTTON">
								<div class="MENU_LIKE_BUTTON_ON" id="like_on<?php echo $ROW['idx']?>"></div>
								<div class="MENU_LIKE_BUTTON_OFF" id="like_off<?php echo $ROW['idx']?>"></div>
								<?php /*
								<? if(){ ?>
									<span class="LIKE_BUTTON_OFF" onclick="javascript:('<? ?>');"></span>
								<? }else{ ?>
									<span class="LIKE_BUTTON_ON" onclick="javascript:('<? ?>');"></span>
								<? } ?>
								*/ ?>
							</div>
							<div class="MENU_BUTTON">
							<div id="MENU_WINDOW_CLOSE"></div>
							<?php if($ROW['user_id'] == $USER_ID){ ?>
								<div class="MENU_WINDOW_USER" id="mine<?php echo $ROW['idx']?>" >
									<ul>
										<li onclick="javascript:post_delete_confirm(<?php echo $ROW['idx']?>);"><a>Delete</a></li>
										<div class="MENU_WINDOW_BAR"></div>
										<li onclick="javascript:post_delete_confirm(<?php echo $ROW['idx']?>);"><a>Edit</a></li>
									</ul>
								</div>
							<? }else{ ?>
								<div class="MENU_WINDOW_OTHERS" id="other<?php echo $ROW['idx']?>" >
									<ul>
										<li onclick="javascript:('<? ?>');"><a>Profile</a></li>
										<div class="MENU_WINDOW_BAR"></div>
										<li onclick="javascript:('<? ?>');"><a>Follow</a></li>
										<div class="MENU_WINDOW_BAR"></div>
										<li onclick="javascript:('<? ?>');"><a>Block</a></li>
										<div class="MENU_WINDOW_BAR"></div>
										<li onclick="javascript:('<? ?>');"><a>Report</a></li>
									</ul>
								</div>
							<? } ?>
							</div>
							<div class="MENU_LIKE_LIST">
								<? if(!$ROW['likecount']) { ?>
								<span>
									Be The first Person like this.
								</span>
								<? } else if(!$ROW['likecount']==1) { ?>
								<span>
									<a onclick="javascript:('<? ?>');">userid_1;</a> Like This.
								</span>
								<? } else if(!$ROW['likecount']==2) { ?>
								<span>
									<a onclick="javascript:('<? ?>');">userid_1;</a> , <a onclick="javascript:('<? ?>');">userid_2;</a> Like This.
								</span>
								<? } else { ?>
								<span>
									<a onclick="javascript:('<? ?>');">userid_1;</a> , <a onclick="javascript:('<? ?>');">userid_2;</a> and <a onclick="javascript:('<? ?>');">usernumber;</a> Like This.
								</span>
								<? } ?>
							</div>
						</div>

						<div class="TIMELINE_ITEM_CONTENTS">
							<div class="TIMELINE_ITEM_CONTENTS_WRAPPER">
								<div class="TIMELINE_ITEM_CONTENTS_USER_PICTURE" style="background-image:url(http://broadwav.com/timeline/images/user.png);"></div>

								<div class="TIMELINE_ITEM_CONTENTS_USER_NAME">
									<a href="/timeline/<? echo $ROW['user_id']?>" target="_blank"><? echo $ROW['user_id']?></a>
								</div>
								<?php /*
								<? if(){ ?>
								<div class="TIMELINE_ITEM_CONTENTS_TEXT">
									<?php echo $ROW['contents']; ?>
								</div>
								<? else(){ ?>
								<div class="TIMELINE_ITEM_CONTENTS_TEXT">
									<textarea value="<?php echo $ROW['contents']; ?>"/>
								</div>
								<? } ?>
								*/ ?>
								<!-- 콘텐츠 에디트 기능 추가 -->
								
								<div class="TIMELINE_ITEM_CONTENTS_TEXT">
									<?php echo $ROW['contents']; ?>
								</div>
								<!-- 타임라인 콘텐츠 로드 모어 기능 추가 위치 -->
								
								<div class="TIMELINE_ITEM_CONTENTS_LOAD_MORE">
									<a>More Contents</a>
								</div>
							</div>
						</div>

						<div class="TIMELINE_ITEM_COMMENTS">
							<ul class="COMMENTS_SCROLL">
								<script>comments_load(<?=$ROW['idx']?>,<?=$ROW['idx']?>);</script>
								<div id="<?=$ROW['idx']?>"></div>
							</ul>
							<div class="COMMENTS_COMPOSE">
								<form class="TIMELINE_COMMNETS">
									<input type="text" id="contents" class="contents" placeholder="Write a comment...">
									<input type="hidden" id="index" value="<?=$ROW['idx']?>">
								</form>
							</div>
						</div>
					</div><!-- TIMELINE ITEM CONTAINER -->	
				</div><!-- TIMELINE ITEM -->
			</li><!-- TIMELINE LIST -->
		<? } ?>
		<li class="TIMELINE_LIST">
			<div class="TIMELINE_SIDEBAR">
			</div><!-- TIMELINE_SIDEBAR -->

			<div class="TIMELINE_ITEM">
				<div class="LOAD_MORE_BUTTON">
					<button>Load More</button>
				</div>
			</div>
		</li><!-- TIMELINE LIST -->
	</ul><!-- TIMELINE CONTAINER -->
</div><!-- MAIN -->

<script src="../js/button_event.js"></script><!-- BUTTON EVENT -->
<script src="../js/comments_compose.js"></script><!-- COMMENTS COMPOSE  -->
<script src="../js/comments_more_load.js"></script><!-- COMMENTS LOAD  -->
<script src="../js/delete.js"></script><!-- DELETE POST & COMMENT  -->