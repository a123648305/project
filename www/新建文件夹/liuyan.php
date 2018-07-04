<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<div style="position:absolute; background-image: url(2010111016535922.jpg); width: 686px; height: 640px; left: 189px; top: 14px;">
<form  action="" method="post"  style="position:absolute; left: 35px; top: 15px; width: 586px; height: 544px;"">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>速度
  <select name=speed width: 674px; height: 613px; left: 254px; top: 12px;"speed" id="speed" >
    <option value="非常满意">非常满意</option>
    <option value="满意">满意</option>
    <option value="一般">一般</option>
    <option value="不满意">不满意</option>
        </select>
</p>
<p>&nbsp;</p>
<p>评分
  <select name="pf" id="pf">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
</p>
<p>
<p>客户留言
  <input name="Submit" type="submit" style="position:absolute; left: 230px; top: 562px; width: 202px; height: 55px;" value="提交" />
  <textarea name="ly" id="ly"  style= "position:absolute; left: 97px; top: 260px; width: 445px; height: 231px; background-color: transparent;" s="s"></textarea>
  
  <?php if (isset($_REQUEST["Submit"])){ 
  $connect =mysql_connect("localhost","root","12345678") or die ("失败");
mysql_select_db("wlgl",$connect) or die ("失败2");

$sql = "INSERT INTO `information_evaluate` (`Evaluate_Speed`, `Evaluate_Grade`, `Evaluate_Remaks`) VALUES ('$_POST[speed]', '$_POST[pf]', '$_POST[ly]');";
	 
	 mysql_query($sql);
	 echo "<script>alert('评价成功');location.href='main.php';</script>";  
	  
	  }
	   	 
	  ?>
  </form>
</div>
</body> 

</html>
