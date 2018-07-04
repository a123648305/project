<?php require_once('../Connections/movie.php'); ?>

<?php 

//mid,mname,mdirector,mperformer,mstudio,mplaytime,mlong,mchar,mp,sp,mprice,mlanguage
mysql_select_db($database_movie, $movie);
$sql = "UPDATE `movie` SET `mname`='".$_POST['mname']."', `mdirector`='".$_POST['mdirector']."', `mperformer`='".$_POST['mperformer']."',`mstudio`='".$_POST['mstudio']."', `mpalytime`='".$_POST['mplaytime']."', `mchar`='".$_POST['mchar']."', `mpicture`='".$_POST['mp']."', `spicture`='".$_POST['sp']."', `mprice`='".$_POST['mprice']."', `mlanguage`='".$_POST['mlanguage']."',`mstory`='".$_POST['mstory']."'  WHERE `mid`='".$_POST['mid']."'";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "更新数据成功！";}
else{echo mysql_error();}






?>