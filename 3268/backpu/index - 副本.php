<!DOCTYPE HTML>
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
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
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
							<li><a href="zc.html">注册</a></li>
							<li><a href="login.html">登录</a></li>
							<li><a href="preview.html">Delivery</a></li>
							
							<li><a href="#">我的帐户</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
						  <div class="search_box">
					     		<form>
					     			<input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '查找相关电影';}"><input type="submit" value="">
					     		</form>
				     	  </div>
						 <div class="clear"></div>
				  </div>
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>
			 <div class="clear"></div>
  		</div>     
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
						   <ul>
						  	   <h3>电影类型</h3>
							      <li><a href="#">全部</a></li>

							      
							      <li><a href="#">国语</a><ul>
								  <li><a href="http://www.shangkeit.com" >绣春刀</a></li>                   
 <li><a href="#" >战狼2</a></li>                   
 <li><a href="#" >英雄本色</a></li>                  
 
 </ul>  </li>
							      
								  
								  <li><a href="#">英语</a><ul><li><a href="http://www.shangkeit.com" >End Game</a></li>                   
 <li><a href="#" >AST</a></li>                   
  </ul></li>
		
							       <li><a href="#">儿童</a><ul><li><a href="http://www.shangkeit.com" >烟火</a></li>                   
 <li><a href="#" >少女终末旅行</a></li>                   
  </ul></li>
								   
							       <li><a href="#">动物</a>
								   
								  <ul><li><a href="http://www.shangkeit.com" >帕丁顿熊2</a></li>                   
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
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="images/end-game.jpg" alt="" /></a>
					 <h2><a href="preview.html">End Game</a></h2>
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
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="images/Sorority_Wars.jpg" alt="" /></a>
					 <h2><a href="preview.html">帕丁顿熊2</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥38</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">购票</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/New-Moon-The-Score-cover-twilight.jpg" alt="" /></a>
					 <h2><a href="preview.html">烟花</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">￥40</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">购票</a></h4>
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
									<h4><a href="preview.html">购票</a></h4>
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
									<h4><a href="preview.html">购票</a></h4>
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
									<h4><a href="preview.html">购票</a></h4>
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
									<h4><a href="preview.html">购票</a></h4>
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
									<h4><a href="preview.html">购票</a></h4>
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
									<h4><a href="preview.html">购票</a></h4>
							     </div>
							 <div class="clear"></div>
					 </div>				     
				</div>
			</div>
       </div>
  </div>
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
</html>