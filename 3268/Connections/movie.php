<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_movie = "localhost";
$database_movie = "movie";
$username_movie = "root";
$password_movie = "12345678";
$movie = mysql_pconnect($hostname_movie, $username_movie, $password_movie) or trigger_error(mysql_error(),E_USER_ERROR); 
?>