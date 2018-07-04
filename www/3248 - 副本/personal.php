<?php virtual('/Connections/test.php'); ?>
<?php
session_start();

mysql_select_db($database_test, $test);
$query_Recordset1 = "SELECT vip.vname, vip.vcount, `user`.username, `user`.userpad, `user`.userphone FROM `user`, vip WHERE `user`.username='".$_SESSION['MM_Username']."' AND `user`.other = vip.vid";
$Recordset1 = mysql_query($query_Recordset1, $test) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
if (isset($_POST['提交']))
{
//执行代码
$query_Recordset1 = "UPDATE user SET  userpad='".$_POST[password]."', userphone='".$_POST[phone]."' WHERE `user`.username='".$_POST[username]."'";
$Reco1 = mysql_query($query_Recordset1, $test) or die(mysql_error());
if($Reco1)
{echo "<script>alert('保存成功！');location.href='personal.php';</script>";}
} 
?>
<!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/other.css" rel="stylesheet" type="text/css" media="all"/>

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


if(!$_SESSION['MM_Username']){
							
echo "<script>alert('你还未登录，赶紧登录吧！');location.href='login.php';</script>";
}

?>
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
  <hr><div class="lager" style="height:300px; margin-left:100px;">
  <div class="photo">头像
  <div class="file"><input type="file"></div></div>
  <div class="information"  >
    <h1>   个人信息</h1>
    <hr><form action="#" name="form1" method="POST">
  <table width="100%;" height="209" border="0";>
    
  
  <tr><td>用户名：<input  name="username" type="text"  value="<?php echo $row_Recordset1['username']; ?>" readonly="true">
  *用户名不可修改，用于登录时的许可</td>
  </tr>
  <tr>
    <td> 密  码：
      <input name="password" type="text" value="<?php echo $row_Recordset1['userpad']; ?>">
  *用于登入时的密码</td>
  </tr>
  <td>电话/手机:<input name="phone" type="text" value="<?php echo $row_Recordset1['userphone']; ?>">*用户取票及其他服务的联系方式</td>
  <tr><td height="29">会员等级：
      <input type="text" readonly="" border="hidden" value="<?php echo $row_Recordset1['vname']."享".$row_Recordset1['vcount']."优惠" ?>">*不同的等级对应不同的优惠服务</td></tr>
  <tr><td align="center"><input name="提交" type="submit" value="保存"></td></tr>
  </table></form>
  </div></div>
   
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
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
</div>
</body>
</html><?php
mysql_free_result($Recordset1);
?>
