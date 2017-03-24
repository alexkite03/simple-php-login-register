<?php

session_start();

include ("conexion.php");

if(isset($_SESSION['usuario'])) {
	die(header("Location: index.php"));
}

if(isset($_POST['usuario'], $_POST['password'],$_POST['vpassword'], $_POST['email'], $_POST['vemail'])) {
	
			$comprobarnombre = "SELECT * FROM usuarios WHERE usuario = '".$_POST['usuario']."'";
			$result = mysql_query($comprobarnombre);	
			
			if($result) {
				if(mysql_num_rows($result) == 1){
					echo ("Nombre de usuario en uso");
				} else{
					$comprobaremail = "SELECT * FROM usuarios WHERE usuario = '".$_POST['email']."'";
					$resultado = mysql_query($comprobaremail);	
						if(mysql_num_rows($result) == 1){
						echo ("Email en uso");
						} else{
							if($_POST['password'] == $_POST['vpassword'] && $_POST['email'] == $_POST['vemail']){
								$insertardatos = "INSERT INTO usuarios (usuario, password, email) VALUES ('".$_POST['usuario']."', '".$_POST['password']."', '".$_POST['email']."')";
								$insertando = mysql_query($insertardatos);
								header('Location: login.php');
								exit();
								}else{
								echo ("Las contraseñas o el email no coinciden");
							}
						}
				}
			}
}


?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<h1> Registro </h1>
<form action="" method="post">
Usuario: <input type="text" name="usuario" required><br>
Contraseña: <input type="password" name="password" required><br>
Verificar contraseña: <input type="password" name="vpassword" required><br>
Email: <input type="email" name="email" required><br>
Verificar email: <input type="email" name="vemail" required><br>
<input type="submit" name="Submit" value="Registrar">
</form>

</body>
</html>