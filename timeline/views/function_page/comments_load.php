<?php
	session_start();
	
	$errflag = false;

	$USER_ID		= $_SESSION['usrid'];

	include_once 'db_connect.php';
	
	$destination = $_POST['destination'];

	$SQL_COUNT = "SELECT count(*) FROM `comments` WHERE destination = ".$destination; 

	$RESULT = $DB_CONNECT-> prepare($SQL_COUNT); 
	$RESULT -> execute();

	$ROW_NUMBER = $RESULT -> fetchColumn();
	$ROW = $ROW_NUMBER;
?>

<script src="../js/comments_more_load.js"></script><!-- COMMENTS LOAD  -->

<?php if($ROW > 3) { ?>

<div class="MORE_COMMENTS" dat=<?php echo $destination; ?>><? echo $ROW - 3;?> more Comments</div>

<? } else { ?>

<? } ?>

<?php

	$DESTINATION_SELECT =  'SELECT * FROM comments where destination='.$destination.' ORDER BY idx desc';
	$COUNT_ADD = 0;

	foreach  ($DB_CONNECT->query($DESTINATION_SELECT) as $ROW) { 

?>

<div class="TIMELINE_COMMENTS" id="COMMENTS_INDEX<?echo $ROW['idx'];?>">

	<div class="TIMELINE_COMMENT_USER_PICTURE" style="background-image:url(http://broadwav.com/timeline/images/user.png);"></div>

	<div class="TIMELINE_COMMENT_USER_NAME">
		<a href="/timeline/<?echo $ROW['user_id'];?>" target="_blank"><?php echo $ROW['user_id'];?></a>
	</div>

	<div class="TIMELINE_COMMENT_CONTENTS_TEXT">
		<?php echo stripslashes($ROW['contents']); ?>
	</div>

	<div class="TIMELINE_COMMENT_DELETE_BUTTON">
		<a href="javascript:comments_delete_confirm(<?php echo $ROW['idx']?>,<?php echo $ROW['destination']?>);">Delete</a>
	</div>
</div>

<?php
	$COUNT_ADD ++;
	if($COUNT_ADD == 3) break; }
?>