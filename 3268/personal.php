<?php require_once('Connections/movie.php'); ?>

<?php
//error_reporting(0);
@session_start();

mysql_select_db($database_movie, $movie);
$query_Recordset1 = "SELECT vip.vname, vip.vcount, `user`.username, `user`.userpad, `user`.userphone FROM `user`, vip WHERE `user`.username='".$_SESSION['MM_Username']."' AND `user`.other = vip.vid";
$Recordset1 = mysql_query($query_Recordset1, $movie) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);


mysql_select_db($database_movie, $movie);
$query_Recordset2 = "SELECT * FROM userphoto where username ='".$_SESSION['MM_Username']."'";
$Recordset2 = mysql_query($query_Recordset2, $movie) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>
<!DOCTYPE HTML>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/other.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/kf.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/cropper.min.css">
    <link rel="stylesheet" href="css/ImgCropping.css">
	<script src="js/cropper.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	
	
	
	<?php

echo $row_Recordset2['purl'];
//if(!$_SESSION['MM_Username']){
							
//echo "<script>alert('你还未登录，赶紧登录吧！');location.href='login.php';</script>";
//}

?>
</head>

<body>

<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.php">首页</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="contact.html">联系我们</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="#"><?php echo "欢迎".$_SESSION['MM_Username']?></a></li>
							<li><a href="index.php">注销</a></li>
							
							
							<li><a href="/3268/list.php">我的订单</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
<div class="wrap">
  <div class="page-title" style="font-size:23px; color:#99CCFF; padding-left: 100px;" >
    <span class="modular fl"><i class="order"></i><em>个人信息</em></span>  </div>
  <hr>
<div class="lager" style="height:300px; margin-left:100px;">
  <div class="photo" style="float:left;300px;height: 300px;"><em>&nbsp;&nbsp;头&nbsp;&nbsp;像</em>
  
	
    <button id="replaceImg" class="btn btn-default">更换图片</button>
<div style="position: inherit;height: 250px;width: 250px; border: solid 1px #555;padding: 5px;margin-top: 10px">
    <img id="finalImg" src="<?php echo $row_Recordset2['purl']; ?>" style="width: 100%;height: 100%">
</div>
	
	</div>
  <div class="information"  style="float:left;margin-left: 30px">
    <h2>   个人信息</h2>
    <hr><form action="#" name="form1" method="POST">
  <table width="100%;" height="209" border="0";>
    
  
  <tr><td>用户名：<input  name="username" type="text"  value="<?php echo $row_Recordset1['username']; ?>" readonly="true">
  *用户名不可修改，用于登录时的许可</td>
  </tr>
  <tr>
    <td> 密&nbsp;&nbsp;码：
      <input name="password" type="text" value="<?php echo $row_Recordset1['userpad']; ?>">
  *用于登入时的密码</td>
  </tr>
  <td>电话/手机:<input name="phone" type="text" value="<?php echo $row_Recordset1['userphone']; ?>">*用户取票及其他服务的联系方式</td>
  <tr><td height="29">会员等级：
      <input type="text" readonly="" border="hidden" value="<?php echo $row_Recordset1['vname']."享".$row_Recordset1['vcount']."优惠" ?>">*不同的等级对应不同的优惠服务</td></tr>
  <tr><td align="center"><input name="pok" type="submit" value="保存" class="btn btn-success"></td></tr>
  </table></form>
  </div></div>
   <!--//帮助熊-->
			<div class="bear"><img src="images/robot.gif" width="102" height="181"></div>
	
	
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
	<!--图片裁剪框 start-->
<div style="display: none" class="tailoring-container">
    <div class="black-cloth" onclick="closeTailor(this)"></div>
    <div class="tailoring-content">
            <div class="tailoring-content-one">
                <label title="上传图片" for="chooseImg" class="l-btn choose-btn">
                    <input type="file" accept="image/jpg,image/jpeg,image/png" name="file" id="chooseImg" class="hidden" onchange="selectImg(this)">
                    选择图片
                </label>
                <div class="close-tailoring"  onclick="closeTailor(this)">×</div>
            </div>
            <div class="tailoring-content-two">
                <div class="tailoring-box-parcel">
                    <img id="tailoringImg">
                </div>
                <div class="preview-box-parcel">
                    <p>图片预览：</p>
                    <div class="square previewImg"></div>
                    <div class="circular previewImg"></div>
                </div>
            </div>
            <div class="tailoring-content-three">
                <button class="l-btn cropper-reset-btn">复位</button>
                <button class="l-btn cropper-rotate-btn">旋转</button>
                <button class="l-btn cropper-scaleX-btn">换向</button>
                <button class="l-btn sureCut" id="sureCut">确定</button>
            </div>
        </div>
</div>
<!--图片裁剪框 end-->
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
		$(".bear").click(function(){alert("\t前排出售瓜子可乐！\t\n有问题请点击右边咨询客服，有什么建议和想法都可以点击上面留言给我们哦！祝你观影愉快！")});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
	
	<script>

    //弹出框水平垂直居中
    (window.onresize = function () {
        var win_height = $(window).height();
        var win_width = $(window).width();
        if (win_width <= 768){
            $(".tailoring-content").css({
                "top": (win_height - $(".tailoring-content").outerHeight())/2,
                "left": 0
            });
        }else{
            $(".tailoring-content").css({
                "top": (win_height - $(".tailoring-content").outerHeight())/2,
                "left": (win_width - $(".tailoring-content").outerWidth())/2
            });
        }
    })();

    //弹出图片裁剪框
    $("#replaceImg").on("click",function () {
        $(".tailoring-container").toggle();
    });
    //图像上传
    function selectImg(file) {
        if (!file.files || !file.files[0]){
            return;
        }
        var reader = new FileReader();
        reader.onload = function (evt) {
            var replaceSrc = evt.target.result;
            //更换cropper的图片
            $('#tailoringImg').cropper('replace', replaceSrc,false);//默认false，适应高度，不失真
			//console.log(replaceSrc)
			//var username = "<?php //echo $row_Recordset1['username']; ?>";
			//$.post("photoinsert.php",{replaceSrc,username},function(data){console.log(data)})
        }
      reader.readAsDataURL(file.files[0]);
		
    }
    //cropper图片裁剪
    $('#tailoringImg').cropper({
        aspectRatio: 1/1,//默认比例
        preview: '.previewImg',//预览视图
        guides: false,  //裁剪框的虚线(九宫格)
        autoCropArea: 0.5,  //0-1之间的数值，定义自动剪裁区域的大小，默认0.8
        movable: false, //是否允许移动图片
        dragCrop: true,  //是否允许移除当前的剪裁框，并通过拖动来新建一个剪裁框区域
        movable: true,  //是否允许移动剪裁框
        resizable: true,  //是否允许改变裁剪框的大小
        zoomable: false,  //是否允许缩放图片大小
        mouseWheelZoom: false,  //是否允许通过鼠标滚轮来缩放图片
        touchDragZoom: true,  //是否允许通过触摸移动来缩放图片
        rotatable: true,  //是否允许旋转图片
        crop: function(e) {
            // 输出结果数据裁剪图像。
        }
    });
    //旋转
    $(".cropper-rotate-btn").on("click",function () {
        $('#tailoringImg').cropper("rotate", 45);
    });
    //复位
    $(".cropper-reset-btn").on("click",function () {
        $('#tailoringImg').cropper("reset");
    });
    //换向
    var flagX = true;
    $(".cropper-scaleX-btn").on("click",function () {
        if(flagX){
            $('#tailoringImg').cropper("scaleX", -1);
            flagX = false;
        }else{
            $('#tailoringImg').cropper("scaleX", 1);
            flagX = true;
        }
        flagX != flagX;
    });

    //裁剪后的处理
    $("#sureCut").on("click",function () {
        if ($("#tailoringImg").attr("src") == null ){
            return false;
        }else{
            var cas = $('#tailoringImg').cropper('getCroppedCanvas');//获取被裁剪后的canvas
            var base64url = cas.toDataURL('image/png'); //转换为base64地址形式
            $("#finalImg").prop("src",base64url);//显示为图片的形式
           var username = "<?php echo $row_Recordset1['username']; ?>";
			var replaceSrc =base64url;
			$.post("photoinsert.php",{replaceSrc,username},function(data){console.log(data);alert("更换成功！");})
            //关闭裁剪框
            closeTailor();
        }
    });
    //关闭裁剪框
    function closeTailor() {
        $(".tailoring-container").toggle();
    }




	$("[name='pok']").click(function(){
		
		var username = "<?php echo $row_Recordset1['username']; ?>";
		var pad =$("[name='password']").val();
		var phone =$("[name='phone']").val();
		console.log(username,pad,phone);
		$.post("user-update.php",{username,pad,phone},function(data){
			alert(data)
		})
	})
	

	
</script>
	
</div>
</body>
</html><?php
mysql_free_result($Recordset1);
	mysql_free_result($Recordset2);
?>
