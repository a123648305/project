<?php require_once('../../Connections/test.php'); ?>


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
  $updateSQL = sprintf("UPDATE movie SET mname=%s, mdirector=%s, mperformer=%s, mstudio=%s, mpalytime=%s, mlong=%s, mchar=%s WHERE mid=%s",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['dir'], "text"),
                       GetSQLValueString($_POST['per'], "text"),
                       GetSQLValueString($_POST['stu'], "text"),
                       GetSQLValueString($_POST['plt'], "date"),
                       GetSQLValueString($_POST['ml'], "int"),
                       GetSQLValueString($_POST['mc'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_test, $test);
  $Result1 = mysql_query($updateSQL, $test) or die(mysql_error());

  $updateGoTo = "movie_list.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT * FROM movie";
$Recordset1 = mysql_query($query_Recordset1, $test) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$maxRows_Recordset1 = 3;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT *
FROM movie WHERE mid='".$_GET[id]."'";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $test) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top--><form action="<?php echo $editFormAction; ?>" name="form1" method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="705" align="left" valign="middle">
	        
	         <span>管理员:admin</span>         </td>
  		  <td width="408" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">新增电影</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th width="9%" align="center" valign="middle" class="borderright">编号</th>
        <th width="10%" align="center" valign="middle" class="borderright">电影名</th>
        <th width="16%" align="center" valign="middle" class="borderright">导演</th>
        <th width="16%" align="center" valign="middle" class="borderright">主演</th>
        <th width="7%" align="center" valign="middle" class="borderright">发行地</th>
		<th width="16%" align="center" valign="middle" class="borderright">上映时间</th>
		<th width="7%" align="center" valign="middle" class="borderright">电影时长</th>
		<th width="16%" align="center" valign="middle" class="borderright">电影类型</th>
       
      </tr>
     
      
        <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
          <td align="center" valign="middle" class="borderright borderbottom"><input   width="100px" name="id" readonly="readonly" nam="id" value="<?php echo $row_Recordset1['mid']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom"><input name="name" value="<?php echo $row_Recordset1['mname']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom"><input name="dir" value="<?php echo $row_Recordset1['mdirector']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom"><input name="per" value="<?php echo $row_Recordset1['mperformer']; ?>"></td>
		  <td align="center" valign="middle" class="borderright borderbottom"><input  width="70px" name="stu" value="<?php echo $row_Recordset1['mstudio']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom"><input   name="plt" value="<?php echo $row_Recordset1['mpalytime']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom"><input  width="70px" name="ml" value="<?php echo $row_Recordset1['mlong']; ?>"></td>
		  <td align="center" valign="middle" class="borderright borderbottom"><input name="mc" value="<?php echo $row_Recordset1['mchar']; ?>"></td>
         
        </tr>
       
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="fenye" "><input  name="2" type="submit" value="save" style="position:absolute; left: 486px; top: 140px; width: 106px; height: 29px;">
      总共<?php echo $totalRows_Recordset1 ?> 条数据</td>
  </tr>
</table>
<input type="hidden" name="MM_update" value="form1">
</form>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>