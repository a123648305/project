<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>无标题文档</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<?php function jump() { 
sleep(2.5);//延迟 2.5 秒，音乐盒、便利店、井盖等站 2 秒加分 
$screenShell = "cd D:\&adb shell /system/bin/screencap -p /sdcard/screenshot.png&adb pull /sdcard/screenshot.png d:jumper/screenshot.png"; 
exec($screenShell);//截图 
  
$i=imagecreatefrompng("d:jumper/screenshot.png");//读取图片 
$point=array(); 
for ($y=400;$y<imagesy($i);$y++) {//从第 400 行开始，避开上部内容 
for ($x=0;$x<imagesx($i);$x++) {//横向扫描 
$rgb = imagecolorat($i,$x,$y);//取得颜色 
$point["now"]["r"] = ($rgb>>16) & 0xFF; 
$point["now"]["g"] = ($rgb>>8) & 0xFF; 
$point["now"]["b"] = $rgb & 0xFF; 
if(isset($point["last"]["r"])){ 
if(!isset($point["x"]["a"])){ 
if( abs($point["now"]["r"]-$point["last"]["r"])>1 
or abs($point["now"]["g"]-$point["last"]["g"])>1 
or abs($point["now"]["b"]-$point["last"]["b"])>1 
){ 
$point["x"]["a"]=$x; 
if(imagesx($i)/2>$x){ 
$point["direction"]="left"; 
}else{ 
$point["direction"]="right"; 
} 
$point["a"]=$point["last"]; 
} 
}else{ 
if($point["now"]==$point["a"]){ 
$point["x"]["b"]=$x-1; 
break; 
} 
} 
} 
$point["last"]=$point["now"]; 
} 
if(isset($point["x"])){ 
break; 
} 
} 
  
$param["left"] = 3750; 
$param["right"] = 3100; 
$time = pow((abs(imagesx($i)/2-($point["x"]["a"]+$point["x"]["a"])/2)/imagesx($i)),1)*$param[$point["direction"]]; 
  
if($time<400){ 
$time+=($param[$point["direction"]]/300); 
} 
$time = round($time,0); 
echo "direction:".$point["direction"]; 
echo "\nx.a:".$point["x"]["a"]; 
echo "\nx.b:".$point["x"]["b"]; 
echo "\ntime:".$time."\n"; 
$touchShell = "cd D:\&adb shell input swipe 50 250 250 250 ".$time; 
exec($touchShell); 
imagedestroy($i); 
jump(); 
} 
  
jump(); ?>
</body>
</html>
