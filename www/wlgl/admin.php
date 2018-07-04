<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE2 {font-size: 24px}
-->
</style>
</head>

<body><?php $connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("wlgl",$connect) or die ("失败2");?>
 
<p><div  style="position:absolute; background-color:#CCCCCC; left: 10px; top: 97px; width: 128px; height: 306px;"">
<br>


<a href="javascript:link1()"><u>客户信息管理</u></p>


<p><u><a href="javascript:link2()"><u>运单信息管理</u></p>


<p>  <u><a href="javascript:link3()">仓库信息管理</u>


<p>  <u><a href="javascript:link4()">员工信息管理

</u></div>

<div  style="position:absolute; top:10px; left: 9px; width: 1127px; height: 84px; background-image: url(picture/timg.jpg);">信息管理</div>

<!--运单信息管理显示-->


<body>
<!--运单信息管理显示-->
<div id="h2" style="position:absolute; top:97px; left:137px; width: 912px; height: 345px;">
  <form action="" method="post" >
<table width="912"  border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#C1FFFF">

  <tr>
   
    <td width="140" height="72" align="center" class="STYLE7">寄件人</td>
    <td width="140" align="center" class="STYLE4">寄件人地址</td>
	 <td width="140" align="center" class="STYLE4">电话寄件人电话</td>
	 <td width="95" align="center" class="STYLE4">收件人</td>
	 <td width="124" align="center" class="STYLE4">收件人电话</td>
	 <td width="83" align="center" class="STYLE4">收件人地址</td>
	<td width="83" align="center" class="STYLE4">重量</td>
	 <td width="89" align="center" class="STYLE4">实时地点</td>
	  <td width="140" height="72" align="center" class="STYLE7">编号</td>
</tr>
  <?php 

if (isset($_REQUEST["Submit4"])){ 

 $sql  = 'SELECT *  FROM `information_dingdanbiao`';
  $wxs=mysql_num_rows(mysql_query($sql));
    for($w=0;$w<$wxs;$w++){
 
	
	
$sql  = "UPDATE `information_dingdanbiao` SET `jjren` = '".$_POST['jname'][$w]."' ,`JiJianRen_Addr` = '".$_POST['jadd'][$w]."' , `JiJianRen_Tel` = '".$_POST['jte'][$w]."' , `ShouJianRen` = '".$_POST['sna'][$w]."', `ShouJianRen_Tel` = '".$_POST['ste'][$w]."', `ShouJianRen_Addr` = '".$_POST['sadd'][$w]."', `JiJianRen_Beizhu` = '".$_POST['remark'][$w]."' WHERE `DingDanBianha` = '".$_POST['id'][$w]."'";


	 
	 mysql_query($sql) or die(mysql_error());
	   	  }echo "<script>alert('更新成功')</script>"; 
	  }


$sql  = 'SELECT *  FROM `information_dingdanbiao`';
$rs=mysql_query($sql);
while($row = mysql_fetch_array($rs)){

  ?>

  <tr>

    
	<td height="50"  align="center"><span class="STYLE6">
      <input name="jname[]"  align="left" type="text" id="jname" size="10"  value="<?php echo $row["jjren"];?>" >
    </span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="jadd[]" type="text" id="jadd" size="20" value="<?php echo $row["JiJianRen_Addr"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="jte[]" type="text" id="jte" size="20" value="<?php echo $row["JiJianRen_Tel"];?>" >
	</span></td>
		<td   align="center" class="STYLE6"><span class="STYLE6"><input name="sna[]" type="text" id="sna" size="10" value="<?php echo $row["ShouJianRen"];?>" >
	</span></td>
		<td   align="center" class="STYLE6"><span class="STYLE6"><input name="ste[]" type="text" id="ste" size="20" value="<?php echo $row["ShouJianRen_Tel"];?>" >
	</span></td>
		<td   align="center" class="STYLE6"><span class="STYLE6"><input name="sadd[]" type="text" id="sadd" size="20" value="<?php echo $row["ShouJianRen_Addr"];?>" >
	</span></td>
		<td   align="center" class="STYLE6"><span class="STYLE6"><input name="heavy[]" type="text" id="heavy" size="10" value="<?php echo $row["Heavy"];?>" >
	</span></td>
		<td   align="center" class="STYLE6"><div align="center"><span class="STYLE6">
		  <input name="remark[]" type="text" id="remark" size="20" value="<?php echo $row["JiJianRen_Beizhu"];?>" >
	        </span></div></td>
			<td align="center" class="STYLE6"><span class="STYLE6">
      <input name="id[]"   type="text" id="id" size="10"  value="<?php echo $row["DingDanBianha"];?>" readonly="readonly">
    </span></td>
  </tr>
	<?php }?>
</table>  
 <input name="Submit4" type="submit" id="Submit4"  style="position:absolute; left: 329px; top: 291px; width: 232px; height: 51px;" value="修改保存"/>
</form></div>

<!--客户信息管理显示-->
<div id="h1" style="position:absolute; top:97px; left:137px; width: 912px; height: 304px;">
  <form action="" method="post" >

<table width="912"  border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#C1FFFF">

  <tr>

    <td width="137" height="64" align="center" class="STYLE7 STYLE2">用户名</td>
    <td width="153" align="center" class="STYLE4 STYLE2">密码</td>
	 <td width="152" align="center" class="STYLE4 STYLE2">电话</td>
</tr>
  <?php 
if (isset($_REQUEST["Submit"])){ 

 $sql  = 'SELECT * FROM `information_client`';
  $wxs=mysql_num_rows(mysql_query($sql));
    for($w=0;$w<$wxs;$w++){
    $sql  = "UPDATE `information_client` SET `Client_Password` = '".$_POST['pass'][$w]."' , `Client_Tel` = '".$_POST['tell'][$w]."' WHERE `Client_Count` ='".$_POST['id'][$w]."'";
	 mysql_query($sql);
	   	  }echo "<script>alert('更新成功')</script>"; 
	  }

$sql  ='SELECT *  FROM `information_client`';
$rs=mysql_query($sql);
while($row = mysql_fetch_array($rs)){

  ?>

  <tr>

    <td height="41"  align="center"><span class="STYLE6">
      <input name="id[]"   type="text" id="user" size="30" value="<?php echo $row["Client_Count"];?>" readonly="readonly">
    </span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="pass[]" type="text" id="pass" size="30" value="<?php echo $row["Client_Password"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="tell[]" type="text" id="tell" size="30" value="<?php echo $row["Client_Tel"];?>" >
	</span></td>
  </tr>
	<?php }?>
</table>  
 <input type="submit" name="Submit" value="修改保存"  style="position:absolute; left: 300px; top: 251px; width: 232px; height: 51px;"/>

</form></div>



<!--仓库息管理显示-->
<?php
 
if (isset($_REQUEST["Submit3"])){ 

 $sql  = 'SELECT * FROM `information_warehouse`';
 

  $wxs=mysql_num_rows(mysql_query($sql));
  
 
      for($w=0;$w<$wxs;$w++){
	   
	 //  $sql  = 'UPDATE `information_warehouse` SET `Push_Time` = '.$_POST['wp'][$w].', `Pop_Time` = '.$_POST['wpo'][$w].', `Warehouse_Add` = '.$_POST['wad'][$w].' WHERE `information_warehouse`.`Warehouse_No` = '.$_POST['wid'][$w].'';
	    $sql  = "UPDATE `information_warehouse` SET `Warehouse_Add` = '".$_POST['wad'][$w]."' WHERE `information_warehouse`.`Warehouse_No` = '".$_POST['wid'][$w]."'";
	 mysql_query($sql);
	  }echo "<script>alert('更新成功')</script>"; }?>

<div id="h3" style="position:absolute; top:97px; left:137px; width: 1005px; height: 304px; ">
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
      <input name="wid[]"   type="text" id="wid" size="20" value="<?php echo $row["Warehouse_No"];?>" readonly="readonly">
    </span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="wp[]" type="text" id="wp" size="25" value="<?php echo $row["Push_Time"];?>" readonly="readonly">
	</span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="wpo[]" type="text" id="wpo" size="25" value="<?php echo $row["Pop_Time"];?>" readonly="readonly">
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="wad[]" type="text" id="wad" size="30" value="<?php echo $row["Warehouse_Add"];?>" >
	</span></td>
  </tr>
	<?php }?>
</table>  
 <input name="Submit3" type="submit" id="Submit3"  style="position:absolute; left: 300px; top: 251px; width: 232px; height: 51px;" value="修改保存"/>

</form></div>
<!--员工信息管理显示-->
<div id="h4" style="position:absolute; top:97px; left:137px; width: 995px; height: 349px; ">
  <form action="" method="post" >

<table width="912"  border="1" align="left" cellpadding="0" cellspacing="0" bgcolor="#C1FFFF">

  <tr>

    <td width="137" height="64" align="center" class="STYLE2 STYLE7"><strong>员工号</strong></td>
    <td width="153" align="center" class="STYLE2 STYLE4"><strong>姓名</strong></td>
	 <td width="152" align="center" class="STYLE2 STYLE4"><strong>电话</strong></td>
	  <td width="152" align="center" class="STYLE2 STYLE4"><strong>地址</strong></td>
	  <td width="152" align="center" class="STYLE2 STYLE4"><strong>性别</strong></td>
	   <td width="152" align="center" class="STYLE2 STYLE4"><strong>身份证号码</strong></td>
</tr>
  <?php 
if (isset($_REQUEST["Submit2"])){ 

$sql  = 'SELECT * FROM `information_employee`';
 $wxs=mysql_num_rows(mysql_query($sql));
  
   for($w=0;$w<$wxs;$w++){

	
      $sql  = "UPDATE `information_employee` SET `Information_Employee_Name` = '".$_POST['yna'][$w]."' , `Information_Employee_Tel` = '".$_POST['ytell'][$w]."' , `nformation_Employee_Pos` = '".$_POST['yadd'][$w]."', `nformation_Employee_Sex` = '".$_POST['ysex'][$w]."', `nformation_Employee_ID` = '".$_POST['yidd'][$w]."' WHERE `Information_Employee_No` ='".$_POST['yid'][$w]."'";
	 mysql_query($sql);
	  }echo "<script>alert('更新成功')</script>"; }

 $sql='SELECT * FROM `information_employee`';

$rs=mysql_query($sql);
while($row = mysql_fetch_array($rs)){

  ?>

  <tr>

    <td height="41"  align="center"><span class="STYLE6">
      <input name="yid[]"   type="text" id="yid" size="20" value="<?php echo $row["Information_Employee_No"];?>" readonly="readonly">
    </span></td>
	<td align="center" class="STYLE6"><span class="STYLE6"><input name="yna[]" type="text" id="yna" size="10" value="<?php echo $row["Information_Employee_Name"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="ytell[]" type="text" id="ytell" size="15" value="<?php echo $row["Information_Employee_Tel"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="yadd[]" type="text" id="yadd" size="20" value="<?php echo $row["nformation_Employee_Pos"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="ysex[]" type="text" id="ysex" size="5" value="<?php echo $row["nformation_Employee_Sex"];?>" >
	</span></td>
	<td   align="center" class="STYLE6"><span class="STYLE6"><input name="yidd[]" type="text" id="yidd" size="20" value="<?php echo $row["nformation_Employee_ID"];?>" >
	</span></td>
	
  </tr>
	<?php }?>
</table>  
 <input name="Submit2" type="submit" id="Submit2"  style="position:absolute; left: 324px; top: 303px; width: 232px; height: 51px;" value="修改保存"/>
</form></div>


<!--控制div信息管理显示函数-->
<script type='text/javascript'>
function link1() {document.getElementById('h2').style.display='none';document.getElementById('h3').style.display='none';document.getElementById('h4').style.display='none';document.getElementById('h1').style.display='';}
function link2() {document.getElementById('h1').style.display='none';document.getElementById('h3').style.display='none';document.getElementById('h4').style.display='none';document.getElementById('h2').style.display='';}
function link3() {document.getElementById('h1').style.display='none';document.getElementById('h2').style.display='none';document.getElementById('h4').style.display='none';document.getElementById('h3').style.display='';}
function link4() {document.getElementById('h1').style.display='none';document.getElementById('h2').style.display='none';document.getElementById('h3').style.display='none';document.getElementById('h4').style.display='';}
 
</script>
</body>
</html>


