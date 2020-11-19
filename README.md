# Description
Login and register template programmed in PHP.

# Usage

conexion.php:
1. Add your mySQL login credentials.
```
$servername = "localhost";
$username = "usuario";
$password = "password";
```
2. Add the name of your database.
```
$dbname = mysql_select_db("nombrebasededatos");
```
# Important!

**This code can be vulnerable.**

1. Add security in 'login.php' with:

```
  $user = mysql_real_escape_string($_POST['usuario']);
  $password = mysql_real_escape_string($_POST['password']);
  
  $login = "SELECT * FROM usuarios WHERE usuario = '".$user."' AND password = '".$password."'";
 ```

2. In 'registro.php' add a select for check if $SESSION exist on DDBB.
