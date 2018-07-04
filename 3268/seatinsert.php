
<?php require_once('Connections/movie.php'); ?>
<?php 
$did = rand(12345,100000);
$mname = $_POST['dname'];
$ddate = $_POST['ddate'];
$dtime = $_POST['dtime'];
$dseat = $_POST['dseat'];
$dprice = $_POST['dprice'];
$userid = $_POST['name'];

$sql="INSERT INTO `dtable` (`did`, `mname`, `dtime`, `dseat`, `dprice`, `db`,`ddate`,`zt`) VALUES ('".$did."', '".$mname."', '".$dtime."', '".$dseat."', '".$dprice."', '".$userid."','".$ddate."','已支付')";
$rs=mysql_query($sql,$movie);
if($rs)
{echo "购买成功！";}
else{
	echo mysql_error();
}

?>