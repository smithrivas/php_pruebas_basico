<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>.:: Registro ::.</title>
  </head>
  <body style="text-align: center">
    <h2>Registro</h2>
    <form action="validacion.php?modo=registro" method="post">
      <label><strong>User: </strong></label><input type="text" name="user"><br/><br/>
      <label><strong>Email: </strong></label><input type="email" name="email"><br/><br/>
      <label><strong>Password: </strong></label><input type="password" name="pass"><br/>
      <label style="color:<?php
      if (isset($_SESSION['registroError'])) {
        if($_SESSION['registroError'] == "Debes llenar todos los campos."){
          echo 'orange;';
        }else if ($_SESSION['registroError'] == "Los datos no pudieron ser insertados, intenta de nuevo.") {
          echo 'red;';
        }else{
          echo '';
        }
      }
      ?>">
      <?php
      if (isset($_SESSION['registroError'])) {
        echo $_SESSION['registroError'];
        unset($_SESSION['registroError']);
      }
      ?></label><br/>
      <input type="hidden" name="registro" value="1">
      <a href="index.php"><button type="button">Cancelar</button></a>
      <input type="submit" value="Registrarme">
    </form>
  </body>
</html>
