<?php require_once('Connections/movie.php'); ?>


<?php
error_reporting(0);
//查找电影信息
mysql_select_db($database_movie, $movie);
$query_minformation = "SELECT * FROM movie where mid='".$_GET['mid']."'";
//$query_minformation = "SELECT * FROM movie where mid=4";
$minformation = mysql_query($query_minformation, $movie) or die(mysql_error());
$row_minformation = mysql_fetch_assoc($minformation);
$totalRows_minformation = mysql_num_rows($minformation);
//查找放映信息
mysql_select_db($database_movie, $movie);
$query_playlist = "SELECT movie.mprice, playlist.pid, playlist.pdata, playlist.pmname, playlist.ptime, movie.mlanguage FROM movie, playlist WHERE movie.mname = playlist.pmname AND movie.mid='1' ORDER BY playlist.pmname";
$playlist = mysql_query($query_playlist, $movie) or die(mysql_error());

$totalRows_playlist = mysql_num_rows($playlist);
//查找放映日期
//mysql_select_db($database_movie, $movie);
//$query_stime = "SELECT distinct playlist.pdata FROM playlist WHERE playlist.mid='1' ";
//$stime = mysql_query($query_stime, $movie) or die(mysql_error());
//$ss = mysql_fetch_assoc($stime);
//$totalRows_stime = mysql_num_rows($stime);

//查找影评
mysql_select_db($database_movie, $movie);
$query_yingping = "SELECT yingping.`username`, yingping.`dt`, yingping.`yy` FROM yingping";
$yingping = mysql_query($query_yingping, $movie) or die(mysql_error());
?>


<!DOCTYPE HTML><head>
<title>buyticket</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/kf.css" rel="stylesheet">
<script type="text/javascript"  src="css/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script src="js/flowplayer.min.js"></script>
<link rel="stylesheet" href="skin/functional.css">
<script type="text/javascript"src="http://api.map.baidu.com/apiv=2.0&ak=3cG0qwgGomENHQzmZqd6XOqXYBmYoGPm"></script>
<link  href="css/bootstrap.min.css" rel="stylesheet">
<!--引用百度地图API-->


	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3cG0qwgGomENHQzmZqd6XOqXYBmYoGPm"></script>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    

	</script>
	
	<?php
session_start();
if(!$_SESSION['MM_Username']){
							
echo "<script>alert('你还未登录，赶紧登录吧！');location.href='login.php';</script>";
}
// store session data
//$_SESSION['time']=""

//$_SESSION['t1']="11:00";
//$_SESSION['t2']="11:15";
?>

<!-- // 评价区CSS -->
	
<style>
	
</style>
	
	
</head>
<body>

	<div class="header">
	<div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">首页</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="" onClick="showlist()">联系我们</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="%"><?php echo "欢迎".$_SESSION['MM_Username']?></a></li>
							<li><a href="destroy.php">注销</a></li>
							<li><a href="personal.php">个人中心</a></li>
							
							<li><a href="list.php">我的订单</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
  	  </div>
		 
</div>  
<!--//电影评价-->
<div class="yingping">
<div class="write"><span><p>精彩影评</p><span><input id="writeyp" class="btn btn-success" type="button" value="写短评"></span></div>
<hr width="100%">
<div class="ypx"><ol>
<?php while($row_yingping = mysql_fetch_assoc($yingping)){
echo "<li><h4><img  src='images/h4.jpg'>".$row_yingping['username']."&nbsp;&nbsp;".$row_yingping['dt']."</h4><p>".$row_yingping['yy']."</p><hr></li>"; }?>
<li><h4><img  src="images/h1.jpg">王小帅&nbsp;&nbsp;1小时前</h4><p>期待了很久的电影，特效很好，场景扣人心弦，演员也很到位，非常棒！</p><hr></li>
<li><h4><img  src="images/h2.jpg">王小帅&nbsp;&nbsp;2小时前</h4><p>期待了很久的电影，特效很好，场景扣人心弦，演员也很到位，非常棒！</p><hr></li>
<li><h4><img   src="images/h3.jpg">四季无夏&nbsp;&nbsp;2小时前</h4><p>期待了很久的电影，特效很好，场景扣人心弦，演员也很到位，非常棒！</p><hr></li>
<li><h4><img  src="images/h4.jpg">钟无艳&nbsp;&nbsp;3小时前</h4><p>期待了很久的电影，特效很好，场景扣人心弦，演员也很到位，非常棒！</p><hr></li>
<li><h4><img src="">老王&nbsp;&nbsp;5小时前</h4><p>期待了很久的电影，特效很好，场景扣人心弦，演员也很到位，非常棒！</p><hr></li>
</ol>
	</div></div>
<div class="message"><h5>&nbsp;&nbsp;亲！你可以在下面说出你的精彩影评!更有机会赢免单哦！</h5>
  <textarea name="textarea" class="message1"></textarea>
  <button type="button" id="yok" class="btn btn-primary ">提交影评</button></div>
<!-- //影片大图 -->
			<div  class="yPhoto">
				<div class="play"></div>
			  <?php echo "<img   src='".$row_minformation['mpicture']."' />"; ?>
<!--地图导航-->  <div class="map"  id="dituContent">
			  <!-- <span>请在地图上查找你最适合的电影院</span>-->
				</div></div>
<!--//帮助熊-->
			<div class="bear"><img src="images/robot.gif" width="102" height="181"></div>
			
			
		    <div  style="background: #FCFCFC;">
			<div class="showpost" >
			<table width="100%" border="0" cellspacing="10" cellpadding="0" id="main-tab1" ><h3 style="font-size:26px; color:#333"><b><center><?php echo $row_minformation['mname']; ?></center></b></h3>
			<tr><td width="16%"><span>
			  <h4>时长:<?php echo $row_minformation['mlong']; ?>分钟</h4></span></td><td width="15%"><span>
			  <h4>导演：<?php echo $row_minformation['mdirector']; ?></h4>
			  </span></td><td width="18%"><span>
			  <h4>类型：<?php echo $row_minformation['mchar']; ?></h4></span></td><td width="55%"><span>
			  <h4>主演：<?php echo $row_minformation['mperformer']; ?></h4>
			  </span></td></tr>
				<tr>剧情简介 ：<?php echo $row_minformation['mstory']; ?></tr>
				</table>

<!-- //购票选择 -->
<!--//电影院选择-->
<div class="cinema"><p style="font-size:14px">温馨提示：此网站暂时只支持以下电影院，请在右上地图上查看所选电影院位置！</p><hr><ul><li><span><input type="button" value="越界思哲IMAX(寮步店)" class="listbtn btn btn-success"></span></li><li><span><input type="button" value="橙天嘉禾影城(又一城店)"></span></li><li><span><input type="button" value="星美国际影城"></span></li></ul></div>
			
<p>
  <!-- //选择时间 --> 
</p>


<div  style="padding-left:100px; font-size:18px; background-color:#CCCCFF; margin-top:80px; ">观看时间
      <!--<input name="tt" type="radio"  value=" <?php //echo $ss['pdata']; ?> ">
     <?php //echo $ss['pdata']; ?> 
  
      <input type="radio" name="tt"  value="<?php //var_dump($ss['pdata']); ?> ">
	  <?php //var_dump($ss['pdata']);?>-->
	
	<input type="date"><button class="btn btn-default" id="xtime">OK</button>
	tip:请选择3天内的时间
	<!--<script>
		$("#xtime").click(function(){alert($("[type=date]").val())})
		</script>-->
  </div>
			
	<hr>

<!-- //场次选择	 --> 
<div class="list"><table class="table table-hover table-condensed" id="listt">
<thead><tr><td>放映时间</td>
<td>语言版本</td>
<td>放映厅</td>
<td>售价</td>
<td>选座购票</td></tr></thead><tbody></tbody>
<!--<tbody><tr><td>11:30</td>
<td>普通话</td>
<td>1</td>
<td>25</td>
<td><button class="btn btn-warning">购票</button></td></tr>
<tr><td>11:30</td>
<td>普通话</td>
<td>1</td>
<td>25</td>
<td><button class="btn btn-warning">购票</button></td></tr>
</tbody>-->	
	
</table></div>
</div>
			
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
			<span><a href="#"></a></span>
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
</script>		
	
	
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


<script type="text/javascript">
$(".bear").click(function(){alert("\t前排出售瓜子可乐！\t\n有问题请点击右边咨询客服，有什么建议和想法都可以点击上面留言给我们哦！祝你观影愉快！")});
$("#writeyp").click(function(){
$(".message").fadeIn("slow");
});</script>
<script>
$("#yok").click(function(){
var text = $(".message1").val();
var userid = "<?php echo $_SESSION['MM_Username']?>";
var mn = "<?php echo $row_minformation['mname']?>";
$.ajax({
            type : 'post',       //type相当于 表单里面的method="post/get"
            url : 'yingping.php',       //要处理数据的页面
            data : {userid:userid,message:text,mid:mn},//这是传过去的键值对,前面是key可以随便写，后面的value，必须写已经定义好的变量
            success : function(data){    //这就是回传函数啦,代表course_collect.php处理完数据并且成功传入该改页面需要执行的函数
                console.log(data);  
				alert("影评已提交,感谢你的参与！");//提示语句，这里可以注释了，因为本例执行逻辑都在course_collect.php
            },
            fail : function(err){     //错误提示
                alert(err);
            }    
        });
      

var tet ="<li><h4><?php echo "<img src='images/h4.jpg' />".$_SESSION['MM_Username'] ?>&nbsp;&nbsp;0小时前</h4><p>"+text+"</p><hr></li>" ;
$("ol").prepend(tet);


$(".message").fadeOut("slow");

});</script>
<!--//AJAX加载LIST-->
<script>
	$("#xtime").click(function(){
		var mn ="<?php echo $row_minformation['mname']?>";
		var time = $("[type=date]").val();
		alert("你选择的日期是:"+time);
		$("#listt tbody").html("");
//		$.post("playlist.php",{tim:time,mn:mn},function(data){console.log(data);
//			//alert(data);
//			
//		for(var i=0;i<data.length;i++){
//         var a ="<tr><td>"+data[i].ptime+"</td><td>"+data[i].mlanguage+"</td><td>"+data[i].pid+"</td><td>"+data[i].mprice+"</td><td><a href='seat.php?id="+data[i].spid+"&time="+time+"' class='btn btn-warning'>购票</a></td></tr>";
//			$("#listt tbody").append(a);
//			console.log(data.pid)
			
//		},"json")
		
		
		$.ajax({
			type:'post',
			url:'playlist.php',
			data:{tim:time,mn:mn},
			dataType:'json',
		 success : function(data){  
			 if(data==""){alert("nonono,你选的时间没有排期")}
			 else{
			 for(var i=0;i<data.length;i++){
        var a ="<tr><td>"+data[i].ptime+"</td><td>"+data[i].mlanguage+"</td><td>"+data[i].pid+"</td><td>"+data[i].mprice+"</td><td><a href='seat.php?id="+data[i].spid+"&time="+time+"' class='btn btn-warning'>购票</a></td></tr>";
			$("#listt tbody").append(a);
			console.log(data.pid)
                //alert(data);         
            }}},
            fail : function(err){     
                alert(err);
		}
		})
		
	})
</script>

	
	

<!--//百度地图JS-->
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.882846,23.002189);//定义一个中心点坐标
        map.centerAndZoom(point,12);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
                }
    
    //标注点数组
    var markerArr = [{title:"越界思哲IMAX(寮步店)",content:"越界思哲IMAX(寮步店)",point:"113.835829|22.990578",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ,{title:"橙天嘉禾影城",content:"橙天嘉禾影城",point:"113.771726|22.965624",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ,{title:"星美国际影城",content:"星美国际影城",point:"113.936313|23.001124",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>	
   
  
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>

<!--	蒙层			-->
	<div class="layer" id="back" style="display:none; position:absolute; width:100%; height: 100%; top: 0; left: 0; z-index: 2; background: rgba(255, 255, 255, .6);" disabled="disabled"></div> 
         		
				
<!--play				-->
<div class="av">
		<div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
      <video>
        
         <source type="video/mp4" src="http://oxyi0vk1f.bkt.clouddn.com/evn4.mp4">
      </video>
   </div>       <button  id="close" class="glyphicon glyphicon-remove" >关闭</button>
				</div>		
				
				
			<script type="text/javascript">
	 
	  $(".cinema input").click(function(){$(this).toggleClass("btn btn-success")});
		
	  $(".play").click(function(e){
   		e.stopPropagation();
   		$("#back").css("display","block");
   		
   		$(".av").css("display","block")});
   $("#close").bind("click", function(e) {   // 相当于点击空白消失  
                $('#back').css("display", "none");  
                $(".av").css("display", "none");  
            });  
            
            
   	
				
				
				</script>	
</body>
</html>

<?php


mysql_free_result($yingping);

mysql_free_result($playlist);

mysql_free_result($minformation);


?>
