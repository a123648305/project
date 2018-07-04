
<?php
@session_start();
if(!$_SESSION['MM_Username']){
							
echo "<script>alert('你还未登录，赶紧登录吧！');location.href='../index.php';</script>";}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
	<script src="../js/jquery-1.9.0.min.js"></script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/replayblack.jpg) no-repeat 0 0px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(images/main/replayblue.jpg) no-repeat 0 0px;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">留言板（Tip:你遇到什么问题和想提供什么意见都可以在此留言，我们将竭诚为你服务！）</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="../index.php" target="mainFrame" onFocus="this.blur()" class="add">返回首页</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">留言类型：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for"><select name="tip"><option value="遇到问题">遇到问题</option><option value="提供意见">提供意见</option><option value="其他">其他</option></select></td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">邮箱：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" value="admin"  style="height:37px" name="emaila"> 
        <select name="emailb"  >
          <option value=".@126.com">.@126.com</option><option value=".@qq.com">.@qq.com</option>
          <option value=".@163.com">.@163.com</option>
        </select></td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">留言时间：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for"><input id="time" type="text" name="time" style="border: none;height:30px"></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">留言标题：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="title" style="height:30px;width: 300px;"></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">留言内容：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for" style="line-height:24px;"><textarea name="word"></textarea></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">操作：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for"><div  align="center"><input id="sok" type="submit" value="提交"  style=" width:230px;height:50px; background-color:#99FF66"></div></td>
      </tr>
    </table>
    </td>
    </tr>
</table>
	<script>
	$(document).ready(function(){
		
		var time = new Date(+new Date()+8*3600*1000).toISOString().replace(/T/g,' ').replace(/\.[\d]{3}Z/,'');  
		console.log(time)
		$("#time").val(time)
		
		
		$("#sok").click(function(){
			var tip=$("[name='tip']").val();
         	var username="<?php echo $_SESSION['MM_Username']; ?>";
			var emila=$("[name='emaila']").val();
			var emilb=$("[name='emailb']").val();
			var title=$("[name='title']").val();
			var word=$("[name='word']").val();
			var time=$("[name='time']").val();
			
			console.log(tip,username,emila,emilb,title,word,time)
			$.post("liuyan-insert.php",{tip,username,emila,emilb,title,word,time},function(data){alert(data);window.location.href="../index.php";}
				  );
		})
		
	})
		
	
	</script>
</body>
</html>