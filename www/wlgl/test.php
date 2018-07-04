<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body><?php
 $connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("wlgl",$connect) or die ("失败2");

if (isset($_REQUEST["Submit3"])){ 

 $sql  = 'SELECT * FROM `information_warehouse`';
 

  $wxs=mysql_num_rows(mysql_query($sql));
  
 
      for($w=0;$w<$wxs;$w++){
	   
	 //  $sql  = 'UPDATE `information_warehouse` SET `Push_Time` = '.$_POST['wp'][$w].', `Pop_Time` = '.$_POST['wpo'][$w].', `Warehouse_Add` = '.$_POST['wad'][$w].' WHERE `information_warehouse`.`Warehouse_No` = '.$_POST['wid'][$w].'';
	    $sql  = 'UPDATE `information_warehouse` SET `Warehouse_Add` = '.$_POST['wad'][$w].' WHERE `information_warehouse`.`Warehouse_No` = '.$_POST['wid'][$w].'';
	 mysql_query($sql);
	
	 
	
	
	   	  
	  }echo "<script>alert('更新成功')</script>"; }?>

<div id="a" style="position:absolute; top:98px; left:143px; width: 912px; height: 304px; ">
  <form action="" method="post" >

<table width="912"  border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#C1FFFF">

  <tr>

    <td width="137" height="64" align="center" class="STYLE7 STYLE2">运单号名</td>
    <td width="153" align="center" class="STYLE4 STYLE2">入库时间</td>
	<td width="153" align="center" class="STYLE4 STYLE2">出库时间</td>
	 <td width="152" align="center" class="STYLE4 STYLE2">位置</td>
</tr>
  <?php 



$sql  ='SELECT * FROM `information_warehouse`';
$rs=mysql_query($sql);
while($row = mysql_fetch_array($rs)){

  ?>

  <tr>

    <td height="41"  align="center"><span class="STYLE6">
      <input name="wid[]"   type="text"   readonly="readonly" id="wid" size="20" value="<?php echo $row["Warehouse_No"];?>">
    </span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="wp[]" type="text" id="wp" size="25" value="<?php echo $row["Push_Time"];?>" >
	</span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="wpo[]" type="text" id="wpo" size="25" value="<?php echo $row["Pop_Time"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="wad[]" type="text" id="wad" size="30" value="<?php echo $row["Warehouse_Add"];?>" >
	</span></td>
  </tr>
	<?php }?>
</table>  
 <input name="Submit3" type="submit" id="Submit3"  style="position:absolute; left: 300px; top: 251px; width: 232px; height: 51px;" value="修改保存"/>

</form></div>

</body>
</html>
