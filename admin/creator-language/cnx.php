<?php
$hostname_cnx = "localhost";
$database_cnx = "543591_luy";
// local
$username_cnx = "root";
$password_cnx = "";

// arriba
// $username_cnx = "luyDBU";
// $password_cnx = "cUTFsMuxqbRSqm2v";

$cnx = mysql_pconnect($hostname_cnx, $username_cnx, $password_cnx) or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_select_db($database_cnx, $cnx);
$query_rsUTF8 = sprintf("SET NAMES '%s'", "utf8");
$rsUTF8 = mysql_query($query_rsUTF8, $cnx) or die(mysql_error().$query_rsUTF8);
?>