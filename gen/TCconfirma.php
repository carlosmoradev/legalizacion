<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
include_once '../config/connection.php';

$consultaTC= "SELECT DOC_ID FROM documentos WHERE DOC_SIGLA = 'TC' ORDER BY DOC_ID DESC LIMIT1";
$ultimaTC=mysql_query($consultaTC);

echo "Consecutivo generado ";
while($datico=mysql_fetch_array($ultimaTC)){
	// echo $datico['DOC_ID'].;
}

// $ret = mysql_fetch_array($ultimaTC);
echo $ultimaTC;
?>