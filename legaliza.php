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

$ultimosTres="select * from documentos ORDER BY DOC_CREAC LIMIT 3";
$resultado=mysql_query($ultimosTres);

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


<section id="gastoSeleccionado"></section>
<!-- este espacio contiene el nombre seleccionado y la sigla -->
<section id="seleccionIconos">

<figure id="gastosReembolsables" class="espacioIconosGastos">
	<a href="#" ><img src="/static/images/gastosReembolsables.png" class="iconoGastos"></a>
	<figcaption>
		Gastos Reembolsables
	</figcaption>
</figure>

<figure id="gastosViaje" class="espacioIconosGastos">
	<img src="/static/images/gastosViaje.png">
	<figcaption>
		Gastos de Viaje
	</figcaption>
</figure>

<figure id="cajaMenor" class="espacioIconosGastos">
	<img src="/static/images/cajaMenor.png">
	<figcaption>
		Ajuste Caja Menor
	</figcaption>
</figure>

<figure id="tarjetaCredito" class="espacioIconosGastos">
	<img src="/static/images/tarjetaCredito.png">
	<figcaption>
		Gastos con Tarjeta de Crédito
	</figcaption>
</figure>

<section id="fechaGasto" class="fecha">
<!-- espacio para la fecha de consumo -->
<input type="date" name="fecha" value="<?php echo date("Y-m-d");?>">
<p>fecha del gasto</p>
</section>

<figure id="tarjetaDebito" class="espacioIconosGastos">
	<img src="/static/images/tarjetaDebito.png">
	<figcaption>
		Gastos con Tarjeta Débito
	</figcaption>
</figure>
</section>

<section>termina</section>
<!-- Graba los cambios o los cancela -->
</body>
