<?php require_once('Connections/movie.php'); ?>

<?php
$tm = $_POST["tim"];
$mname = $_POST["mn"];
//$tm = '2018-4-6';
//echo $tm;
mysql_select_db($database_movie, $movie);
$query_Recordset1 = "SELECT distinct playlist.spid, movie.mprice, playlist.pid, playlist.pdata,playlist.ptime, movie.mlanguage FROM movie, playlist WHERE movie.mname = playlist.pmname AND playlist.pdata='".$tm."' AND playlist.pmname='".$mname."' AND playlist.ptime > curtime() ORDER BY playlist.pmname";

$Recordset1 = mysql_query($query_Recordset1, $movie) or die(mysql_error());

 //输出结果集
$jarr = array();
while ($row = mysql_fetch_assoc($Recordset1)){
    $count=count($row);//不能在循环语句中，由于每次删除 row数组长度都减小  
    for($i=0;$i<$count;$i++){  
        //unset($rows[$i]);//删除冗余数据  
    }
    array_push($jarr,$row);
}
//print_r($jarr);//查看数组
//echo "<br/>";
 
//echo '<hr>';

//echo '编码后的json字符串：';
echo $str=json_encode($jarr);//将数组进行json编码
//echo '<br>';
//$arr=json_decode($str);//再进行json解码
//echo '解码后的数组：';
//print_r($arr);//打印解码后的数组，数据存储在对象数组中
   

	  ?>