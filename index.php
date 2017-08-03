<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
  <style media="screen">
    h2,form{
        text-align: center;
    }
  </style>
  </head>
  <body style="background-color: rgba(121, 121, 121, 0.17);">

<h2>Login</h2>
<form action="validacion.php?modo=login" method="post">
  <label><strong>User: </strong></label><input type="text" name="user"></br></br>
  <label><strong>Pass: </strong></label><input type="password" name="pass"></br>
  <label style="color:<?php
  if (isset($_SESSION['error'])) {
    if($_SESSION['error'] == "Datos incorrectos"){
      echo 'red;';
    }else if ($_SESSION['error'] == "Debes llenar todos los datos") {
      echo 'orange;';
    }else{
      echo '';
    }
  }
  ?>">
  <?php
  if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  } ?><br/></label>
  <input type="hidden" name="login" value="1">
  <input type="submit" value="Iniciar sesion">
</form>
  </body>
</html>
