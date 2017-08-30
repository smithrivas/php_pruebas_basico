<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>.:: Inicio ::.</title>
  </head>
  <body style="text-align: center">

<h2>Login</h2>
<form action="validacion.php?modo=login" method="post">
  <label><strong>User: </strong></label><input type="text" name="user"><br/><br/>
  <label><strong>Password: </strong></label><input type="password" name="pass"><br/>
  <label style="color:<?php
  if (isset($_SESSION['error'])) {
    if($_SESSION['error'] == "Datos incorrectos"){
      echo 'red;';
    }else if ($_SESSION['error'] == "Debes llenar todos los datos") {
      echo 'orange;';
    }else{
      echo '';
    }
  }else if (isset($_SESSION['registroExitoso']) OR isset($_SESSION['recuperarExitoso'])){
    echo 'green;';
  }
  ?>">
  <?php
  if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }else if(isset($_SESSION['registroExitoso'])){
    echo $_SESSION['registroExitoso'];
    unset($_SESSION['registroExitoso']);
  }else if (isset($_SESSION['recuperarExitoso'])) {
    echo $_SESSION['recuperarExitoso'];
    unset($_SESSION['recuperarExitoso']);
  } ?></label><br/>
  <input type="hidden" name="login" value="1">
  <input type="submit" value="Iniciar sesion"><br/><br/>
  <label>Olvidaste tu contraseña? </label><a href="recuperar.php"> Recuperar contraseña!</a><br/>
  <label>No tienes cuenta? </label><a href="registro.php"> Registrate aqui!</a>
</form>
  </body>
</html>
