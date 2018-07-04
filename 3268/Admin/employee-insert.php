<?php require_once('../Connections/movie.php'); ?>

<?php 
$eid = rand(0,100);


mysql_select_db($database_movie, $movie);
$sql = "insert into `employee` (`eid`,`ename`,`esex`,`ephone`,`eaddress`,`ezhiwei`) values('".$eid."','".$_POST['addname']."','".$_POST['addsex']."','".$_POST['addphone']."','".$_POST['addaddr']."','".$_POST['addzhiwei']."')";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "插入数据成功！";}
else{echo mysql_error();}






?>