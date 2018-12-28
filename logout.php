<?php
	require("includes/conexion.php");
	if (isset($_SESSION['active'])  && !empty($_SESSION['active']) && $_SESSION['active'] == 1)
	{
	   //usuario loggeado, desloggear
		$_SESSION['active'] = 0;
		header("Location: login.php");
	}
?>