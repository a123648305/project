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

$sql = "INSERT INTO `information_evaluate` (`Evaluate_Speed`, `Evaluate_Grade`, `Evaluate_Remaks`) VALUES ('$_POST[speed]', '$_POST[pf]', '$_POST[ly]');";

//$rs=mysql_query($sql);

if (!mysql_query($sql,$connect))//结果判断
  {
  die('Error: ' . mysql_error());
  }
  else
  
echo "<script>alert('评价成功')</script>";  
mysql_close($connect);
 ?> 
</body>
</html>
