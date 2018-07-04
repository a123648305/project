<?php
     



	  $obj_data->userid = $_POST['userid'];
	    $obj_data->mid = $_POST['mid']; 
      $obj_data->message = $_POST['message'];
      //$obj_data->type = 1;  
	  $id = rand(1,100);
	 //1.造PDO对象
$dsn ="mysql:dbname=movie;host=localhost";
$pdo = new PDO($dsn,"root","12345678");
//2.写SQL语句

$sql = "INSERT INTO `yingping` (`yid`, `username`, `mname`, `yy`,`dt`) VALUES ('".$id."','".$obj_data->userid."', '".$obj_data->mid."','".$obj_data->message."','0小时前')";
//3.执行SQL语句
$stm = $pdo->query($sql);
    if($stm){
		echo "success";
	}else{
		echo "fail";
	}
		
	  ?>