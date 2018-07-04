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
$sql = "INSERT INTO `user` (`userid`, `username`, `userpad`, `userphone`, `other`) VALUES ('".$_POST[id]."', '".$_POST[name]."', '".$_POST[pad]."', NULL, '".$_POST[level]."')";
$rs=mysql_query($sql);


  
echo "<script>alert('提交成功');location.href='http://localhost:81/3248/Admin/index.html'</script>";  
 

mysql_close($connect);
?> 
</body>
</html>
