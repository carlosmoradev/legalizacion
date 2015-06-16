<?php
session_start();
include_once '../config/connection.php';



// estructuro la tabla superior con el historico de los ultimos 3 documentos

$ultimosTres="select DOC_ID,DOC_TIPO,DOC_DESC,DOC_CREAC from documentos ORDER BY DOC_CREAC DESC LIMIT 3";
$resultado=mysql_query($ultimosTres);

while ($dato=mysql_fetch_array($resultado)){
	echo .$dato['DOC_ID'].;
}

// echo "<table border='1'><tr><td>Consecutivo</td<td>Tipo Documento</td><td>Fecha de creacion</td></tr>";

// while ($dato=mysql_fetch_array($resultado)) {
// 	# code...
// 	echo "<tr>";
// 	echo "<td>".$dato['DOC_ID']."</td>";
// 	echo "<td>".$dato['DOC_TIPO']."</td>";
// 	echo "<td>".$dato['DOC_CREAC']."</td>";
// 	echo "</tr>";
// }
// echo "</table>";
fin del espacio para mostrar los tres ultimos registros
?>