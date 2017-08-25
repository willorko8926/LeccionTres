<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>

<h1>Editar Demo</h1>

<?php
$id = $_GET["id"];
echo "valor de id es ". $id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);

?>

<form action="actualizar.php" method="post">
            <fieldset>
		<label>Identificacion</label>
		<input type="text" name="idpersona" value="<?php echo $ObjDemo->getIdPersona(); ?>" readonly /></br>

		<label>Usuario</label>
		<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required /></br>

		<label>Cedula</label>
		<input type="text" name="cedula" value="<?php echo $ObjDemo->getCedula(); ?>" autofocus required /></br>
		</br>
		<label>tipo</label>
		<input type="text" name="tipo" value="<?php echo $ObjDemo->getTipo(); ?>" autofocus required /></br>
		</br>
		<label>Fecha Nacimiento</label>
		<input type="text" name="fechanacimiento" value="<?php echo $ObjDemo->getFechanacimiento(); ?>" autofocus required /></br>
		</br>
		
		</br>


                <button type="submit">Actualizar</button>
		</br></br>
                <a href='index.php'>Cancelar</a>
        </fieldset>
	</form>

 

</body>
</html>




