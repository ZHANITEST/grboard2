<?php if(!defined('GR_BOARD_2')) exit(); ?>

<div class="panel-heading">
	<h3 class="panel-title"><strong>Board group list</strong></h3>
</div>

<div class="panel-body">
	<form id="groupAddForm" method="post" class="form-horizontal" role="form" action="/<?php echo $grboard; ?>/board/admin/board/group">
	<div class="hiddenInputs">
		<input type="hidden" name="groupFormSubmit" value="true" />
		<input type="hidden" name="groupId" value="<?php echo $oldData['no']; ?>" />
	</div>
	
	<div class="form-group">
		<label for="name" class="col-md-2 control-label">Name</label>
		<div class="col-md-3">
			<input type="text" name="name" class="form-control" required="true" maxlength="50" value="<?php echo $oldData['name']; ?>" />
		</div>
		<span class="help-block col-md-7"><?php echo $lang['board_group_name']; ?></span>
	</div>	
	
	<div class="form-group">
		<label for="master" class="col-md-2 control-label">Masters</label>
		<div class="col-md-3">
			<input type="text" name="master" class="form-control" maxlength="50" value="<?php echo $oldData['master']; ?>" />
		</div>
		<span class="help-block col-md-7"><?php echo $lang['board_group_master']; ?></span>
	</div>	
	
	<div class="form-group">
		<div class="col-md-12 text-right">
			<input type="submit" value="<?php echo $submit; ?>" class="btn btn-lg btn-primary" />
		</div>
	</div>					
	</form>
	
	<div class="table-responsive">
	<table rules="none" id="boardGroupList" class="table table-striped table-hover">
		<colgroup>
			<col class="col-md-3" />
			<col class="col-md-2" />
			<col class="col-md-1" />
			<col class="col-md-2" />
			<col class="col-md-2" />
			<col class="col-md-2" />
		</colgroup>
		<thead>
			<tr>
				<th>Name</th>
				<th>Master</th>
				<th>Boards</th>
				<th>Signdate</th>
				<th>Modify</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($groupList as &$group) { ?>
			<tr>
				<td><?php echo $group['name']; ?></td>
				<td><?php echo $group['master']; ?></td>
				<td><?php echo number_format($group['boards']); ?></td>
				<td><?php echo date('Y.m.d', $group['make_time']); ?></td>
				<td><a href="/<?php echo $grboard; ?>/board/admin/modify2group/<?php echo $group['no']; ?>" title="<?php echo $lang['board_group_modify']; ?>">modify</a></td>
				<td><a href="/<?php echo $grboard; ?>/board/admin/delete2group/<?php echo $group['no']; ?>" title="<?php echo $lang['board_group_delete']; ?>">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	
</div>