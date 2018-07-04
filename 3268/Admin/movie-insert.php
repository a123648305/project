<?php require_once('../Connections/movie.php'); ?>

<?php 
//$mid = rand(10,100);


mysql_select_db($database_movie, $movie);
$sql = "INSERT INTO `movie` (`mid`, `mname`, `mdirector`, `mperformer`, `mstudio`, `mpalytime`, `mlong`, `mchar`, `mpicture`, `spicture`, `mprice`, `mlanguage`,`mstory`) VALUES ('".$_POST['addid']."', '".$_POST['addname']."', '".$_POST['adddirector']."', '".$_POST['addperformer']."', '".$_POST['addstudio']."', '".$_POST['addplaytime']."', '".$_POST['addlong']."', '".$_POST['addchar']."', '".$_POST['addmp']."', '".$_POST['addsp']."', '".$_POST['addprice']."', '".$_POST['addlanguage']."'，'".$_POST['addmstory']."')";
//注意是tab键上面的符号 不是单引号 除了value中的是单引号
$a = mysql_query($sql,$movie) or die(mysql_error());;

if($a){echo "插入数据成功！";}
else{echo mysql_error();}






?>