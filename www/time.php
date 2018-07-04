<?php virtual('/Connections/test.php'); ?>
<?php
mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT distinct pdata FROM playlist WHERE mid = 1";
$Recordset1 = mysql_query($query_Recordset1, $test) or die(mysql_error());
$row = mysql_fetch_array($Recordset1);
$row1 = mysql_fetch_assoc($Recordset1);
$row2 = mysql_fetch_row($Recordset1);
//while($row_Recordset1 = mysql_fetch_array($Recordset1))
//{
//echo $row_Recordset1[1]['pdata'];}
//$rs=mysql_fetch_array($Recordset1);
//echo $rs['pdata'];

var_dump($row); echo "<br>";
var_dump($row1); echo "<br>";
var_dump($row2); 
echo $row['pdata'];

mysql_free_result($Recordset1);
?>