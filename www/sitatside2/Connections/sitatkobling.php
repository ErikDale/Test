<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sitatkobling = "localhost";
$database_sitatkobling = "sitatregister";
$username_sitatkobling = "root";
$password_sitatkobling = "";
$sitatkobling = mysql_pconnect($hostname_sitatkobling, $username_sitatkobling, $password_sitatkobling) or trigger_error(mysql_error(),E_USER_ERROR); 
?>