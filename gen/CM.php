<?php
session_start();
include_once '../config/connection.php';

// $ultimosTres="select DOC_TIPO,DOC_DESC,DOC_CREAC from documentos ORDER BY DOC_CREAC LIMIT 3";
// $resultado=mysql_query($ultimosTres);

 mysql_query("INSERT INTO documentos (DOC_TIPO,DOC_SIGLA,DOC_DESC) values ('CAJA_MENOR','CM','GASTO DE CAJA MENOR')");

	
/* Redirect browser */
header("Location: CMconfirma.php");
 
/* Make sure that code below does not get executed when we redirect. */
exit;

$ultimo_id=mysql_insert_id();
echo "Formato Legalizacion Caja Menor No $ultimo_id"
?>
