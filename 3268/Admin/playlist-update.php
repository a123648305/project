<?php require_once('../Connections/movie.php'); ?>

<?php 

//mid,mname,mdirector,mperformer,mstudio,mplaytime,mlong,mchar,mp,sp,mprice,mlanguage
mysql_select_db($database_movie, $movie);
$sql = "UPDATE `playlist` SET `pid`='".$_POST['pid']."', `pdata`='".$_POST['pdata']."', `pmname`='".$_POST['pmname']."', `ptime`='".$_POST['ptime']."' WHERE `spid`='".$_POST['spid']."'";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "更新数据成功！";}
else{echo mysql_error();}






?>