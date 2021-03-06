<?php if(!defined('GR_BOARD_2')) exit(); ?>

<div id="GRBOARD2">

<h2 class="title">Delete a comment</h2>

<div class="boardDelete">
	
	<div class="boardDeleteBox">
	<form id="boardDeleteForm" method="post" action="<?php echo $boardLink; ?>/deletecomment/<?php echo $comment; ?>">
		<div>
			<input type="hidden" name="deleteProceed" value="yes" />
			<input type="hidden" name="postUID" value="<?php echo $postUID; ?>" />
		</div>
		<div class="deleteMsg">
			<?php echo $error['confirm_comment_delete']; ?>
			<div class="originalMsg"><?php echo $content; ?></div>		
		</div>
		
		<input type="submit" value="OK" class="gr-btn gr-btn-primary" />
		<a href="<?php echo $boardLink; ?>/list" class="gr-btn gr-btn-danger">Cancel</a>
	</form>
	</div>

</div>

</div>