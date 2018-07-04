
<?php require_once('Connections/movie.php'); 


error_reporting(0);
mysql_select_db($database_movie, $movie);
$query_m1 = "SELECT movie.mname,movie.mid, movie.spicture, movie.mprice FROM movie";
$m1 = mysql_query($query_m1, $movie) or die(mysql_error());

$totalRows_m1 = mysql_num_rows($m1);

?><!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<link href="css/kf.css" rel="stylesheet">
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	
	



</head>

<body><?php include("/header.php")?>
	<div class="header">
	  <div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
						  
						 <div class="clear"></div>
				  </div>
						  
			 <div class="clear"></div>
  		</div>     
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
						   <ul>
						  	   <h3>电影类型</h3>
							      <li><a href="#">全部</a></li>

							      
							      <li><a href="#">国语</a><ul>
								  <li><a href="http://www.baidu.com" >绣春刀</a></li>                   
 <li><a href="#" >战狼2</a></li>                   
 <li><a href="#" >英雄本色</a></li>                  
 
 </ul>  </li>
							      
								  
								  <li><a href="#">英语</a><ul><li><a href="#" >End Game</a></li>                   
 <li><a href="#" >AST</a></li>                   
  </ul></li>
		
							       <li><a href="#">儿童</a><ul><li><a href="buyticket.php" >烟火</a></li>                   
 <li><a href="#" >少女终末旅行</a></li>                   
  </ul></li>
								   
							       <li><a href="#">动物</a>
								   
								  <ul><li><a href=buyticket - 02.php"" >帕丁顿熊2</a></li>                   
 <li><a href="#" >小黄人</a></li>                   
 </ul> </li>
							       <li><a href="#">游戏</a></li>
					  	  </ul>
						</div>					
	  	          </div>
						    <div class="header_bottom_right">					 
						 	    <!------ Slider ------------>
								  <div class="slider">
							      	<div class="slider-wrapper theme-default">
							            <div id="slider" class="nivoSlider">
							                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
							                <img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
							                <img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
							                <img src="images/4.jpg" data-thumb="images/4.jpg" alt="" />
							                 <img src="images/5.jpg" data-thumb="images/5.jpg" alt="" />
											 <img src="images/5.jpg" data-thumb="images/6.jpg" alt="" />
							            </div>
							        </div>
						   		</div>
						<!------End Slider ------------>
			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>最新上映</h3>
    		</div>
    	</div>
	      <div class="section group">
<!--
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><?php //echo  "<img src='".$row_m1['spicture']."' alt='' />"?></a>
					 <h2><a href="preview.html"><?php //echo $row_m1['mname']; ?></a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥<?php //echo $row_m1['mprice']  ?></span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="buyticket - 02.php?mid=1">购票</a></h4>
				      </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><?php //echo  "<img src='".$row_m2['spicture']."' alt='' />"?></a>
					 <h2><a href="preview.html"><?php //echo $row_m2['mname']; ?></a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥<?php //echo $row_m2['mprice']; ?></span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="buyticket - 02.php?mid=2">购票</a></h4>
				      </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
-->
				
			<?php while($row_m1 = mysql_fetch_assoc($m1)) {
	
			  
			echo "<div class='grid_1_of_5 images_1_of_5'>
					<a href='preview.html'><img src='".$row_m1['spicture']."' alt='' /></a>
					 <h2><a href='preview.html'>".$row_m1['mname']."</a></h2>
					<div class='price-details'>
				       <div class='price-number'>
							<p><span class='rupees'>￥".$row_m1['mprice']."</span></p>
				      </div>
					       		<div class='add-cart'>								
									<h4><a href='buyticket - 02.php?mid=".$row_m1['mid']."'>购票</a></h4>
				      </div>
							 <div class='clear'></div>
					</div>
				    
			</div>";}?>
				
				
				
				
		</div>
		  
		  
		  <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/avatar_movie.jpg" alt="" /></a>
					 <h2><a href="preview.html">Avatar</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥32</span></p>
				       </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html?mid=4">购票</a></h4>
				       </div>
							 <div class="clear"></div>
					</div>
				</div>
			  <div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/avatar_movie.jpg" alt="" /></a>
					 <h2><a href="preview.html">Avatar</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥32</span></p>
				       </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html?mid=4">购票</a></h4>
				       </div>
							 <div class="clear"></div>
					</div>
				</div>
			  <div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/avatar_movie.jpg" alt="" /></a>
					 <h2><a href="preview.html">Avatar</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥32</span></p>
				       </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html?mid=4">购票</a></h4>
				       </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/avatar_movie.jpg" alt="" /></a>
					 <h2><a href="preview.html">Avatar</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥32</span></p>
				       </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html?mid=4">购票</a></h4>
				       </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/black-swan.jpg" alt="" /></a>
					 <h2><a href="preview.html">Black Swan</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥35</span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">购票</a></h4>
				      </div>
							 <div class="clear"></div>
					</div>				     
				</div>
		</div>
		  
			<div class="content_bottom">
    		<div class="heading">
    		<h3>即将上映</h3>
    		</div>
    	  </div>
			<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="images/beauty_and_the_beast.jpg" alt="" /></a>
					 <h2><a href="preview.html">Beauty and the beast</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">12月15日上映</span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="#">想看</a></h4>
				      </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="images/Eclipse.jpg" alt="" /></a>
					 <h2><a href="preview.html">Eclipse</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">12月15日上映</span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="#">想看</a></h4>
				      </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/Coraline.jpg" alt="" /></a>
					 <h2><a href="preview.html">Coraline</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">12月15日上映</span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="#">想看</a></h4>
				      </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/Unstoppable.jpg" alt="" /></a>
					 <h2><a href="preview.html">正义联盟</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">12月15日上映</span></p>
				       </div>
					       		<div class="add-cart">								
									<h4><a href="#">想看</a></h4>
				       </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/Priest.jpg" alt="" /></a>
					 <h2><a href="preview.html">英雄本色</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">12月16日上映</span></p>
				      </div>
					       		<div class="add-cart">								
									<h4><a href="#">想看</a></h4>
				      </div>
							 <div class="clear"></div>
				  </div>				     
				</div>
			</div>
      </div>
  </div>
</div>
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
	<div class="searchbtn"><input id="searchtext" type="search"  placeholder="搜索"><button class="sok"></button></div>
	
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

<!--<div class="diyoumask" style="height: 2000px;" ></div>-->

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
</script>
	
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
		$(".bear").click(function(){alert("\t前排出售瓜子可乐！\t\n有问题请点击右边咨询客服，有什么建议和想法都可以点击上面留言给我们哦！祝你观影愉快！")});
		
		$(".sok").click(function(){
				var mname = $("#searchtext").val();
			
			window.location.href="search.php?nametext="+mname;
			
		})
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html><?php
mysql_free_result($m1);

mysql_free_result($m2);

mysql_free_result($m3);
?>