<?php
if(!defined('sucms_INC'))
{
	exit("Request Error!");
}
$dsql->SetQuery("SHOW TABLE STATUS LIKE '$cfg_dbprefix%'");
$dsql->Execute('t');
while($table = $dsql->GetArray('t',MYSQL_BOTH)) {
	$dsql->ExecuteNoneQuery("OPTIMIZE TABLE $table[Name]");
}
?>