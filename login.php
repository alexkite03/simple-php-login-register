<?php
session_start();
include ("conexion.php");

if(isset($_SESSION['usuario'])) {           
	die(header("Location: index.php"));
}

if(isset($_POST['usuario'], $_POST['password'])) {
	
			$login = "SELECT * FROM usuarios WHERE usuario = '".$_POST['usuario']."' AND password = '".$_POST['password']."'";
			$result = mysql_query($login);	
			
			if($result) {
				if(mysql_num_rows($result) == 1){
					$row = mysql_fetch_assoc($result);
					$_SESSION['usuario'] = $row['usuario'];
					header('Location: index.php');
					exit();
				} else{
					echo ("Error al guardar variable SESSION o redireccionar.");
				}
			} else {
					echo ("Usuario o contraseña incorrectos.");
			}
}

?>

<html>
<body>

<h1> LOGIN </h1>
<form action="" method="post">
Nombre: <input type="text" name="usuario" required><br>
Contraseña: <input type="password" name="password" required><br>
<input type="submit" name="Submit" value="Entrar">
</form>

</body>
</html>