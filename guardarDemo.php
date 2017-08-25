<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["nombre"];
$valor2 = $_POST["cedula"];
$valor3 = $_POST["tipo"];
$valor4 = $_POST["fechanacimiento"];

echo 'Hola ' .htmlspecialchars($valor) . '!';
echo 'cedula ' .htmlspecialchars($valor2) . '!';
echo 'Tipo ' .htmlspecialchars($valor3) . '!';
echo 'Fecha Nacimiento ' .htmlspecialchars($valor4) . '!';
include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($valor,$valor2,$valor3,$valor4);

echo "Se ha guardado correctamente </br>";
?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
