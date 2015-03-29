<?php if(!defined('GR_BOARD_2')) exit(); ?>

<fieldset class="col-md-12">
	<legend>Link management</legend>

	<form id="blogConfigForm" method="post" class="form-horizontal" role="form" action="/<?php echo $grboard; ?>/blog/admin">
	<div class="hiddenInputs">
		<input type="hidden" name="blogLinkSave" value="true" />
		<input type="hidden" name="blogLinkAction" value="add" />
		<input type="hidden" name="linkTarget" value="" />
		<input type="hidden" name="linkName" value="" />
		<input type="hidden" name="linkURL" value="" />
		<input type="hidden" name="linkInfo" value="" />
	</div>
	
	<div class="well">
		<div class="form-group">
			<div class="col-md-3">
				<input type="text" name="addName" class="form-control" maxlength="20" placeholder="Name" title="<?php echo $lang['link_add_name']; ?>" />
			</div>
			<div class="col-md-4">
				<input type="url" name="addUrl" required="true" class="form-control" maxlength="250" placeholder="http://URL" title="<?php echo $lang['link_add_url']; ?>" />
			</div>
			<div class="col-md-3">
				<input type="text" name="addInfo" class="form-control" maxlength="250" placeholder="Description" title="<?php echo $lang['link_add_description']; ?>" />
			</div>	
			<div class="col-md-2">
				<button class="btn btn-primary add-link">Add to link list</button>
			</div>
		</div>
	</div>

	<?php if(count($oldLink) > 0): foreach($oldLink as &$link): ?>
	
	<div class="form-group">
		<div class="col-md-1">
			<a href="<?php echo $link['url']; ?>">
				<button class="btn btn-default"><span class="glyphicon glyphicon-home"></span> Visit</button>
			</a>
		</div>
		<div class="col-md-3">
			<input type="text" id="name_<?php echo $link['uid']; ?>" required="true" class="form-control" maxlength="20" 
				value="<?php echo $link['name']; ?>" placeholder="Name" title="<?php echo $lang['link_add_name']; ?>"  /> 
		</div>
		<div class="col-md-3">
			<input type="url" id="url_<?php echo $link['uid']; ?>" required="true" class="form-control" maxlength="250" 
				value="<?php echo $link['url']; ?>" placeholder="http://URL" title="<?php echo $lang['link_add_url']; ?>" />
		</div>
		<div class="col-md-3">
			<input type="text" id="info_<?php echo $link['uid']; ?>" class="form-control" maxlength="250" 
				value="<?php echo $link['info']; ?>" placeholder="Description" title="<?php echo $lang['link_add_description']; ?>" />
		</div>
		<div class="col-md-2">
			<button class="btn btn-warning update-link" rel="<?php echo $link['uid']; ?>">Update</button>
			<button class="btn btn-default delete-link" rel="<?php echo $link['uid']; ?>">Delete</button>
		</div>	
	</div>	
	
	<?php endforeach; endif; ?>

</form>
</fieldset>