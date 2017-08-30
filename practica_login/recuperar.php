<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>.:: Recuperar contraseña ::.</title>
  </head>
  <body style="text-align: center">

<h2>Recuperar contraseña</h2>
<form action="validacion.php?modo=recuperarContrasena" method="post">
  <label><strong>Email: </strong></label><input type="email" name="email"><br/>
  <label style="color:<?php
  if (isset($_SESSION['recuperarError'])) {
    if($_SESSION['recuperarError'] == "Datos incorrectos" OR "El email que has ingresado no se encuentra registrado."){
      echo 'red;';
    }else if ($_SESSION['recuperarError'] == 'Debes escribir tu correo.') {
      echo 'orange;';
    }else{
      echo '';
    }
  }else if (isset($_SESSION['recuperarExitoso'])){
    echo 'green;';
  }
  ?>">
  <?php
  if (isset($_SESSION['recuperarError'])) {
    echo $_SESSION['recuperarError'];
    unset($_SESSION['recuperarError']);
  }else if(isset($_SESSION['recuperarExitoso'])){
    echo $_SESSION['recuperarExitoso'];
    unset($_SESSION['recuperarExitoso']);
  } ?></label><br/>
  <a href="index.php"><button type="button">Cancelar</button></a><!-- Volver al login -->
  <input type="submit" value="Recuperar">
</form>
  </body>
</html>
