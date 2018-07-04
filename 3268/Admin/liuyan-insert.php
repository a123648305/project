<?php require_once('../Connections/movie.php'); ?>

<?php 
$eid = rand(20,100);


mysql_select_db($database_movie, $movie);
$sql = "INSERT INTO `message` (`meid`, `mchar`, `username`, `email`, `title`, `word`, `time`) VALUES ('".$eid."', '".$_POST['tip']."', '".$_POST['username']."', '".$_POST['emila'].$_POST['emilb']."', '".$_POST['title']."', '".$_POST['word']."', '".$_POST['time']."')";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "留言成功！";}
else{echo mysql_error();}






?>