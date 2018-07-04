<?php require_once('../Connections/movie.php'); ?>

<?php 


mysql_select_db($database_movie, $movie);
$sql = "UPDATE `dtable` SET `mname`='".$_POST['name']."', `dtime`='".$_POST['time']."', `dseat`='".$_POST['seat']."', `dprice`='".$_POST['price']."', `ddate`='".$_POST['date']."',`zt`='".$_POST['zt']."' WHERE `did`='".$_POST['did']."'";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "更新数据成功！";}
else{echo mysql_error();}







?>