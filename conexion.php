<?php

$servername = "localhost";
$username = "usuario";
$password = "password";

$conn = mysql_connect($servername, $username, $password);
if(!$conn) {
    die('Error al conectar al servidor: ' . mysql_error());
	
}

$dbname = mysql_select_db("nombrebasededatos");
if(!$dbname) {
    die("Imposible seleccionar database");
}
?>