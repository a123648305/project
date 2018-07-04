<?php include(pe_tpl('header.html'));?>
<div class="right">
	<?php include(pe_tpl('setting_menu.html'));?>
	<div class="right_main">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tr>
			<th class="bgtt" width="150">通知对象</th>
			<th class="bgtt" width="">通知类型</th>
			<!--<th class="bgtt aleft" style="padding-left:100px">通知信息</th>-->
			<th class="bgtt" width="100">邮件通知</th>
			<th class="bgtt" width="100">短信通知</th>
			<th class="bgtt" width="100">操作</th>
		</tr>
		<?php foreach($info_list['user'] as $k=>$v):?>
		<tr>
			<?php if($k=='order_add'):?><td rowspan="<?php echo count($info_list['user']) ?>" nosel="1">用户</td><?php endif;?>
			<td><?php echo $v['notice_name'] ?></td>
			<!--<td class="aleft"><?php echo $v['notice_email_name'] ?></td>-->
			<td>
				<?php if($v['notice_sms_state']==1):?>
				<a href="admin.php?mod=notice&act=sms_state&state=0&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/dui.png" /></a>
				<?php else:?>
				<a href="admin.php?mod=notice&act=sms_state&state=1&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/cuo.png" /></a>
				<?php endif;?>
			</td>
			<td>
				<?php if($v['notice_email_state']==1):?>
				<a href="admin.php?mod=notice&act=email_state&state=0&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/dui.png" /></a>
				<?php else:?>
				<a href="admin.php?mod=notice&act=email_state&state=1&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/cuo.png" /></a>
				<?php endif;?>
			</td>
			<td><a href="admin.php?mod=notice&act=edit&id=<?php echo $v['notice_id'] ?>" class="admin_btn" onclick="return pe_dialog(this, '修改通知内容', 800, 520, 'notice')">修改</a></td>
		</tr>
		<?php endforeach;?>
		</table>
	</div>
	<div class="right_main2">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tr>
			<th class="bgtt" width="150">通知对象</th>
			<th class="bgtt" width="">通知类型</th>
			<!--<th class="bgtt aleft" style="padding-left:100px">通知信息</th>-->
			<th class="bgtt" width="100">邮件通知</th>
			<th class="bgtt" width="100">短信通知</th>
			<th class="bgtt" width="100">操作</th>
		</tr>
		<?php foreach($info_list['admin'] as $k=>$v):?>
		<tr>
			<?php if($k=='order_add'):?><td rowspan="<?php echo count($info_list['admin']) ?>" nosel="1">管理员</td><?php endif;?>
			<td><?php echo $v['notice_name'] ?></td>
			<!--<td class="aleft"><?php echo $v['notice_email_name'] ?></td>-->
			<td>
				<?php if($v['notice_sms_state']==1):?>
				<a href="admin.php?mod=notice&act=sms_state&state=0&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/dui.png" /></a>
				<?php else:?>
				<a href="admin.php?mod=notice&act=sms_state&state=1&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/cuo.png" /></a>
				<?php endif;?>
			</td>
			<td>
				<?php if($v['notice_email_state']==1):?>
				<a href="admin.php?mod=notice&act=email_state&state=0&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/dui.png" /></a>
				<?php else:?>
				<a href="admin.php?mod=notice&act=email_state&state=1&id=<?php echo $v['notice_id'] ?>&token=<?php echo $pe_token ?>"><img src="<?php echo $pe['host_tpl'] ?>images/cuo.png" /></a>
				<?php endif;?>
			</td>
			<td><a href="admin.php?mod=notice&act=edit&id=<?php echo $v['notice_id'] ?>" class="admin_btn" onclick="return pe_dialog(this, '修改通知内容', 800, 520, 'notice')">修改</a></td>
		</tr>
		<?php endforeach;?>
		</table>
	</div>
</div>
<?php include(pe_tpl('footer.html'));?>