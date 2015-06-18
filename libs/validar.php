<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


$host="localhost";
$username="usulegal";
$password="dxPCAzmmmCVJcPbtBQ5EjJqd";
$db_name="legal";
$tbl_name="usuarios";

$conecta=mysqli_connect("$host","$username","$password") or die("Conexion no establecida");
mysqli_select_db($conecta, "$db_name") or die("Base de datos no disponible");

$myusername=$_POST['usuario'];
$mypassword=$_POST['clave'];

//espacio para revisar la proteccion contra injection

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conecta, $myusername);
$mypassword = mysqli_real_escape_string($conecta, $mypassword);
$sql="SELECT * FROM $tbl_name WHERE usua_login='$myusername' and usua_pasw='$mypassword'";
$result=mysqli_query($conecta, $sql);



// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// // Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword"); 
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
//header("location:/libs/login_success.php");
header("location:/legaliza.php");

}
else {
echo "Error en usuario o Password";
}

?>