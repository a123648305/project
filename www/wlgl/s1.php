<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<div id="s1"  style="position:absolute"><input name="Submit" type="reset" onclick="link1()" value="s1" /></div>
<p>&nbsp;</p>
<div id="s2" style="position:absolute; left: 10px; top: 14px;">此处显示  id "s2" 的内容</div>


<p><div style="position:absolute; left: 234px; top: 62px;"><a href="javascript:link1()"><u>显示s2</u></p>
<p><u><a href="javascript:link3()"><u>显示s1</u></p></div>


<script type='text/javascript'>
function link1() {document.getElementById('s1').style.display='none';document.getElementById('s2').style.display='';}
 
function link3() {document.getElementById('s2').style.display='none';document.getElementById('s1').style.display='';}
 </script>
<input name="Submit" type="reset" onclick="link1()" value="s1" />
 <script type='text/javascript'>
</script>
 <input name="Submit2" type="reset" onclick="link3()" value="s2" />
 <script type='text/javascript'>function link2() {document.getElementById('s2').style.display='none';document.getElementById('s1').style.display='none';}
 </script>
 <input name="Submit3" type="reset" onclick="link2()" value="重置" />
</body>
</html>
