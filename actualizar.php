<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
</head>
<body>

<div id="main">

<?php
$nombre = $_POST["nombre"];
$cedula= $_POST["cedula"];
$tipo= $_POST["tipo"];
$fechanacimiento= $_POST["fechanacimiento"];
$idpersona= $_POST["idpersona"];

echo "Edicion en proceso..... </br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($idpersona,$nombre,$cedula,$tipo,$fechanacimiento);

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
