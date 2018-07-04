<%@ Page Language="C#" ContentType="text/html" ResponseEncoding="utf-8" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
.content {
height: 400px;
margin-top: 8px;
background-color: #00CCFF;
}
#right{
float:right; //向右浮动
width:200px; //必须要
height:XXXpx;
}
#mid{
float:right;
width:200px; //必须要
height:XXXpx;
}
#left{
float:left; // 此处也可以向右浮动 如有4个的话 就向右
width:200px; //必须要
height:XXXpx;
}
.cboth{
clear:both; //清除浮动
}</style>
</head>
<body>

<div class="content">
<div id="right"></div>
<div id="mid"></div>
<div id="left"></div>
<div class="cboth"></div>
</body>
</html>
