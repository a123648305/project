<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>$deleteSQL = sprintf("DELETE FROM user WHERE userid=%s",
<?php $connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("movie",$connect) or die ("失败2");
$sql ="DELETE FROM movie WHERE mid='".$_GET['id']."' ";
$rs=mysql_query($sql);


  
echo "<script>alert('成功');location.href='http://localhost:81/3248/Admin/movie_list.php'</script>";  
 

mysql_close($connect);
?>  ?>
<body>
</body>
</html>
