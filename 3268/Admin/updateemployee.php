<?php require_once('../Connections/movie.php'); ?>
<?php 

mysql_select_db($database_movie, $movie);
$sql = "UPDATE `employee` SET `ename`='".$_POST['elist'].ename."', `esex`='女', `ephone`='130682260191', `eaddress`='圣地亚哥2', `ezhiwei`='普通员工' WHERE (`eid`='7511')";
echo (mysql_query($sql));



?>