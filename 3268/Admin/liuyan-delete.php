<?php require_once('../Connections/movie.php'); ?>
<?php  mysql_select_db($database_movie, $movie);

	
$sql ="delete from `message` where meid ='".$_POST['xd']."'";
//$sql ="delete from `employee` where eid ='753'";
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "数据删除成功！";}
else{echo mysql_error();}

//echo count($_POST['ids']);

?>