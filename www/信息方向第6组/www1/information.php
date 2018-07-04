<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE4 {color: #999966}
.STYLE6 {color: #000000; font-size: 14px; }
.STYLE7 {color: #999966; font-size: 24px; }
.STYLE8 {font-size: 24px}
-->
</style>
</head>

<body>
<p>

<p><input name="Submit" type="button" style="position:absolute; left: 547px; top: 191px; width: 77px; height: 39px;" onclick="window.location.href='main.php'"value="返回首页" />
<table  style="position:absolute; left: 208px; top: 35px; background-color: #FF33FF; layer-background-color: #FF33FF; border: 1px none #000000;"width="826" height="103" border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#C1FFFF">

  <tr>

    <td width="137" align="center" class="STYLE7"><div align="center">运单号</div></td>
    <td width="153" align="center" class="STYLE4"><div align="center" class="STYLE8">地址</div></td>
	 <td width="152" align="center" class="STYLE4"><div align="center" class="STYLE8">时间</div></td>
</tr>
  <?php 
  $fid =$_POST[fid];
$connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("wlgl",$connect) or die ("失败2");

$sql  ='SELECT *  FROM `information_transfer` WHERE `Transfer_No` ='.$fid.' ORDER BY `Transfer_No` ASC';

$rs=mysql_query($sql);
if (mysql_num_rows($rs) <1) {echo "0 个结果";}

//    // 输出每行数据
//   // while($row = mysql_fetch_assoc($rs)) {
////        echo "<br> 运单号: ". $row["Warehouse_No"]. " 时间: ". $row["Push_Time"]. " 地点：" . $row["Warehouse_Add"];
////    }
////	

else {
 


while($row = mysql_fetch_array($rs)){

  ?>

  <tr>

    <td height="47" align="center"><span class="STYLE6"><?php echo $row["Transfer_No"];?></span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><?php echo $row["WeiZhi&DiDian"];?></span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><?php echo $row["RuKuShijian"];?></span></td>
  </tr>
	<?php }}?>
</table>








</p>

</body>

</html>
