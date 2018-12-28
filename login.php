<?php
	require("includes/conexion.php");
	if(isset($_POST['acceder'])){
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		if (strlen($usuario)>0 && strlen($clave)>0) {
				$sql = "select * from usuarios where nombre='$usuario' and clave='$clave'";
				$query = $cnx->query($sql);

				if ($query->num_rows > 0) {
					$_SESSION['active'] = 1; //se ha iniciado la sesion
					header("Location: index.php");
					exit;
				}
				else{
					echo "<b>No se ha loggeado correctamente</b>";
				}
		}
		else echo "<b>Debes introducir un usuario y una clave</b>";
	}
?>
<!DOCTYPE html5>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>Formulario de login</title>
	</head>
	<body>
		<form id="login" name="form1" action="login.php" method="post">
			<div class="form_settings">
	            <p><span>Usuario</span><input class="contact" type="text" name="usuario"/></p>
	            <p><span>Clave</span><input class="contact" type="text" name="clave" /></p>
	            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="acceder" value="Validar" /></p>
          </div>





		</form>
		
	</body>

</html> 