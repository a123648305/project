<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
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

                       <img src="picture/运单追踪.jpg" height="300"/> 

                       <img src="picture/3.jpg"/> 

                       <img src="images/teams/huojian.jpg"/><img src="images/teams/maci.jpg"/></div> 

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
</body>
</html>
