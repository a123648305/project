<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	session_start();
	unset($_SESSION['MM_Username']);
	header('Refresh:3,Url=index.php');
	echo "<script>alert('注销成功！3s后跳转')</script>";

?>
	
</body>
</html>