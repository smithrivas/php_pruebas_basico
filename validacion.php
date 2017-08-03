<?php
require('includes/class.conexion.php');
//$db = new Conexion();

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
//$_GET['modo'];
switch ($modo) {
  case 'login':

    if (isset($_POST['login'])) {
        //echo "Existe login.";
        if (!empty($_POST['user']) AND !empty($_POST['pass'])){
          //Comprobar que campos no esten vacios;
          //echo "Campos llenados";
          include('includes/class.acceso.php');
          $login = new Acceso($_POST['user'],$_POST['pass']);
          $login->Login();
          }else{
            //echo "Campos vacios"----Redireccionar a formulario de inicio de sesion.
            session_start();
            $_SESSION['error'] = 'Debes llenar todos los datos';
            header('location: index.php');
          }
    }else{
      // Redireccionar a formulario de inicio de sesion.
      header('location: index.php');
    }
    break;

  case 'registrado':
    echo 'Esto es el registro';
    break;
  case 'claveperdida':
    echo 'Clave perdida';
    break;
  case 'salir':
    session_start();
    session_destroy();
    header('location: index.php');
    break;
  default:
    header('location: index.php');
    break;
}
?>
