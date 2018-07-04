<?php require_once('../Connections/movie.php'); ?>

<?php
mysql_select_db($database_movie, $movie);
$query_Recordset1 = "SELECT * FROM `user` WHERE `user`.userid='".$_GET['id']."'";
$Recordset1 = mysql_query($query_Recordset1, $movie) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_movie, $movie);
$query_Recordset2 = "SELECT vip.vname, vip.vcount FROM vip WHERE vip.vid='".$_GET['vid']."'";
$Recordset2 = mysql_query($query_Recordset2, $movie) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);


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

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM user WHERE userid=%s",
                       GetSQLValueString($_GET['id'], "int"));

  mysql_select_db($database_movie, $movie);
  $Result1 = mysql_query($deleteSQL, $movie) or die(mysql_error());

  $deleteGoTo = "main_list.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>

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
<!--main_top-->
<form>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  
  
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">帐号</th>
        <th align="center" valign="middle" class="borderright">密码</th>
        <th align="center" valign="middle" class="borderright">电话</th>
        <th align="center" valign="middle" class="borderright">权限</th>
		<th align="center" valign="middle" class="borderright">等级</th>
		<th align="center" valign="middle" class="borderright">优惠</th>
        
      </tr>
     
      
        <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['userid']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['username']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['userpad']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['userphone']; ?></td>
		  <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['other']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset2['vname']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset2['vcount']; ?></td>
         
        </tr>
        
    </table>
    <tr></tr>
	

                                <div   align="center" style="position:absolute; left: 355px; top: 106px; width: 581px; height: 150px;">   
                                  <h1  align="center">你确定要删除此条记录</h1>
<input name="x" type="submit" value="确定" class="text-but"  style=" position:absolute; left: 97px; top: 93px; width: 125px; height: 50px; background-color:#0099FF">
        <input name="c" type="reset"  value="返回"  class="text-but" style="position:absolute; width: 125px; height: 50px; left: 322px; top: 94px;background-color:#0099FF" >
</div>
</form>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>