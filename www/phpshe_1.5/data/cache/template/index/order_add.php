<?php include(pe_tpl('header.html'));?>
<div class="wgw_box">
	<div class="wgw_btn"></div>
	<div class="mat20 font16 c666">你的购物车里还没有商品</div>
	<div class="g_btn"><a href="<?php echo $pe['host_root'] ?>">去逛逛</a></div>
</div>
<div class="content" style="display:none">
	<div class="liucheng">我的购物车</div>
	<div class="mat10">
		<form method="post" id="form">
		<div class="gouwuche">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gwc_tb">
			<tr>
				<th width="80" style="padding-left:20px">商品图片</th>
				<th>商品名称</th>
				<th width="160">单价(元)</th>
				<th width="110">购买数量</th>
				<th width="100">操作</th>
			</tr>
			<?php foreach($info_list as $k=>$v):?>
			<tr class="js_cart" id="<?php echo $k ?>">
				<td class="hotimg" style="padding-left:20px;padding-right:0"><img src="<?php echo pe_thumb($v['product_logo'], 100, 100) ?>" /></td>
				<td style="text-align:left;padding-left:0">
					<a href="<?php echo pe_url('product-'.$v['product_id']) ?>" target="_blank" class="cblue font14"><?php echo $v['product_name'] ?></a>
					<?php if($v['prorule_name']):?>
					<p class="c666"><?php foreach(unserialize($v['prorule_name']) as $vv):?>[<?php echo $vv['name'] ?>：<?php echo $vv['value'] ?>]&nbsp;&nbsp;<?php endforeach;?></p>
					<?php endif;?>
				</td>
				<td class="num font14"><?php echo $v['product_money'] ?></td>
				<td class="shuliang" style="padding-left:10px;">
					<span class="img1" onclick="pe_numchange('<?php echo $k ?>', '-', 1);cart_edit('<?php echo $k ?>')">-</span>
					<div class="shuliang_box"><input type="text" name="<?php echo $k ?>" value="<?php echo $v['product_num'] ?>" readonly /></div>
					<span class="img2" onclick="pe_numchange('<?php echo $k ?>', '+', <?php echo $v['product_maxnum'] ?>);cart_edit('<?php echo $k ?>')">+</span>
				</td>
				<td><a href="javascript:;" onclick="cart_edit('<?php echo $k ?>', 'del')">删除</a></td>
			</tr>
			<?php endforeach;?>
			</table>
		</div>
		<div class="fukuan">
			<div class="fl" style="padding:5px 10px; font-family:宋体">
				<?php if($money['order_point_get']):?>
				可获得积分：<span class="cred num" id="order_point_get"><?php echo $money['order_point_get'] ?></span> 点
				<?php endif;?>
				<div class="mat15">
					<label for="quan_btn" class="fl">
						<input type="checkbox" id="quan_btn" class="fl mat2 mar5" />
						<span class="fl">使用优惠券</span>
						<div class="clear"></div>
					</label>
					<select name="order_quan_id" class="fl mal10" style="display:none">
					<option value="0" quan_money="0.0">--请选择--</option>
					<?php foreach($quan_list as $v):?>
					<option value="<?php echo $v['quanlog_id'] ?>" quan_money="<?php echo $v['quan_money'] ?>">【<?php echo $v['quan_money'] ?>元】<?php echo $v['quan_name'] ?></option>
					<?php endforeach;?>
					</select>
					<div class="clear"></div>
				</div>
				<div class="mat15">
					<label for="point_btn">
						<input type="checkbox" id="point_btn" class="fl mat2 mar5" />
						<span class="fl">使用积分 <span class="c888">（账户积分： <?php echo $user['user_point'] ?>点，可抵现 <?php echo $user_point_money ?> 元）</span></span>
						<div class="clear"></div>
					</label>
					<div style="margin:10px 0 0 20px; display:none" id="point_html">
						本次使用 <input type="text" name="order_point_use" class="jf_input"> 点
					</div>
				</div>
			</div>
			<div class="fk_tb">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>商品金额：</td>
				<td width="80" class="num font14 cred">¥ <span id="order_product_money"><?php echo $money['order_product_money'] ?></span></td>
			</tr>
			<tr>
				<td>运费：</td>
				<td class="num font14">¥ <span id="order_wl_money"><?php echo $money['order_wl_money'] ?></span></td>
			</tr>
			<tr>
				<td>使用优惠券：</td>
				<td class="num font14">- ¥ <span id="order_quan_money">0.0</span></td>
			</tr>
			<tr>
				<td>使用积分：</td>
				<td class="num font14">- ¥ <span id="order_point_money">0.0</span></td>
			</tr>
			<tr>
				<td>应付金额：</td>
				<td class="num font18 cred strong">¥ <span id="order_money"><?php echo $money['order_money'] ?></span></td>
			</tr>
			</table>
			</div>
			<div class="clear"></div>			
		</div>
		<div class="liucheng">收货地址</div>
		<div class="order_addbox" style="padding:0">
			<div class="dddz_l" id="json_html">
				<script type="text/html" id="json_tpl">
				{{each list as v k}}
				<label class="mat15" for="{{v.address_id}}" style="display:block">
					<input type="radio" name="address_id" value="{{v.address_id}}" id="{{v.address_id}}" class="inputfix mar5" {{if v.sel}}checked="checked"{{/if}}>
					{{v.address_province}} {{v.address_city}} {{v.address_area}} {{v.address_text}} （{{v.user_tname}} 收） <span class="c999">{{v.user_phone}}</span>
				</label>
				{{/each}}
				</script>
			</div>
			<div class="xzdz_btn"><a href="<?php echo $pe['host_root'] ?>index.php?mod=useraddr&act=add" onclick="return pe_dialog(this, '新增地址', 630, 380)">+ 使用新地址</a></div>
			<div class="clear"></div>
		</div>
		<div class="liucheng">支付方式</div>
		<div class="fkfs">
			<ul>
				<?php foreach($payway_list as $k=>$v):?>
				<li class="js_radio" val="<?php echo $k ?>">
					<img src="<?php echo $pe['host_root'] ?>include/plugin/payway/<?php echo $k ?>/logo.png" class="fl" />
					<?php if($k == 'balance'):?>
					<span class="fr corg mat5">（余额：<?php echo $user['user_money'] ?>元）</span>
					<?php endif;?>
					<div class="clear"></div><i></i>
				</li>
				<?php endforeach;?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="liucheng">订单备注</div>
		<div class="mat15">
			<label style="display:block"><input type="text" name="order_text" class="inputall input350" /></label>
		</div>
		<div class="ddtj_btn_box" style="text-align:right">
			<input type="hidden" name="order_payway" value="" />
			<input type="hidden" name="pesubmit" />
			<input type="submit" class="ddtj_btn" value="提交订单" />
			<a href="<?php echo $pe['host_root'] ?>" class="sctj" style="float:right; font-size:16px;">继续购物</a>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
	cart_check();
	useraddr_list(0);
	pe_select_radio('order_payway');
	//积分勾选
	$("#point_btn").click(function(){
		if ($(this).is(":checked")) {
			$("#point_html").show();
		}
		else {
			$("#point_html").hide();
			$(":input[name='order_point_use']").val('');
			$("#order_point_money").html('0.0');	
		}
		order_money();
	})
	//积分输入
	$(":input[name='order_point_use']").keyup(function(){
		var point = parseInt($(this).val()), point_money = 0;
		if (point > <?php echo $user['user_point'] ?>) {
			point = <?php echo $user['user_point'] ?>;
		}
		else if (point < 0 || isNaN(point)) {
			point = 0;
		}
		$(this).val(point);
		if (<?php echo round($cache_setting['point_money']) ?> > 0) {
			point_money = point/<?php echo $cache_setting['point_money'] ?>;
		}
		$("#order_point_money").html(point_money.toFixed(1));
		order_money();
	})
	//优惠券勾选
	$("#quan_btn").click(function(){
		if ($(this).is(":checked")) {
			$(":input[name='order_quan_id']").show();
		}
		else {
			$(":input[name='order_quan_id']").hide().val(0.0);
			$("#order_quan_money").html('0.0');
		}
		order_money();
	})
	//使用优惠券
	$(":input[name='order_quan_id']").live("change", function(){	
		$("#order_quan_money").html($(this).find("option:selected").attr("quan_money"));
		order_money();
	})
	$(":input[name='order_payway']:eq(0)").attr("checked", "checked");
})
//购物车初始化
function cart_check() {
	if ($(".js_cart").length == 0) {
		$(".wgw_box").show();
		$(".content").hide();
	}
	else {
		$(".wgw_box").hide();
		$(".content").show();	
	}
}
//修改购物车数量
function cart_edit(product_guid, type) {
	if (type == 'del') {
		if (confirm('您确认要删除该商品吗?') == false) return;
		var num = 0;
	}
	else {
		var num = $(":input[name='"+product_guid+"']").val();
	}
	$.getJSON("<?php echo $pe['host_root'] ?>index.php", {"mod":"order","act":"cart_edit","guid":product_guid,"num":num}, function(json){
		if (json.result) {
			if (num == 0) $("#"+product_guid).remove();
			$("#order_product_money").html(json.money.order_product_money);
			$("#order_wl_money").html(json.money.order_wl_money);
			$("#order_point_get").html(json.money.order_point_get);
			$(":input[name='order_quan_id']").html(json.quan_html);
			$("#cart_num").html(json.cart_num);
			order_money();
			cart_check();
		}
	})
}
//订单金额
function order_money() {
	var product_money = parseFloat($("#order_product_money").html());
	var wl_money = parseFloat($("#order_wl_money").html());
	var quan_money = parseFloat($("#order_quan_money").html());
	var point_money = parseFloat($("#order_point_money").html());
	var order_money = product_money + wl_money - quan_money - point_money;
	order_money = order_money >= 0 ? order_money : 0;
	$("#order_money").html(order_money.toFixed(1));
}
//获取收货地址
function useraddr_list(id) {
	pe_getinfo("<?php echo $pe['host_root'] ?>index.php?mod=useraddr&id="+id);
}
</script>
<style type="text/css">
body{background:#f8f8f8}
</style>
<?php include(pe_tpl('footer.html'));?>