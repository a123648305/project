<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
 


<body>

<?php 

$connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("movie",$connect) or die ("失败2");



$userid=rand(1000,10000);
$username=$_POST[username];
$userpad=$_POST[userpad1];
$userphone=$_POST[userphone];




$sql = "INSERT INTO `user` (`userid`, `username`, `userpad`, `userphone`, `other`) VALUES ('".$userid."', '".$username."', '".$userpad."', '".$userphone."', 1)";
$rs=mysql_query($sql);
echo "<script>alert('注册成功，赶紧登录吧！');location.href='login.php';</script>";
mysql_close($connect);
?> 






</body>
</html>
