<?php require_once('../Connections/movie.php'); ?>
<?php  mysql_select_db($database_movie, $movie);
$j = count($_POST['ids']);
for($i=0;$i<$j;$i++)
{	
$sql ="delete from `employee` where eid ='".$_POST['ids'][$i]."'";
//$sql ="delete from `employee` where eid ='753'";
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo 1+$i."条数据删除成功！";}
else{echo mysql_error();}}

//echo count($_POST['ids']);

?>