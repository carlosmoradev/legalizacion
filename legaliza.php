<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8" />
	<title>Legalización de Documentos</title>
	<link rel="stylesheet" href="static/styles/normalize.css">
	<link rel="stylesheet" href="static/styles/design.css">
	<script type="text/javascript" src="static/js/legaliza.js"></script>
	<script type="text/javascript">
	var opciones="left=100,top=100,width=250,height=150";
	asignaVentana = window.open("","",opciones);
	asignaVentana.moveTo(400,100);
	
	</script>
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
<section  id="explicacionLegaliza" class="espacioIconosGastos">
	<h2>Procedimiento</h2>
	<p>Seleccione el tipo de gasto que desea legalizar, 
		luego la fecha del consumo y finalmente solicite la el formato de legalizacion correspondiente</p>
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
	<a href="#" ><img src="/static/images/gastosViaje.png"></a>
	<figcaption>
		Gastos de Viaje
	</figcaption>
</figure>

<figure id="cajaMenor" class="espacioIconosGastos">
	<a href="#" ><img src="/static/images/cajaMenor.png"></a>
	<figcaption>
		Ajuste Caja Menor
	</figcaption>
</figure>

<figure id="tarjetaCredito" class="espacioIconosGastos">
	<a href="#" ><img src="/static/images/tarjetaCredito.png"></a>
	<figcaption>
		Gastos con Tarjeta de Crédito
	</figcaption>
</figure>

<!-- <section id="fechaGasto" class="fecha"> -->
<!-- espacio para la fecha de consumo -->
	<!-- <input id="solicitaFecha" type="text" name="fecha"> -->
	<!-- <p>fecha del gasto</p> -->
		<!-- <section id="solicitaFormato"> -->
		<!-- <p>Solicitar Formato</p> -->
		<!-- </section> -->
<!-- </section> -->

<figure id="tarjetaDebito" class="espacioIconosGastos">
	<a href="#" ><img src="/static/images/tarjetaDebito.png"></a>
	<figcaption>
		Gastos con Tarjeta Débito
	</figcaption>
</figure>
</section>

<section>termina</section>
<!-- Graba los cambios o los cancela -->
</body>
