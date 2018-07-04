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
	<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-right: 0px;
}
-->
</style></head>
<div class="headertop_desc">
    <div class="wrap">
      <div class="nav_list">
        <ul>
          <li><a href="index.php">首页</a></li>
          <li><a href="#">关于</a></li>
          <li><a href="Admin/message_info.php">留言反馈</a></li>
        </ul>
      </div>
      <div class="account_desc">
        <ul>
		<?php 
			@session_start(); 
			
			if(!$_SESSION['MM_Username']){ 
		echo '<li><a href="zc.html">注册</a></li>
          <li><a href="login.php">登录</a></li>
          <li><a href="#">我的订单</a></li>'; }
		else{
		echo '<li><a href="zc.html">欢迎'.$_SESSION['MM_Username'].'</a></li>
          <li><a href="destroy.php">注销</a></li>
		  <li><a href="personal.php">个人中心</a></li>
          <li><a href="list.php">我的订单</a></li>';}?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>