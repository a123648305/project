<?php include(pe_tpl('header.html'));?>
<div class="right">
	<div class="now">
		<a href="admin.php?mod=adminlevel" class="sel"><?php echo $menutitle ?>（<?php echo $tongji['all'] ?>）</a>
		<a href="admin.php?mod=adminlevel&act=add" id="fabu">添加权限</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<form method="post" id="form">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tr>
			<th class="bgtt" width="50">ID号</th>
			<th class="bgtt" width="200">权限名称</th>
			<th class="bgtt"></th>
			<th class="bgtt" width="110">操作</th>
		</tr>
		<?php foreach($info_list as $v):?>
		<tr>
			<td><?php echo $v['adminlevel_id'] ?></td>
			<td><?php echo $v['adminlevel_name'] ?></td>
			<td></td>
			<td>
				<?php if($v['adminlevel_id'] == 1):?>
				<span class="cred">-</span>
				<?php else:?>
				<a href="admin.php?mod=adminlevel&act=edit&id=<?php echo $v['adminlevel_id'] ?>" class="admin_edit mar3">修改</a>
				<a href="admin.php?mod=adminlevel&act=del&id=<?php echo $v['adminlevel_id'] ?>&token=<?php echo $pe_token ?>" class="admin_del" onclick="return pe_cfone(this, '删除')">删除</a>
				<?php endif;?>
			</td>
		</tr>
		<?php endforeach;?>
		</table>
		</form>
	</div>
	<div class="right_bottom">
		<span class="fr fenye"><?php echo $db->page->html ?></span>
		<div class="clear"></div>
	</div>
</div>
<?php include(pe_tpl('footer.html'));?>