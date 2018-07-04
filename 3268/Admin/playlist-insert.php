<?php require_once('../Connections/movie.php'); ?>

<?php 
$spid = rand(10,1000);


mysql_select_db($database_movie, $movie);
$sql = "INSERT INTO `playlist` (`spid`, `pid`, `pdata`, `pmname`, `ptime`) VALUES ('".$spid."', '".$_POST['pid']."', '".$_POST['date']."', '".$_POST['pmname']."', '".$_POST['time']."')";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "插入数据成功！";}
else{echo mysql_error();}

