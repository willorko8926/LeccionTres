<?php
  session_start();
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>

<body>
	

<?php
	if(isset($_SESSION['MiSesion'])){
	echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ")
			[<a href='salir.php'>Salir</a>]";
	echo "(" . $_SESSION['MiSesion']. ")
			[<a href='insertar.php'>Nuevo</a>]";
	
	include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo " Id : " .$c->getIdPersona();
echo "<br>"; //* Esto es un salto de linea
  echo " Nombre : " .$c->getNombre();
echo "<br>"; //* Esto es un salto de linea
  echo " Tipo : " .$c->getTipo();
echo "<br>"; //* Esto es un salto de linea
  echo " Cedula : " .$c->getCedula();
echo "<br>"; //* Esto es un salto de linea
  echo " Fecha Nacimiento : " .$c->getFechanacimiento();
echo "<br>"; //* Esto es un salto de linea

echo "<a href='editar.php?id=".$c->getIdPersona()."'> Editar </a>";
echo "<a href='eliminar.php?id=".$c->getIdPersona()."'>Eliminar</a>";                                     
echo "</div>"; 
}


	}else{
?>

<form action="login.php" method="post">
            <fieldset>
		<label>Usuario</label>
		<input type="text" name = "Usuario"/></br></br>
                <label>Clave</label>
		<input type="text" name = "Clave"/></br>
		</br>
                <button type="submit">Ingresar</button>
        </fieldset>
</form> 

<?php } ?>  

</body>
</html>
