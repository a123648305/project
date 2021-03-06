<?php include(pe_tpl('header.html'));?>
<div class="right">
	<div class="now">
		<a href="admin.php?mod=order_pay" <?php if(!$_g_state):?>class="sel"<?php endif;?>><?php echo $menutitle ?>（<?php echo $tongji['all'] ?>）</a>
		<a href="admin.php?mod=order_pay&state=wpay" <?php if($_g_state=='wpay'):?>class="sel"<?php endif;?>>待付款（<?php echo $tongji['wpay'] ?>）</a>
		<a href="admin.php?mod=order_pay&state=success" <?php if($_g_state=='success'):?>class="sel"<?php endif;?>>已付款（<?php echo $tongji['success'] ?>）</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<div class="search">
			<form method="get">
				<input type="hidden" name="mod" value="<?php echo $_g_mod ?>" />
				订单号：<input type="text" name="id" value="<?php echo $_g_id ?>" class="inputtext input200 mar5" />
				用户名：<input type="text" name="user_name" value="<?php echo $_g_user_name ?>" class="inputtext input200" />
				<input type="submit" value="搜索" class="input_btn" />
			</form>
		</div>
		<form method="post" id="form">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tr>
			<th class="bgtt" width="150">充值日期</th>
			<th class="bgtt" width="">订单号</th>
			<!--<th class="bgtt" width="">订单名称</th>-->
			<th class="bgtt" width="150">充值金额</th>
			<th class="bgtt" width="150">用户名</th>
			<th class="bgtt" width="120">支付方式</th>
			<th class="bgtt" width="150">付款日期</th>
			<th class="bgtt" width="120">订单状态</th>
		</tr>
		<?php foreach($info_list as $v):?>
		<tr>
			<td class="num"><?php echo pe_date_color(pe_date($v['order_atime'])) ?></span></td>
			<td><?php echo $v['order_id'] ?></td>
			<!--<td><?php echo $v['order_name'] ?></td>-->
			<td><span class="num strong cgreen"><?php echo $v['order_money'] ?></span></td>
			<td><?php echo $v['user_name'] ?></td>
			<td><?php echo $cache_payway[$v['order_payway']]['payway_name'] ?></td>
			<td class="num"><?php if(pe_date($v['order_ptime'], 'Y-m-d') == date('Y-m-d')):?><?php echo pe_date($v['order_ptime']) ?><?php else:?>-<?php endif;?></span></td>
			<td>
				<?php if($v['order_state'] == 'success'):?>
				<span class="cgreen">充值成功</span>
				<?php else:?>
				<span class="cred">待付款</span>
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
<script type="text/javascript">
$(function(){
	$("select").change(function(){
		window.location.href = 'admin.php' + $(this).find("option:selected").attr("href");
	})
})
</script>
<?php include(pe_tpl('footer.html'));?>