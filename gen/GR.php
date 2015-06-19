<?php
session_start();
include_once '../config/connection.php';

// $ultimosTres="select DOC_TIPO,DOC_DESC,DOC_CREAC from documentos ORDER BY DOC_CREAC LIMIT 3";
// $resultado=mysql_query($ultimosTres);

 mysql_query("INSERT INTO documentos (DOC_TIPO,DOC_SIGLA,DOC_DESC) values ('GASTOS_VIAJE','GV','GASTOS DE VIAJE')");

	
/* Redirect browser */
header("Location: GRconfirma.php");
 
/* Make sure that code below does not get executed when we redirect. */
exit;

$ultimo_id=mysql_insert_id();
echo "Formato Legalizacion Gastos Reembolsables No $ultimo_id"
?>
