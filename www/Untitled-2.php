<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body> <?php echo "<script>alert('管理员你好，欢迎你的使用！');</script>";?><form method="post" action="3248/seat.php">
<table width="200">
  <tr>
    <input name="tt" type="radio"  value="2017年12月16日  ">
      2017年12月16日 </label>
  
      <input type="radio" name="tt"  value="2017年12月17日 ">
      2017年12月17日</label>
  </tr>
</table>
<input name="Submit" type="submit" value="提交" /></form>
<?php echo $_POST[tt]; ?>
</body>
</html>
