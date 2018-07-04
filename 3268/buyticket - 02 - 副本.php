<?php require_once('Connections/movie.php'); ?>


<?php
mysql_select_db($database_movie, $movie);
//$query_minformation = "SELECT * FROM movie where mid='".$_GET['mid']."'";
$query_minformation = "SELECT * FROM movie where mid=2";
$minformation = mysql_query($query_minformation, $movie) or die(mysql_error());
$row_minformation = mysql_fetch_assoc($minformation);
$totalRows_minformation = mysql_num_rows($minformation);

mysql_select_db($database_movie, $movie);
$query_playlist = "SELECT movie.mprice, playlist.pid, playlist.pdata, playlist.pmname, playlist.ptime, movie.mlanguage FROM movie, playlist WHERE movie.mid = playlist.mid AND playlist.mid='1' ORDER BY playlist.pmname";
$playlist = mysql_query($query_playlist, $movie) or die(mysql_error());

$totalRows_playlist = mysql_num_rows($playlist);

mysql_select_db($database_movie, $movie);
$query_stime = "SELECT distinct playlist.pdata FROM playlist WHERE playlist.mid='1' ";
$stime = mysql_query($query_stime, $movie) or die(mysql_error());
$row_stime = mysql_fetch_assoc($stime);
$totalRows_stime = mysql_num_rows($stime);
?><!DOCTYPE HTML><head>
<title>buyticket</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>


<link href="js/swiper.min.css" rel="stylesheet" type="text/css"/>
<script src="js/swiper.min.js" type="text/javascript"></script>


<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    

	</script>
	
	<?php
session_start();
/*if(!$_SESSION['MM_Username']){
							
echo "<script>alert('你还未登录，赶紧登录吧！');location.href='login.php';</script>";
}*/
// store session data
//$_SESSION['time']=""

$_SESSION['t1']="11:00";
$_SESSION['t2']="11:15";
?>

<!-- // 评价区CSS -->
	
<style>
	#audio_btn{
		position:absolute;
		top:0px;
		left:0px;
		z-index:999999;
	}
	#reply-write{
		display: block;
		width: 100%;
		border: none;
		font-size: 1em;
		line-height: 20px;
		margin: 0;
		padding: 0.3em;
		resize: none;
		font-family: inherit;
		color: inherit;
		box-sizing: border-box;
		border:1px solid #FE0002;
		border-radius:4px 0 0 4px;
	}
	.send-btn {
		float: left;
	}
	#conts p{
		display:inline-block;
		padding:3px 0px 3px 0px;
		margin:0px;
	}

	.dm .d_screen 
	.d_del{width:38px;height:38px;background:#600;display:block;text-align:center;line-height:38px;
		   text-decoration:none;font-size:20px;color:#fff;border-radius:19px;border:1px solid #fff;position:absolute;top:10px;right:20px;z-index:3;display:none;}
	.dm .d_screen .d_del:hover{background:#f00;}
	.dm .d_screen .d_mask{width:255px;height:200px;position:absolute;top:0;left:0;opacity:0.5;
						  filter:alpha(opacity=50) ;z-index:1;}
	.dm .d_screen .d_show{position: relative;z-index:2;}
	.dm .d_screen .d_show div{color:#fff; background:rgba(1,1,1,.4);border-radius:5px; margin:5px; }
	#showmeg p{
		font-weight:bold;
		text-align:center;
	}
	.d_show div{
		width:230px;font-size:12px;color:#fff; line-height:20px;
	}
	.d_show img{width:20px; height:20px;border-radius:50%; padding:2px;}
	.d_show p{
		text-overflow:ellipsis	;
	}
#audio_btn{
		position:absolute;
		top:0px;
		left:0px;
		z-index:999999;
	}
.NYwishes{width:255px; height:300px; position:fixed; bottom:0; right:0; background:rgba(0,0,0,.6);}
.NYwishes h2{ margin:5px 0; font-family:"微软雅黑"; font-size:18px; text-align:center; color:#fff;}
.NYwishes .swiper-container{ height:250px;}
#conts{margin:0 auto ;padding-left:2%;padding-right:2%;height:280px;}
.NYwishes .send{position: absolute;left:0%;bottom:0px;height:40px;width:100%;z-index:99999;}
.NYwishes .send .input{width:155px;;float:left;margin-left:5%;}
.NYwishes .send-btn a{background-color:#FE0000;color:#fff;width:80px;height:30px;display: inline-block;text-align: center;line-height:30px;cursor:pointer; border-radius:0 4px 4px 0;}


</style>
	
	
</head>
<body>

	<div class="header">
	<div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.html">首页</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="/3248/Admin/liuyan.php">联系我们</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="%"><?php echo "欢迎".$_SESSION['MM_Username']?></a></li>
							<li><a href="index.html">注销</a></li>
							<li><a href="preview.php">个人中心</a></li>
							
							<li><a href="#">我的订单</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
  	  </div>
		 
</div>  

<!-- //影片大图 -->
			<div style="background-color:#666666;padding-top:inherit" ><center>
			  <?php echo "<img src='".$row_minformation['mpicture']."' />"; ?>
		    <center>
</div>
			
			
			
		    <div  style="background: #FCFCFC;">
			<div name="showpost" style="padding-top:20px; font-size:18px" ><table width="100%" border="0" cellspacing="10" cellpadding="0" id="main-tab1" ><h2 style="font-size:26px; color:#333"><b><center><?php echo $row_minformation['mname']; ?></center></b></h2>
			<tr><td width="13%"><span>
			  <h1><strong><center>时长：<?php echo $row_minformation['mlong']; ?>分钟</center></strong></h1></span></td><td width="14%"><span>
			  <h1>导演：<?php echo $row_minformation['mdirector']; ?></h1>
			  </span></td><td width="18%"><span>
			  <h1><strong>类型：<?php echo $row_minformation['mchar']; ?></strong></h1></span></td><td width="55%"><span>
			  <h1><strong>主演：<?php echo $row_minformation['mperformer']; ?></strong></h1>
			  </span></td></tr> </table></div>

<!-- //购票选择 -->			
<!-- //选择时间 -->  
<form name="gt" method="post" action="seat.php?m=帕丁顿熊2" >
<div  style="padding-left:100px; font-size:18px; background-color:#CCCCFF ">
观看时间
      <input name="tt" type="radio"  value="2018-01-30">
      2018年1月30日 </label>
  
      <input type="radio" name="tt"  value="2018-01-31">
  2018年1月31日</label></div>

<!-- //场次选择	 --> 
<div>
			
			
			<tr>
    <td align="left" valign="top">
    
    <table width="86%" border="0" cellspacing="0" cellpadding="0" id="main-tab" style="font-size:20px">
      <tr>
        <th width="16%" align="center" valign="middle" class="borderright" >放映时间</th>
		
        <th width="16%" align="center" valign="middle" class="borderright" >语言版本</th>
        <th width="16%" align="center" valign="middle" class="borderright">放映厅</th>
        
		<th width="9%" align="center" valign="middle" class="borderright" width:80px">售价</th>
        
        <th width="43%" align="center" valign="middle">选座购票</th>
      </tr>
      <?php while($row_playlist = mysql_fetch_assoc($playlist)){?>
	 <tr onMouseOut="this.style.backgroundColor='#FCFCFC'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"> <?php echo $row_playlist['ptime']; ?></td>
        
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_playlist['mlanguage']; ?></td>
		<td align="center" valign="middle" class="borderright borderbottom"><?php echo $row_playlist['pid']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom">￥<?php echo $row_playlist['mprice']; ?></td>
        
		
        <td align="center" valign="middle" class="borderbottom"><input  type="submit" value="购买"></td>
      </tr>
      <?php }?>
      

    </table></td>
    </tr>
  </div>	
			
</th></form>			
	
		
	
  <!-- // 底部-->
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



	
<script>
</script>

<div style="text-align:center;">



    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html><?php
mysql_free_result($stime);

mysql_free_result($playlist);

mysql_free_result($minformation);

mysql_free_result($playlist);
?>
>