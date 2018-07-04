<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
$username = $_POST['tid'];
$password = $_POST['tpa'];
$connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("wlgl",$connect) or die ("失败2");
$sql ="SELECT `Client_Remarks` FROM `information_client` WHERE `Client_Count` = '".$username."' AND `Client_Password` = '".$password."'";
//$sql ="SELECT `Client_Remarks` FROM `information_client` WHERE `Client_Count` = '101' AND `Client_Password` = '1102'";
$result = mysql_query($sql);
$wxs=mysql_num_rows($result);
if(($row = mysql_num_rows($result))==0)   echo "<script>alert('用户名或密码错误！');location.href='main.php';</script>";


 while($row = mysql_fetch_array($result))
  {
  $tes=$row['Client_Remarks'];
  //echo $tes;
  if(strcasecmp($tes,"用户")== 0){ $_SESSION['views']=$username; echo "<script>alert('用户".$username."你好，欢迎你的使用!');location.href='main2.php';</script>"; }
  else if(strcasecmp($tes,"管理员")== 0){echo "<script>alert('管理员你好，欢迎你的使用！');location.href='admin.php';</script>";}
  

  
mysql_close($connect);}
?>
</body>
</html>
