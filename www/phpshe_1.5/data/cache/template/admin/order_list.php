<?php include(pe_tpl('header.html'));?>
<div class="right">
	<div class="now">
		<a href="admin.php?mod=order" <?php if(!$_g_state):?>class="sel"<?php endif;?>>全部订单（<?php echo intval($tongji['all']) ?>）</a>
		<a href="admin.php?mod=order&state=wpay" <?php if($_g_state=='wpay'):?>class="sel"<?php endif;?>>等待付款（<?php echo intval($tongji['wpay']) ?>）</a>
		<a href="admin.php?mod=order&state=wsend" <?php if($_g_state=='wsend'):?>class="sel"<?php endif;?>>等待发货（<?php echo intval($tongji['wsend']) ?>）</a>
		<a href="admin.php?mod=order&state=wget" <?php if($_g_state=='wget'):?>class="sel"<?php endif;?>>已发货（<?php echo intval($tongji['wget']) ?>）</a>
		<a href="admin.php?mod=order&state=success" <?php if($_g_state=='success'):?>class="sel"<?php endif;?>>交易完成（<?php echo intval($tongji['success']) ?>）</a>
		<a href="admin.php?mod=order&state=close" <?php if($_g_state=='close'):?>class="sel"<?php endif;?>>交易关闭（<?php echo intval($tongji['close']) ?>）</a>
		<div class="clear"></div>
	</div>
	<div class="right_main">
		<div class="search">
			<form method="get">
				<input type="hidden" name="mod" value="<?php echo $_g_mod ?>" />
				<input type="hidden" name="state" value="<?php echo $_g_state ?>" />
				订单编号：<input type="text" name="id" value="<?php echo $_g_id ?>" class="inputtext input100 mar5" />
				姓名：<input type="text" name="user_tname" value="<?php echo $_g_user_tname ?>" class="inputtext input80 mar5" />
				电话：<input type="text" name="user_phone" value="<?php echo $_g_user_phone ?>" class="inputtext input80 mar5" />
				帐号：<input type="text" name="user_name" value="<?php echo $_g_user_name ?>" class="inputtext input80 mar5" />
				下单时间：<input type="text" name="date1" value="<?php echo $_g_date1 ?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" class="Wdate inputtext" style="width:90px;height:20px;" />	
				至 <input type="text" name="date2" value="<?php echo $_g_date2 ?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" class="Wdate inputtext" style="width:90px;height:20px;" />			
				<input type="submit" value="搜索" class="input_btn" />
			</form>
		</div>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list">
		<tr>
			<th class="bgtt" style="border-bottom:0;">商品详情</th>
			<th class="bgtt" style="border-bottom:0;" width="111">实付款(元)</th>
			<th class="bgtt" style="border-bottom:0;" width="251">收货信息</th>
			<th class="bgtt" style="border-bottom:0;" width="81">支付/发货</th>
			<th class="bgtt" style="border-bottom:0;" width="86">状态</th>
			<th class="bgtt" style="border-bottom:0;" width="86">操作</th>
		</tr>
		</table>
		<?php foreach($info_list as $k=>$v):?>
		<?php $sel = in_array($v['order_state'], array('success', 'close')) ? 'hy_ordertw' : 'hy_ordertt'?>
		<div class="hy_ordertw c666 mat10">
			订单编号：<span class="num" style="margin-right:60px"><?php echo $v['order_id'] ?></span>
			下单时间：<span class="num"><?php echo pe_date($v['order_atime']) ?></span>
		</div>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="hy_orderlist">
		<tr>
			<td class="aleft" style="border-left:0;padding-left:10px;padding-right:15px">
				<?php foreach($v['product_list'] as $kk => $vv):?>
				<div class="dingdan_list" <?php if($kk==0):?>style="padding-top:0"<?php endif;?>>
					<a href="<?php echo pe_url('product-'.$vv['product_id']) ?>" class="fl mar5" target="_blank"><img src="<?php echo pe_thumb($vv['product_logo'], 100, 100) ?>" width="40" height="40" class="imgbg" /></a>
					<div class="fl">
						<a href="<?php echo pe_url('product-'.$vv['product_id']) ?>" title="<?php echo $vv['product_name'] ?>" target="_blank" class="cblue dd_name"><?php echo pe_cut($vv['product_name'], 22, '...') ?></a>
						<?php if($vv['prorule_name']):?>
						<p class="c999 mat5"><?php foreach(unserialize($vv['prorule_name']) as $vvv):?>[<?php echo $vvv['name'] ?>：<?php echo $vvv['value'] ?>]&nbsp;&nbsp;<?php endforeach;?></p>
						<?php endif;?>
					</div>
					<span class="fr"><span class="num"><?php echo $vv['product_money'] ?></span>(×<?php echo $vv['product_num'] ?>)</span>
					<div class="clear"></div>
				</div>
				<?php endforeach;?>
			</td>
			<td width="110">
				<p class="corg num strong"><?php echo $v['order_money'] ?></p>
				<p class="c999">（含运费：<?php echo $v['order_wl_money'] ?>）</p>
				<p class="c999"><?php echo $cache_payway[$v['order_payway']]['payway_name'] ?></p>
			</td>
			<td width="250" class="aleft" valign="top" style="color:#555">
				<p>【姓名】<?php echo $v['user_tname'] ?> <span class="c888">(<?php echo $v['user_phone'] ?>)</span></p>
				<p>【地址】<?php echo $v['user_address'] ?></p>
				<p>【留言】<span class="c888"><?php echo $v['order_text'] ?></span></p>
			</td>
			<td width="80">
				<img src="<?php echo $pe['host_tpl'] ?>images/fu_<?php echo $v['order_pstate'] ?>.png" title="<?php echo pe_date($v['order_ptime']) ?>" />
				<img src="<?php echo $pe['host_tpl'] ?>images/fa_<?php echo $v['order_sstate'] ?>.png" title="<?php echo pe_date($v['order_stime']) ?>" />
			</td>
			<td width="85"><?php echo order_stateshow($v) ?><p class="mat5"><a href="admin.php?mod=order&act=edit&id=<?php echo $v['order_id'] ?>" target="_blank" class="c999">订单详情</a></p></td>
			<td width="85" style="border-right:0;">
				<?php if($v['order_state'] == 'wpay'):?>
				<a class="tag_org" href="admin.php?mod=order&act=pay&id=<?php echo $v['order_id'] ?>" onclick="return pe_dialog(this, '订单付款', 600, 340, 'order_pay')">立即付款</a>
				<p class="mat5"><a href="admin.php?mod=order&act=close&id=<?php echo $v['order_id'] ?>" onclick="return pe_dialog(this, '取消订单', 600, 430, 'order_close')" class="c999">取消订单</a></p>
				<?php elseif($v['order_state'] == 'wsend'):?>
				<a class="tag_blue" href="admin.php?mod=order&act=send&id=<?php echo $v['order_id'] ?>" onclick="return pe_dialog(this, '填写发货信息', 600, 430, 'order_send')">发 货</a>
				<p class="mat5"><a href="admin.php?mod=order&act=close&id=<?php echo $v['order_id'] ?>" onclick="return pe_dialog(this, '取消订单', 600, 430, 'order_close')" class="c999">取消订单</a></p>
				<?php elseif($v['order_state'] == 'wget'):?>
				<a class="tag_green" href="admin.php?mod=order&act=success&id=<?php echo $v['order_id'] ?>&token=<?php echo $pe_token ?>" onclick="return pe_cfone(this, '买家已收到商品')">确认收货</a>
				<p class="mat5"><a href="admin.php?mod=order&act=close&id=<?php echo $v['order_id'] ?>" onclick="return pe_dialog(this, '取消订单', 600, 430, 'order_close')" class="c999">取消订单</a></p>
				<?php elseif($v['order_state'] == 'close'):?>
				<a href="admin.php?mod=order&act=del&id=<?php echo $v['order_id'] ?>&token=<?php echo $pe_token ?>" onclick="return pe_cfone(this, '删除订单')" class="c999">删除</a>
				<?php else:?>
				-
				<?php endif;?>
			</td>
		</tr>
		</table>
		<?php endforeach;?>
	</div>
	<div class="right_bottom">
		<span class="fr fenye"><?php echo $db->page->html ?></span>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $pe['host_root'] ?>include/plugin/my97/WdatePicker.js"></script>
<?php include(pe_tpl('footer.html'));?>