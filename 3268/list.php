<?php require_once('Connections/movie.php'); ?>


<?php
session_start();
mysql_select_db($database_movie, $movie);
$query_Recordset1 = "SELECT * FROM dtable WHERE dtable.db = '".$_SESSION['MM_Username']."'";
//$query_Recordset1 = "SELECT * FROM dtable WHERE dtable.db ='admin'";
$Recordset1 = mysql_query($query_Recordset1, $movie) or die(mysql_error());

$totalRows_Recordset1 = mysql_num_rows($Recordset1);

//error_reporting(0);//屏蔽错误


?><!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/kf.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<link  href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	
	
	
	<?php
@session_start();


if(isset ($_GET["Tid"]))
{ $del = "DELETE FROM dtable where did='".$_GET["Tid"]."'";
 
 $dl = "SELECT zt FROM dtable WHERE did='".$_GET["Tid"]."'";
 //$dl = "SELECT zt FROM dtable WHERE did ='71'";
$dl1 = mysql_query($dl, $movie) or die(mysql_error());
 $zt = mysql_fetch_assoc($dl1);
 
 //echo $zt['zt'];

 if($zt['zt']=='退款中')
	{
 echo "<script>alert('正在退款中，删除失败！')</script>";}
 
else{mysql_query($del);}
}

	
if(isset ($_GET["Tit"]))
{ $update = "UPDATE `dtable` SET `zt`='退款中' WHERE did='".$_GET["Tit"]."'";
mysql_query($update);
 echo "<script>alert('退款将在24小时内退回！')</script>";
}	?>
</head>

<body>
<?php include("/header.php");?>

<div class="listnn"  style="padding-left: 50px;padding-right: 50px;height: 330px">
<h1 style="font-size: 18px;font-weight: bold;">订单列表</h1>

<table class="table table-hover">
  
  <thead><tr>
    <th>订单编号</th>
    <th>影片</th>
	<th>日期</th>
    <th>时间</th>
    <th>座位</th>
    <th>订单金额</th>
	<th>状态</th>  
    
	<th>操作</th>
   </tr></thead>
  
   
   <?php while($row_Recordset1 = mysql_fetch_assoc($Recordset1)) {?>
   <tr>
   <td >
  
     
    <?php echo $row_Recordset1['did']; ?></a>
    </td>
    <td >
     <?php echo $row_Recordset1['mname']; ?></a>
    </td>
<td > <?php echo $row_Recordset1['ddate']; ?></td>
    <td > <?php echo $row_Recordset1['dtime']; ?></td>
    <td >
     <?php echo $row_Recordset1['dseat']; ?>
     
    </td>
    <td >
     <span><b><?php echo "￥".$row_Recordset1['dprice']; ?></b></span>
    </td>
<td >
     <span><b><?php echo $row_Recordset1['zt']; ?></b></span>
    </td>
    
	<td >
     <span><a href="list.php?Tit=<?php echo $row_Recordset1['did'];?>">退票</a></span>|<a href="list.php?Tid=<?php echo $row_Recordset1['did'];?>">删除</a></span>
    </td>
	
   
   </tr><?php }?>
</table>
</div>
  <!--//帮助熊-->
			<div class="bear"><img src="images/robot.gif" width="102" height="181"></div>
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

	<!-- 客服部分 -->
<div style="right:-230px;" class="contactusdiyou">
	<div class="hoverbtn">
		<span>联</span><span>系</span><span>我</span><span>们</span>
		<img class="hoverimg" src="images/hoverbtnbg.gif" height="9" width="13">
	</div>
	<div class="conter">
		<div class="con1"> 
			<dl class="fn_cle">
				<dt><img src="images/tel.png" height="31" width="31"></dt>
				<dd class="f1">咨询热线：</dd>
				<dd class="f2"><span class="ph_num">188-8888-8888</span></dd>
			</dl>
		</div> 
		<div class="blank0"></div>
		<div class="qqcall"> 
			<dl class="fn_cle">
				<dt><img src="images/zxkfqq.png" height="31" width="31"></dt>
				<dd class="f1 f_s14">在线客服：</dd>
				<dd class="f2 kefuQQ">
					<span>客服一</span>
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=88888888&amp;site=qq&amp;menu=yes"></a>
					<span>客服二</span>
					<a target="_blank" href="#"></a>
				</dd>
			</dl>
			<div class="blank0"></div>           
		</div> 
		<div class="blank0"></div>
		<div class="weixincall"> 
			<dl class="fn_cle">
				<dt><img src="images/weixin.png" height="31" width="31"></dt>
				<dd class="f1">官方微信站：</dd>
				<dd class="f3"><img src="images/wechat_code.png" height="73" width="73"></dd>
			</dl>
		</div> 
		<div class="blank0"></div>
		<div class="dytimer">
			<span style="font-weight: bold;">公司官网：</span>
			<span><a href="#">www.wxs'web.com</a></span>
		</div>
	</div>
</div>

<div class="diyoumask" style="height: 2000px;" ></div>

<script type="text/javascript">
$(function() {
	$(".contactusdiyou").hover(function() {
		$(".hoverimg").attr("src","images/hoverbtnbg1.gif");
		$('.diyoumask').fadeIn();
		$('.contactusdiyou').animate({right:'0'},300); 
	}, function() {
		$(".hoverimg").attr("src","images/hoverbtnbg.gif");
		$('.contactusdiyou').animate({right:'-230px'},300,function(){});
		$('.diyoumask').fadeOut();
	});
});
$(".bear").click(function(){alert("\t前排出售瓜子可乐！\t\n有问题请点击右边咨询客服，有什么建议和想法都可以点击上面留言给我们哦！祝你观影愉快！")});	
</script>

</body>
</html><?php
mysql_free_result($Recordset1);
?>
