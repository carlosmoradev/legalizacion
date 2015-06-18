<?php
session_start();
include_once 'config/connection.php';

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$autentica="select usua_login, usua_paswd from usuarios where usua_login='$usuario' and usua_paswd='$clave'";
$validacion=mysql_query($autentica);

if($reg=mysql_fetch_array($autentica))
{
$_SESSION[‘nombre’]=$reg[‘nombres’];
$_SESSION[‘apellido’]=$reg[‘apellidos’];

echo”<script>location.href=’legaliza.php';</script
}
else
{
echo”<script>alert(‘usuario o clave incorrectos’)</script>”;
echo”<script>location.href=’index.php'</script>;
}

?>