<!DOCTYPE HTML><head>
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

$_SESSION['t1']="10:00";
$_SESSION['t2']="10:15";
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
						<li><a href="contact.html">联系我们</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="%"><?php echo "欢迎".$_SESSION['MM_Username']?></a></li>
							<li><a href="index.html">注销</a></li>
							<li><a href="preview.php">Delivery</a></li>
							
							<li><a href="#">我的帐户</a></li>
						</ul>					</div>
				<div class="clear"></div>
			</div>
  	  </div>
		 
</div>  

<!-- //影片大图 -->
			<div style="background-color:#666666;padding-top:inherit" ><center>
			  <img src="images/7.jpg"  />
		    <center>
			</div>
			
			
			
		    <div  style="background: #FCFCFC;">
			<div name="showpost" style=" font-size:16px" ><table width="100%" border="0" cellspacing="10" cellpadding="0" id="main-tab1" ><h2 style="font-size:26px; color:#333"><b><center>奇门遁甲</center></b></h2>
			<tr><td width="13%"><span>
			  <h1><strong><center>时长：113分钟</center></strong></h1></span></td><td width="14%"><span>
			  <h1>导演：袁和平</h1>
			  </span></td><td width="18%"><span>
			  <h1><strong>类型：动作/奇幻</strong></h1></span></td><td width="55%"><span>
			  <h1><strong>主演：大鹏 /倪妮 /李治廷 /周冬雨 /伍佰 /柳岩 </strong></h1>
			  </span></td></tr> </table></div>

<!-- //购票选择 -->			
<!-- //选择时间 -->  
<form name="gt" method="post" action="seat.php?m=奇门遁甲" >
<div  style="padding-left:100px; font-size:18px; ">
观看时间
      <input name="tt" type="radio"  value="12月16日  ">
      2017年12月16日 </label>
  
      <input type="radio" name="tt"  value="12月17日 ">
  2017年12月16日</label></div>

<!-- //场次选择	 --> 
<div>
			
			
			<tr>
    <td align="left" valign="top">
    
    <table width="86%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th width="16%" align="center" valign="middle" class="borderright" >放映时间</th>
		
        <th width="16%" align="center" valign="middle" class="borderright" >语言版本</th>
        <th width="16%" align="center" valign="middle" class="borderright">放映厅</th>
        
		<th width="9%" align="center" valign="middle" class="borderright" width:80px">售价</th>
        
        <th width="43%" align="center" valign="middle">选座购票</th>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#FCFCFC'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"> <?php echo $_SESSION['t1'] ?></td>
        
        <td align="center" valign="middle" class="borderright borderbottom">国语</td>
		<td align="center" valign="middle" class="borderright borderbottom">1</td>
        <td align="center" valign="middle" class="borderright borderbottom">35</td>
        
		
        <td align="center" valign="middle" class="borderbottom" "><input  type="submit" value="购买"> </td>
      </tr>
	  </th>
	 <tr onMouseOut="this.style.backgroundColor='#FCFCFC'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"> <?php echo $_SESSION['t1'] ?></td>
        
        <td align="center" valign="middle" class="borderright borderbottom">国语</td>
		<td align="center" valign="middle" class="borderright borderbottom">2</td>
        <td align="center" valign="middle" class="borderright borderbottom">35</td>
        
		
        <td align="center" valign="middle" class="borderbottom"><input  type="submit" value="购买"></td>
      </tr>
      
      

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


<!-- //评论区 -->
<div class="NYwishes">
<h2>最新影评</h2>
<div class="swiper-container">
	<div  id="conts"> 
		<div class="dm">
			<!--d_screen start-->
			<div class="d_screen">
				<div class="d_mask"></div>
				<div class="d_show">
					<div></div>
                    <div></div>
				</div>
			</div>
		</div>
	</div> 
</div> 
<div class="send">
			<div class="input">
				<input id="reply-write" name="content" type="text" value="" placeholder="说出你的评价和期待" >
			</div>
			<div class="send-btn" >
				<a onClick="send_reply2()">发送</a>
			</div>
  </div>
</div>		
<script>

function send_reply2() {
var content = $("#reply-write").val();
if ($.trim(content) == "") {
	alert("亲，请说出你的评价和期待！");
	return false;
}
	var text=$("#reply-write").val();
	input(text)
	$("#reply-write").val("");
   	init_screen();  
   	if($(".d_show").height()>180){
		$($(".d_show").children("div").get(0)).toggle(1000);
		$($(".d_show").children("div").get(0)).remove();
	}
}
$(function(){
	var date=[{'id':1,'val':'这片我觉得可以'},{'id':2,'val':'我觉得不行'},{'id':3,'val':'很好看的一部片'},{'id':4,'val':'我觉得很OK'},{'id':4,'val':'真的不错，推荐大家去看！！！'},{'id':4,'val':'其实一般般'},{'id':4,'val':'王小帅很喜欢看'},{'id':4,'val':'很赞'},{'id':4,'val':'666666666我为这片打Call'}];
	var i=0;
	setInterval(function(){
		if($(".d_show").height()<100){
			if(i<date.length){
				input(date[i].val)
				i++;
			}else{
				i=0	
				input(date[i].val)
				i++;
			}
		}else{
			init_screen();
			$($(".d_show").children("div").get(0)).remove();
			if(i<date.length){
				input(date[i].val)
				i++;
			}else{
				i=0	
				input(date[i].val)
				i++;
			}
		}
	},1000);
	
	$("#reply-write").keyup(function(ev){
		var ev=ev||event;
		if(ev.keyCode==13){
			send_reply2();
		}
	});
})
function init_screen(){
	$(".d_show").find("div").show().each(function () {
		setInterval(function(){
		 $($(".d_show").children("div").get(0)).toggle(1000);
		},1000);
	});
}	
function input(val){
	var div=$("<div><img src='images/bg.png'/>"+val+"</div>");
	$(".d_show").append(div.fadeIn(1000));
}
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
</html>

