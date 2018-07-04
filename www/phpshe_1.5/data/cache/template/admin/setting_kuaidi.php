<?php include(pe_tpl('header.html'));?>
<div class="right">
	<?php include(pe_tpl('setting_menu.html'));?>
	<div class="right_main">
		<form method="post">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang mat20">
		<?php for($i=0; $i<15; $i++):?>
		<?php $web_wlname = unserialize($info['web_wlname']['setting_value'])?>
		<tr>
			<td align="right" width="150">快递公司<?php echo $i+1 ?>：</td>
			<td><input type="text" name="web_wlname[]" value="<?php echo $web_wlname[$i] ?>" class="inputall input200" /></td>
		</tr>
		<?php endfor;?>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="pe_token" value="<?php echo $pe_token ?>" />
				<input type="submit" name="pesubmit" value="提 交" class="tjbtn">		
			</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php include(pe_tpl('footer.html'));?>