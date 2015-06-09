<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8" />
	<title>Legalización de Documentos</title>
	<link rel="stylesheet" href="static/styles/normalize.css">
	<link rel="stylesheet" href="static/styles/design.css">
<?php
session_start();
include_once 'config/connection.php';

?>
	</head>

<body>
<div>
	<header class="headerBase">
	<h1>Legalización de documentos</h1>	
	</header>
<?php

// estructuro la tabla superior con el historico de los ultimos 3 documentos

$query="select * from documentos ORDER BY DOC_CREAC LIMIT 3";
$resultado=mysql_query($query);

echo "<table border='1'><tr><td>Tipo Documento</td><td>Descripcion Gasto</td><td>Fecha de creacion</td></tr>";

while ($dato=mysql_fetch_array($resultado)) {
	# code...
	echo "<tr>";
	echo "<td>".$dato['DOC_TIPO']."</td>";
	echo "<td>".$dato['DOC_DESC']."</td>";
	echo "<td>".$dato['DOC_CREAC']."</td>";
	echo "</tr>";
}
echo "</table>";
//fin del espacio para mostrar los tres ultimos registros




?>
<section id="ConsultaHistoria">
<a href="#" id="consultaHistorial">Consulta historial</a>
</section>
<?php
//Espacio para lista desplegable de tipos de documento

$consulta_listado='select * from documentos';
$listado=mysql_query($consulta_listado);
?>
<section id="ListadoTipos">
<select name='listadoTDoc'>
<?php
while($fila=mysql_fetch_array($listado)){ ?>
	<!-- // echo "<option value='".$fila['DOC_TIPO']."'>".$fila['DOC_TIPO']."</option"; -->
	<option value="<?php echo $fila['DOC_TIPO']; ?>" > <?php echo $fila['DOC_TIPO']; ?> </option>
	<?php
}
?>
</select>
</section>

</body>