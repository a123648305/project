<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XY快递</title>
<style type="text/css">
<!--
.STYLE1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #FF6600;
	font-weight: bold;
}
.STYLE2 {
	font-family: "宋体";
	color: #000000;
	font-weight: bold;
}
.STYLE4 {font-family: "宋体"; color: #FF0000; font-weight: bold; }
body {
	background-color: #F0F0F0;
	background-image: url();
}
-->
</style>
</head>
<center>
<body>
<div style="height:450px; width:900px;background-image:url(首页1.jpg)" >
<p><span class="STYLE1"> 欢迎来到XY快递有限公司官网 </span>
  <span class="STYLE2">首页 <a  href="liuyan.php""><u>留言</u></a> </span>
  <span class="STYLE4"><a href="" target="_parent"><?php echo $_SESSION['views'];?></a></span> |<span class="STYLE4"><a href="main.php" target="_parent">注销</a></span><span class="STYLE2">北京时间</span>
  <?php
 date_default_timezone_set('PRC'); 
 echo date('Y-m-d H:i:s');
 ?>
</div >
 <div  style="position:absolute; left: 230px; width: 901px; height: 97px; background-image:url(beijing.jpg); top: 467px; margin:0 auto; " >
  <a href="find.php"> <img src="picture/运单追踪.jpg"  width="195" height="87" style="position:absolute; left: 379px; top: 4px;"/></a></p>
</p>
<a href="sending.php"><img src="picture/寄件.jpg" width="195" height="87" style="position:absolute; top: 4px; left: 90px;" /></a><br />
<p><br />
  <input type="image" name="imageField" src="picture/在线客服.png"  style="position:absolute; left: 688px; top: 5px;">
 </div>
 
 
 <br>
 <p align="center">&nbsp;</p>
<p> 
 

<div  style="position:absolute; left: 228px; top: 626px;margin:0 auto;">
  <span class="STYLE2">业务介绍 </span>
  <p></p>
  <style type="text/css"> 

                        <!-- 

                        #demo { overflow:hidden; 

                        background: #FFF; 

                        overflow:hidden; 

                        border: 1px dashed #CCC; 

                        width: 940px; 

                        } 

                        #demo img {

                        border: 3px solid #F2F2F2; 

                        } 

                        #indemo { 

                        float: left; 

                        width: 800%; 

                        } 

                        #demo1 { 

                        float: left; 

                        } 

                        #demo2 { 

                        float: left; 

                        } 

                        --> 

                        </style> 

                        <div id="demo"> 

                        <div id="indemo"> 

                        <div id="demo1"> 

                       <img src="仓储服务.jpg" /> 

                       <img src="快递服务3.jpg"/> 

                       <img src="冷藏服务.jpg"/></div> 

                        <div id="demo2"></div> 

                        </div> 

                        </div> 

    <script> 

                        <!-- 

                        var speed=0; //数字越大速度越慢 

                        var tab=document.getElementById("demo"); 

                        var tab1=document.getElementById("demo1"); 

                        var tab2=document.getElementById("demo2"); 

                        tab2.innerHTML=tab1.innerHTML; 

                        function Marquee(){ 

                        if(tab2.offsetWidth-tab.scrollLeft<=0) 

                        tab.scrollLeft-=tab1.offsetWidth 

                        else{ 

                        tab.scrollLeft++; 

                        } 

                        } 

                        var MyMar=setInterval(Marquee,speed); 

                        tab.onmouseover=function() {clearInterval(MyMar)}; 

                        tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)}; 

                        --> 

                        </script>
</div>

<div  stylid=container; style="position:absolute; margin:0 auto; width: 918px; height: 398px; left: 227px; top: 1072px;margin:0 auto">
<p align="center">
 <span class="STYLE2">企业新闻 </span><img  src="123.jpg"" style="position:absolute; left: 461px; top: 47px; width: 223px; height: 157px;" /><br/>
 <img src="优惠活动.jpg" style="position:absolute; left: 39px; top: 54px;"><img src="新闻3.jpg" width="391" style="position:absolute; left: 693px; top: 49px; width: 216px; height: 154px;" /></div>
<p ><img src="底框.jpg" width="858" height="210" style="position:absolute;  left: 98px; top: 1327px; width: 1200px; height: 228px;"></p>
</body>
 </center>

</html>
