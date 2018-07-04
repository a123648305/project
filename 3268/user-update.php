<?php require_once('Connections/movie.php'); 





//执行代码

$sql="UPDATE user SET  userpad='".$_POST['pad']."', userphone='".$_POST['phone']."' WHERE `user`.username='".$_POST['username']."'";
$rs=mysql_query($sql,$movie);
if($rs)
{echo "保存成功！";}
else{
echo mysql_error();
}



?>