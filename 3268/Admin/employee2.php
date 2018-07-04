<?php require_once('../Connections/movie.php'); ?>

<?php



$maxRows_Recordset1 = 3;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_movie, $movie);
$query_Recordset1 = "SELECT * FROM employee ORDER BY employee.eid ASC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $movie) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);



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
<body><form method="POST" action="<?php echo $editFormAction; ?>"  name="employee" >
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         
	         <span>管理员：admin</span>
	         
         </td>
  		  
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright" >编号</th>
        <th align="center" valign="middle" class="borderright">姓名</th>
        <th align="center" valign="middle" class="borderright">性别</th>
        <th align="center" valign="middle" class="borderright">电话</th>
        <th align="center" valign="middle" class="borderright">地址</th>
		<th align="center" valign="middle" class="borderright">职位</th>
		
        <th align="center" valign="middle">操作</th>
      </tr>
     
      <?php do { ?>
        <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
          <td align="center" valign="middle" class="borderright borderbottom" ><input name="eid" type="text" value="<?php echo $row_Recordset1['eid']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom" ><input name="ename" type="text" value="<?php echo $row_Recordset1['ename']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom" ><input name="esex" type="text" value="<?php echo $row_Recordset1['esex']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom" ><input name="ephone" type="text" value="<?php echo $row_Recordset1['ephone']; ?>"></td>
		  <td align="center" valign="middle" class="borderright borderbottom" ><input  name="eaddr" type="text" value="<?php echo $row_Recordset1['eaddress']; ?>"></td>
          <td align="center" valign="middle" class="borderright borderbottom" ><input  name="ezhiwei" type="text" value="<?php echo $row_Recordset1['ezhiwei']; ?>"></td>
          
          <td align="center" valign="middle" class="borderbottom"><a href="employee2.php?Uid=<?php echo $row_Recordset1['eid'];?>" target="mainFrame"  class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="employee2.php?seid=<?php echo $row_Recordset1['eid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="fenye">总共<?php echo $totalRows_Recordset1 ?> 条数据，<?php 
	echo ($pageNum_Recordset1+1).'/'.($totalPages_Recordset1+1).'页';?> 
		
<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">首页</a>
	<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">上一页</a> <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">下一页</a> <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">末页</a> </td>
  </tr>
</table>
<input type="hidden" name="MM_update" value="employee">
</form>
</body>
</html>
<?php
if(isset($_GET['seid'])){
	
$sql = "DELETE FROM `employee` WHERE `eid`='".$_GET['seid']."'";
	mysql_query($sql);
	//alert("删除成功！");
	
}

//更新记录
if(isset($_GET['Uid'])){
	//$sql="UPDATE `employee` SET `ename`='".$post."', `esex`='男1', `ephone`='130682260191', `eaddress`='圣地亚哥1', `ezhiwei`='超级管理员1' WHERE `eid`='".$_GET['Uid']."'"; 
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
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
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "employee")) {
  $updateSQL = sprintf("UPDATE employee SET ename=%s, esex=%s, ephone=%s, eaddress=%s, ezhiwei=%s WHERE eid=%s",
                       GetSQLValueString($_POST['ename'], "text"),
                       GetSQLValueString($_POST['esex'], "text"),
                       GetSQLValueString($_POST['ephone'], "text"),
                       GetSQLValueString($_POST['eaddr'], "text"),
                       GetSQLValueString($_POST['ezhiwei'], "text"),
                       GetSQLValueString($_POST['eid'], "int"));

  mysql_select_db($database_movie, $movie);
  $Result1 = mysql_query($updateSQL, $movie) or die(mysql_error());

  $updateGoTo = "employee2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "employee")) {
  $updateSQL = sprintf("UPDATE employee SET ename=%s, esex=%s, ephone=%s, eaddress=%s, ezhiwei=%s WHERE eid=%s",
                       GetSQLValueString($_POST['ename'], "text"),
                       GetSQLValueString($_POST['esex'], "text"),
                       GetSQLValueString($_POST['ephone'], "text"),
                       GetSQLValueString($_POST['eaddr'], "text"),
                       GetSQLValueString($_POST['ezhiwei'], "text"),
                       GetSQLValueString($_POST['eid'], "int"));

  mysql_select_db($database_movie, $movie);
  $Result1 = mysql_query($updateSQL, $movie) or die(mysql_error());

  $updateGoTo = "index.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}	


}

mysql_free_result($Recordset1);
?>