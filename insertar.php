<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Insertar Demo</h1>


<form action="guardarDemo.php" method="post">
            <fieldset>
		<label>Usuario</label>
		<input type="text" name="nombre" autofocus required /></br>
		</br>

		<label>cedula</label>
		<input type="text" name="cedula" autofocus required /></br>
		</br>
		<label>tipo</label>
		<input type="text" name="tipo" autofocus required /></br>
		</br>

		<label>Fecha Nacimiento</label>
		<input type="text" name="fechanacimiento" autofocus required /></br>
		</br>
                <button type="submit">Guardar</button>
        </fieldset>
	</form>

 

</body>
</html>
