# simple-php-login-register
Login and register in PHP


# Need to change:

conexion.php
-Lines 4 and 5 whit connection data (User, Password).
-Line 13 whit name of Database.

# Important:

This code can be vulnerable.

Add security in 'login.php' whit:

  $user = mysql_real_escape_string($_POST['usuario']);
  $password = mysql_real_escape_string($_POST['password']);
  
  $login = "SELECT * FROM usuarios WHERE usuario = '".$user."' AND password = '".$password."'";

And in 'registro.php' add a select for check if $SESSION exist on DDBB.
