<?php
/*
// Metodo GET
$_GET['user'];
$_GET['pass'];
echo 'El usuario es ',$_GET['user'],' y contraseña ',$_GET['pass'];
*/

// Metodo POST
$user = $_POST['user'];
$pass = $_POST['pass'];

if ( empty($user) || empty($pass) ) {
  echo '<h1 style="text-align: center; color: darkorange">Ingreso incorrecto!</h1>';
  echo '<h3 style="text-align: center;">No puedes dejar ningun campo vacio.</h3>';
} else {
      if ($user=='Brayan' && $pass=='smith93') {
        echo '<h1 style="text-align: center; color: darkgreen">Ingreso exitoso!</h1>';
        //header('location: ../inicio.php');
      }else {
        echo '<h1 style="text-align: center; color: darkred">Ingreso incorrecto!</h1>';
        echo '<h3 style="text-align: center;">El usuario o la contraseña que has ingresado es incorrecto.</h3>';
        //header('location: ../ingreso.html');
      }
}

// Usuario: Brayan
// COntraseña: smith93
?>
