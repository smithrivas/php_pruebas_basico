<?php
session_start();

if (isset($_SESSION['user'])) {
  echo 'Bienvenido <strong>',$_SESSION['user'],'</strong>, has iniciado session.<br/><br/>';
} else {
  //session_start();
  session_destroy();
  header('location: index.php');
}
// redirecciona a validacion para destruir session.
echo '<a href="validacion.php?modo=salir"><button type="button">Cerrar session</button></a>';
?>
