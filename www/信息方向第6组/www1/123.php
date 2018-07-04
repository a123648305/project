<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php  
$connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("wlgl",$connect) or die ("失败2");
echo $_POST[jname];
echo $_POST[add]; 
echo $_POST[jtell];
echo $_POST[remake];
echo $_POST[sname];
echo $_POST[stell];
echo $_POST[sadd];
echo $_POST[kg];
//$no =10010;
$sql = "INSERT INTO `information_dingdanbiao` (`jjren`, `JiJianRen_Addr`, `JiJianRen_Tel`, `ShouJianRen`, `ShouJianRen_Tel`, `ShouJianRen_Addr`, `Heavy`, `JiJianRen_Beizhu`, `DingDanBianha`) VALUES ('".$_POST[jname]."', '".$_POST[add]."', '".$_POST[jtell]."', '".$_POST[sname]."', '".$_POST[stell]."', '".$_POST[sadd]."', '".$_POST[kg]."', '".$_POST[remake]."', NULL)";
$rs=mysql_query($sql);

if (!mysql_query($sql,$connect))//结果判断
  {
  die('Error: ' . mysql_error());
  }
  else
  
echo "<script>alert('提交成功');location.href='main.php'</script>";  
mysql_close($connect);
// ?> 
</body>
</html>
