<?php require_once('../Connections/test.php'); ?>
<?php
mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT * FROM dtable";
$Recordset1 = mysql_query($query_Recordset1, $test) or die(mysql_error());

$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	
	
	
	<?php
session_start();

if(!$_SESSION['MM_Username']){
							
/*echo "<script>alert('你还未登录，赶紧登录吧！');location.href='login.php';</script>";*/
}

if(isset ($_GET[Tid]))
{ $del = "DELETE FROM dtable where did='".$_GET[Tid]."'";
mysql_query($del);
}?>
</head>

<body>

<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.html">首页</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="contact.html">联系我们</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="%"><?php echo "欢迎".$_SESSION['MM_Username']?></a></li>
							<li><a href="index.html">注销</a></li>
							
							
							<li><a href="#">我的帐户</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
<div class="wrap">
  <div class="page-title" style="font-size:23px; color:#99CCFF; padding-left: 100px;" >
    <span class="modular fl"><i class="order"></i><em>订单列表</em></span>  </div>
  <hr>
<div align="center">
  <table width="1000px"  class="list-style Interlaced"  cellspacing="5px" cellpadding="10px"  border="5px"  >
   <tr  style="background-color:#66CCFF">
    <th>订单编号</th>
    <th>影片</th>
    <th>下单时间</th>
    <th>座位</th>
    <th>订单金额</th>
    
	<th>操作</th>
    
   </tr>
   
   <?php while($row_Recordset1 = mysql_fetch_assoc($Recordset1)) {?>
   <tr>
   <td height="20px" width="80px">
   
     <input type="checkbox"/>
     <a href="order_detail.html"><?php echo $row_Recordset1['did']; ?></a>
    </td>
    <td height="52" width="100px" align="center">
     <a href="order_detail.html"><?php echo $row_Recordset1['mname']; ?></a>
    </td>
    <td class="center"  width="150px" >
     
     <span class="block"><?php echo $row_Recordset1['dtime']; ?></span>    </td>
    <td width="400px" align="center">
     <span class="block"><?php echo $row_Recordset1['dseat']; ?></span>
     
    </td>
    <td class="center" align="center">
     <span><b><?php echo "￥".$row_Recordset1['dprice']; ?></b></span>
    </td>
    
	<td class="center" align="center">
     <span><a href="list.php?Tid=<?php echo $row_Recordset1['did'];?>">退票|删除</a></span>
    </td>
	
   
   </tr><?php }?>
</table>
</div>
  
  <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>相关信息</h4>
						<ul>
						<li><a href="#">关于</a></li>
						<li><a href="#">客服</a></li>

						<li><a href="contact.html">联系我们</a></li>
						</ul>
		   </div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>购买优势</h4>
						<ul>
						<li><a href="#">关于</a></li>
						<li><a href="#">购票流程</a></li>
						<li><a href="#">如何取票</a></li>
						<li><a href="#">相关服务</a></li>
						
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>一些服务</h4>
						<ul>
							<li><a href="contact.html">登录</a></li>
							<li><a href="index.html">立即注册</a></li>
							<li><a href="#">添加到收藏</a></li>
							
							<li><a href="contact.html">帮助</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>投诉电话</h4>
						<ul>
							<li><span>+0752-123-456789</span></li>
							<li><span>+86-123-000000</span></li>
						</ul>
					
				</div>
		</div>
			 <div class="copy_right">
				<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="#">wxs'web</a></p>
		   </div>			
    </div>
</div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html><?php
mysql_free_result($Recordset1);
?>
