
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
$username=$_POST['username'];
$userpad=$_POST['userpad1'];
$userphone=$_POST['userphone'];
//$username="test";
$sql = "select * from `user` where username='".$username."'";
$rs=mysql_query($sql);
$rd = mysql_fetch_assoc($rs);

	
if($rd==""){
$sql = "INSERT INTO `user` (`userid`, `username`, `userpad`, `userphone`, `other`) VALUES ('".$userid."', '".$username."', '".$userpad."', '".$userphone."', 1)";
$rs=mysql_query($sql);
echo "<script>alert('注册成功，赶紧登录吧！');location.href='login.php';</script>";
		
	}else{
	echo "<script>alert('用户名已被注册！');location.href='zc.html';</script>";
}


mysql_close($connect);

?> 






</body>
</html>
