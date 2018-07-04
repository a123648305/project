
<?php require_once('Connections/movie.php'); ?>
<?php 

header('Content-type:text/html;charset=utf-8');
$did = rand(5,100000);
$base64_image_content = $_POST['replaceSrc'];
//删除文件	
	 $file_path="C:/myphp_www/PHPTutorial/WWW/3268/images/test/".$_POST['username'].".jpg"; 
 if(is_file($file_path)) { 
  unlink($file_path);}
 
//创建新文件	
	

//匹配出图片的格式
if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
$type = $result[2];
$new_file = "C:/myphp_www/PHPTutorial/WWW/3268/images/test/";
if(!file_exists($new_file))
{
//检查是否有该文件夹，如果没有就创建，并给予最高权限
mkdir($new_file, 0700);
}
$new_file = $new_file.$_POST['username'].".jpg";

if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
echo '新文件保存成功：', $new_file;
}else{
echo '新文件保存失败';
}

}


$sql="select `purl`from`userphoto` where username ='".$_POST['username']."'";
$rs=mysql_query($sql,$movie);
$result = mysql_fetch_assoc($rs);
if(!$result)
{    
//插入数据库
//images/7.jpg
$url = "images/test/".$_POST['username'].".jpg";


$sql="INSERT INTO `userphoto` (`meid`, `username`, `purl`) VALUES ('".$did."', '".$_POST['username']."', '".$url."')";
$rs=mysql_query($sql,$movie);
if($rs)
{echo "更换头像成功！";}
else{
echo mysql_error();
}


}
else {

	//更新数据库
	//images/7.jpg
$url = "images/test/".$_POST['username'].".jpg";


$sql="update userphoto set purl='".$url."' where username='".$_POST['username']."'";
$rs=mysql_query($sql,$movie);
if($rs)
{echo "更换头像成功！";}
else{
echo mysql_error();
}
mysql_free_result($rs);	
}


//$base64_image_content = $_POST['replaceSrc'];
////匹配出图片的格式
//if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
//$type = $result[2];
//$new_file = "C:/myphp_www/PHPTutorial/WWW/3268/images/test/";
//if(!file_exists($new_file))
//{
////检查是否有该文件夹，如果没有就创建，并给予最高权限
//mkdir($new_file, 0700);
//}
//$new_file = $new_file.$_POST['username'].".jpg";
//
//if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
//echo '新文件保存成功：', $new_file;
//}else{
//echo '新文件保存失败';
//}
//
//}

mysql_close($movie);




?>