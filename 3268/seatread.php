<?php require_once('Connections/movie.php'); ?>
<?php
$name = $_POST['iname'];
$time = $_POST['itime'];

$sql = "SELECT dtable.dseat FROM dtable WHERE dtable.mname = '".$name."' AND dtable.dtime = '".$time."'";
//$sql = "select dseat from dtable where ";

$ab = mysql_query($sql,$movie) or die(mysql_error());
$total = mysql_num_rows($ab);
//while ($rs = mysql_fetch_assoc($ab))
//{
//	//var_dump($rs);
//	
//}

$res="";
while($row = mysql_fetch_assoc($ab)) {
  $res.=",".$row['dseat'];
	//$seat[]=$row['dseat'];
}
$leng = mb_strlen($res,'utf-8');
echo mb_substr($res,1,$leng,'utf-8');//截取头5个字，假定此代码所在php文件的编码为utf-8 

//echo "<br>";



?>
