<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_me = "localhost";
$database_me = "movie";
$username_me = "root";
$password_me = "12345678";
$me = mysql_pconnect($hostname_me, $username_me, $password_me) or trigger_error(mysql_error(),E_USER_ERROR); 
?>