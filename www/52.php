<?php require_once('Connections/test.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE user SET username=%s, userpad=%s, userphone=%s, other=%s WHERE userid=%s",
                       GetSQLValueString($_POST['name[]'], "text"),
                       GetSQLValueString($_POST['pad[]'], "text"),
                       GetSQLValueString($_POST['phone[]'], "text"),
                       GetSQLValueString($_POST['other[]'], "int"),
                       GetSQLValueString($_POST['id[]'], "int"));

  mysql_select_db($database_test, $test);
  $Result1 = mysql_query($updateSQL, $test) or die(mysql_error());

  $updateGoTo = "52.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT * FROM `user`";
$Recordset1 = mysql_query($query_Recordset1, $test) or die(mysql_error());

$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form method="POST" action="<?php echo $editFormAction; ?>" name="form1"><table><tr><td>id</td><td>name</td><td>pad</td><td>phone</td><td>other</td></tr>
<?php while($row = mysql_fetch_array($Recordset1)){?>
<tr><td><input name="id[]" type="text" value="<?php echo $row['userid']; ?>" /></td>
<td><input name="name[]" type="text" value="<?php echo $row['username']; ?>" /></td>
<td><input name="pad[]" type="text" value="<?php echo $row['userpad']; ?>" /></td>
<td><input name="phone[]" type="text" value="<?php echo $row['userphone']; ?>" /></td>
<td><input name="other[]" type="text" value="<?php echo $row['other']; ?>" /></td></tr><?php }?>

</table>
  <input type="hidden" name="MM_update" value="form1"><input  type="submit" />
</form>

<?php echo MM_update; ?>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
