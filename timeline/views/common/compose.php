<?php 
	$TIME=time();
	$PRESENT_TIME=date("c", $TIME);
?>

<div id="COMPOSE_WINDOW_CONTAINER">

	<div id="COMPOSE_CLOSE"></div>
	<div id="COMPOSE_WINDOW">

		<form action="http://broadwav.com/timeline/post_compose/" method="post" enctype="multipart/form-data">

			<div class="COMPOSE_WINDOW_TEXT"> 
				<textarea tabindex="1" id="COMPOSE_TEXT" onKeyDown="textCounter(this,100);" onKeyUp="textCounter(this,'counter' ,100)" name="COMPOSE_TEXT"></textarea>
			</div>
		
			<label class="COMPOSE_IMAGE_UPLOAD">
				<input id="COMPOSE_UPLOAD" class="COMPOSE_UPLOAD" name="COMPOSE_UPLOAD" type="file" accept="image/*">
				Photo Upload
			</label>

			<div class="COMPOSE_TEXT_COUNTER">
				<input type="text" id='COMPOSE_COUNTER' name="COMPOSE_COUNTER" size="3" maxlength="3" value="0" readonly>
			</div>
			
			<div class="COMPOSE_WINDOW_SUBMIT">
				<input type="hidden" name="PRESENT_TIME" value="<?php echo $PRESENT_TIME; ?>">
				<button tabindex="2" id="COMPOSE_SUBMIT" type="submit">Submit</button>
			</div>
			
		</form>

	</div>
	
</div>
