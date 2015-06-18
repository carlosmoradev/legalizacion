<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../static/styles/normalize.css">
	<link rel="stylesheet" href="../static/styles/design.css">
	</head>
<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$link = mysqli_connect("localhost","usulegal","dxPCAzmmmCVJcPbtBQ5EjJqd");
mysqli_select_db($link,"legal");
// session_start();
// include_once '../config/connection.php';

// $result = mysqli_query($link, "SELECT * FROM documentos WHERE DOC_SIGLA = 'TC' ORDER BY DOC_ID DESC LIMIT1");
$result = mysqli_query($link, "SELECT * FROM documentos WHERE DOC_SIGLA = 'TC' ORDER BY DOC_ID DESC");
mysqli_data_seek($result, 0);
$extraido = mysqli_fetch_array($result);

echo "Su consecutivo para Legalización de gastos en Tarjeta de Crédito es TC".$extraido['DOC_ID']."<br/> ";

?>
</body>
</html>