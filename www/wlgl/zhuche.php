<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>会员注册</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.STYLE1 {font-size: 16px}
body {
	background-color: #CCCCCC;
	background-image: url();
}
.STYLE2 {	font-family: "宋体";
	color: #000000;
	font-weight: bold;
}
.STYLE4 {font-family: "宋体"; color: #FF0000; font-weight: bold; }
.STYLE5 {
	color: #999999;
	font-size: 18px;
}
-->
</style>
</head>
<body class="sub">
<div style="position:absolute; background-image:url(2010011702135635.jpg); left: 156px; top: 14px; width: 1045px; height: 607px;">
<form  action="zhuche2.php" method="post" name="form1" id="form1">
  <table width="79%" height="514" border="0" cellpadding="8">
  <td colspan="3" class="HeaderColor"><h4 class="STYLE1">注册 <span class="STYLE2"><a href="main.php">首页</a> 物流 </span> <span class="STYLE4"><a href="denglu.php" target="_parent">会员登入</a></span> |<span class="STYLE4"><a href="zhuche.php" target="_parent">会员注册</a></span><span class="STYLE2">北京时间</span>
              <?php
 date_default_timezone_set('PRC'); 
 echo date('Y-m-d H:i:s');
 ?>
  </h4></td>
  </tr>
  <tr style="vertical-align: top">
    <td height="54" nowrap="nowrap" class="LabelColor" style="text-align: right"><label for="username">姓名</label>
    </td>
    <td width="89%" colspan="2" class="TitleColor"><input type="text" id="username" name="lname" height = 20px;/>
      *<br /></td>
  </tr>
  <tr style="vertical-align: top">
    <td height="30" class="LabelColor" style="text-align: right">密码</td>
    <td height="30" colspan="2" class="TitleColor"><input type="password" id="lpassword2" name="lpassword" height = 20px;/>
      *</td>
  </tr>
  <tr style="vertical-align: top">
    <td height="54" class="LabelColor" style="text-align: right"><label for="confirmpassword">确认密码<br />
      </label>
    </td>
    <td colspan="2" class="TitleColor"><p>
      <input type="password" id="confirmpassword" name="lpassword2" height = 20px; />
      <span class="small">* </span><br />
    </p></td>
  </tr>
  <tr style="vertical-align: top">
    <td height="55" class="LabelColor" style="text-align: right">电话</td>
    <td colspan="2"><span class="TitleColor">
      <input type="text" id="textfield6" name="ltell" size="50" height = 20px;/>
    </span></td>
  </tr>
  <p class="StoryContentColor"><br />
      <label for="yes2"></label>
      <label for="yes2"></label>
      <br />
      <label for="no2"></label>
  </p>
  <tr style="vertical-align: top" class="FooterColor">
    <td height="144" colspan="3"><p>
      <input name="SubmitName" type="submit" style="position:absolute; left: 277px; top: 547px; width: 261px; height: 43px;" onclick=echo "1" value="同意协议并注册" />
      <textarea name="lppp" style="position:absolute; left: 116px; top: 387px; width: 404px; height: 84px;" cols="50" id="textfield6" height="20px; ">通过首页进入服务网站即表示您已经与本网站订立本协议，且您将受本协议的条款和条件约束。本网站可随时自行全权决定更改“条款”，并不必说明理由。如“条款”有任何变更，本网站将刊载公告通知。如您不同意相关变更，必须停止使用“服务”。经修订的“条款”一经在本网站公布，即自动生效。您继续使用“服务”将表示您接受经修订的“条款</textarea>
    </p></td>
  </tr>
  </table>
</form>
<input name="Submit" type="submit" style="position:absolute; left: 583px; top: 548px; width: 77px; height: 39px;" onclick="window.location.href='main.php'"value="取消" />
</div>
</body>
</html>
