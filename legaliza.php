<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8" />
	<title>Legalización de Documentos</title>
	<link rel="stylesheet" href="static/styles/normalize.css">
	<link rel="stylesheet" href="static/styles/design.css">
	// <script language="JavaScript">
	// self.moveTo(screen.width/2-400,screen.height/2-300)
	// self.resizeTo(width="800",height="600")
	// </script>
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
<section id="listadoTipos">
	<select name="listadoTDoc">
	<?php
	while($fila=mysql_fetch_array($listado)){ ?>
		<option value="<?php echo $fila['DOC_TIPO']; ?>" > 
			<?php echo $fila['DOC_TIPO']; ?> 
		</option>
	<?php 
	}
	$opcion = $_POST['listadoTDoc'];

	?>
	</select>
	
</section>

<section id="gastoSeleccionado">nombre seleccionado</section>
<!-- este espacio contiene el nombre seleccionado y la sigla -->

<section>fecha del gasto</section>
<!-- espacio para la fecha de consumo -->
<input type="date" name="fecha" value="<?php echo date("Y-m-d");?>">

<nav id="selectorGasto">
	<ul>
		<li><a href="#" id="gReembolsable"></a>Gasto Reembolsable</li>
		<li><a href="#" id="gViaje"></a>Gasto viaje</li>
		<li><a href="#" id="tCredito"></a>Tarjeta Credito</li>
		<li><a href="#" id="tDebito"></a>Tarjeta Debito</li>
		<li><a href="#" id="cMenor"></a>Caja Menor</li>
	</ul>
</nav>

<section>termina</section>
<!-- Graba los cambios o los cancela -->
</body>