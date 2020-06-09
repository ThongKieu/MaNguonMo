<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Myconnection = "localhost";
$database_Myconnection = "quanlynhansu";
$username_Myconnection = "root";
$password_Myconnection = "";
$Myconnection = mysqli_connect($hostname_Myconnection, $username_Myconnection, $password_Myconnection);
mysqli_query($Myconnection,"SET NAMES 'utf8'");
