<?php
	$host   = "localhost";
	$user   = "usulegal";
	$passwd = "dxPCAzmmmCVJcPbtBQ5EjJqd";
	$db     = "legal";

$connect = mysql_connect($host, $user, $passwd, $db);
mysql_select_db($db, $connect) or die("error en la conexion");
?>