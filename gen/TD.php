<?php
session_start();
include_once 'config/connection.php';

// $ultimosTres="select DOC_TIPO,DOC_DESC,DOC_CREAC from documentos ORDER BY DOC_CREAC LIMIT 3";
// $resultado=mysql_query($ultimosTres);

mysql_query("INSERT INTO documentos (DOC_TIPO,DOC_SIGLA,DOC_DESC) values ('T_CREDITO','TC','OTRA DESCRIPCION')");

$ultimo_id=mysql_insert_id();
echo "Solicitud realizada $ultimo_id"
?>