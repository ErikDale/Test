<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Hogwartskobling = "localhost";
$database_Hogwartskobling = "studentregister";
$username_Hogwartskobling = "root";
$password_Hogwartskobling = "";
$Hogwartskobling = mysql_pconnect($hostname_Hogwartskobling, $username_Hogwartskobling, $password_Hogwartskobling) or trigger_error(mysql_error(),E_USER_ERROR); 
?>