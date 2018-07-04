<?php require_once('../Connections/movie.php'); ?>

<?php 


mysql_select_db($database_movie, $movie);
$sql = "UPDATE `employee` SET `ename`='".$_POST['name']."', `esex`='".$_POST['sex']."', `ephone`='".$_POST['phone']."', `eaddress`='".$_POST['addr']."', `ezhiwei`='".$_POST['zhiwei']."' WHERE `eid`='".$_POST['eid']."'";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "更新数据成功！";}
else{echo mysql_error();}






?>