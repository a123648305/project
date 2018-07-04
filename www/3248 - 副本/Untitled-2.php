<?php require_once('../Connections/test.php'); ?>
<?php
mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT test.`path` FROM test ";
$Recordset1 = mysql_query($query_Recordset1, $test) or die(mysql_error());

$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>



<?php
while($row=mysql_fetch_assoc))
{ echo "<img src='".$row[path]."' />"; }?>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
