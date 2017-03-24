<?php
session_start();

if(!isset($_SESSION['usuario'])) {
	header("Location: login.php");
	die;
}

?>

<html>
<body>
<h1>Bienvenido</h1><br>
<a href="logout.php">Cerrar sesión</a>
</body>
</html>