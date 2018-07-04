<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_c = "localhost";
$database_c = "wlgl";
$username_c = "root";
$password_c = "12345678";
$c = mysql_pconnect($hostname_c, $username_c, $password_c) or trigger_error(mysql_error(),E_USER_ERROR); 
?>