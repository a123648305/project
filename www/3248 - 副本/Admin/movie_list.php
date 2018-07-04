<?php require_once('../../Connections/test.php'); ?>
<?php
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
FROM movie";
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
	        
	         <span>管理员:admin</span>
	         
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">新增电影</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th width="9%" align="center" valign="middle" class="borderright">编号</th>
        <th width="12%" align="center" valign="middle" class="borderright">电影名</th>
        <th width="13%" align="center" valign="middle" class="borderright">导演</th>
        <th width="13%" align="center" valign="middle" class="borderright">主演</th>
        <th width="11%" align="center" valign="middle" class="borderright">发行地</th>
		<th width="12%" align="center" valign="middle" class="borderright">上映时间</th>
		<th width="10%" align="center" valign="middle" class="borderright">电影时长</th>
		<th width="11%" align="center" valign="middle" class="borderright">电影类型</th>
        <th width="9%" align="center" valign="middle">操作</th>
      </tr>
     
      <?php do { ?>
        <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mid']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mname']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mdirector']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mperformer']; ?></td>
		  <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mstudio']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mpalytime']; ?></td>
          <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mlong']; ?></td>
		  <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_Recordset1['mchar']; ?></td>
          <td align="center" valign="middle" class="borderbottom"><a href="mbianji.php?id=<?php echo $row_Recordset1['mid'];?>" target="mainFrame"  class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="msc.php?id=<?php echo $row_Recordset1['mid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="fenye">总共<?php echo $totalRows_Recordset1 ?> 条数据 /1 页&nbsp;&nbsp;<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">首页</a>&nbsp;&nbsp;<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">上一页</a>&nbsp;&nbsp;<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">下一页</a>&nbsp;&nbsp;<a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">尾页</a></td>
  </tr>
</table>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>