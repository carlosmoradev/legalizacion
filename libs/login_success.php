<?php

ini_set('display_errors',1);
error_reporting(E_ALL);


session_start();
// if(!session_is_registered(myusername)){
if (!session_id()){
// header("location:main_login.php");
	echo "Debe iniciar sesion";
	}
	else{
		echo "Insert coin";
	}
?>

<html>
<body>
Login Successful
</body>
</html>