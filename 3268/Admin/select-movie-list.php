<?php require_once('../Connections/movie.php'); ?>


<?php

$query_Recordset1 = "SELECT distinct `mname` FROM movie";
mysql_select_db($database_movie, $movie);
$Recordset1 = mysql_query($query_Recordset1, $movie) or die(mysql_error());

 //输出结果集
$jarr = array();
while ($row = mysql_fetch_assoc($Recordset1)){ 
    $count=count($row);//不能在循环语句中，由于每次删除 row数组长度都减小  
    for($i=0;$i<$count;$i++){  
        unset($row[$i]);//删除冗余数据  
    }
    array_push($jarr,$row['mname']);
	//array_push($jarr,array("value"=>$row,"text"=>$row));
  //var_dump($jarr);
	
}

echo $str=json_encode($jarr);//将数组进行json编码

   // result.push({ value: value.ID, text: value.Name });

	  ?>