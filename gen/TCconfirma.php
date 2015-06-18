<html>
	<head>
		<meta charset="utf-8" />
	</head>
<body>
<?php
$link = mysqli_connect("localhost","usulegal","dxPCAzmmmCVJcPbtBQ5EjJqd");
mysqli_select_db($link,"legal");
// $result = mysqli_query($link, "SELECT * FROM documentos WHERE DOC_SIGLA = 'TC' ORDER BY DOC_ID DESC LIMIT1");
$result = mysqli_query($link, "SELECT * FROM documentos WHERE DOC_SIGLA = 'TC' ORDER BY DOC_ID DESC");
mysqli_data_seek($result, 0);
$extraido = mysqli_fetch_array($result);

echo "- Documento: ".$extraido['DOC_ID']."<br/> ";

?>
</body>
</html>