<?php


	$host   = "localhost";
	$user   = "usulegal";
	$passwd = "dxPCAzmmmCVJcPbtBQ5EjJqd";
	$db     = "legal";

$connect = mysql_connect($host, $user, $passwd, $db);
mysql_select_db($db, $connect) or die("error en la conexion");
// $con = mysqli_connect($host, $user, $passwd, $db);

// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

?>