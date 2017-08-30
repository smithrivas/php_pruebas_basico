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
          $login = new Acceso($_POST['user'],$_POST['pass'],null);
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

  case 'registro':
    //Valida que se haya enviado el input oculto "registro"
    if (isset($_POST['registro'])) {
      //Valida que esten rellenados todos los campos.
      if (!empty($_POST['user']) AND !empty($_POST['email']) AND !empty($_POST['pass'])) {
        include('includes/class.acceso.php');
        $registro = new Acceso($_POST['user'],$_POST['pass'],$_POST['email']);
        $registro->Registro();
      } else {
        session_start();
        $_SESSION['registroError'] = 'Debes llenar todos los campos.';
        header('location: registro.php');
      }


    } else {
      // Redireccionar a formulario de registro.
      header('location: registro.php');
    }


    break;
  case 'recuperarContrasena':
    //Si se envio datos por el formulario de recuperacion.
    if (isset($_POST['email'])) {
      //Si no esta vacio lo que se envio por formulario.
      if (!empty($_POST['email'])) {
        include('includes/class.acceso.php');
        $recuperar = new Acceso(null,null,$_POST['email']);
        $recuperar->Clave_perdida();
        
      //Si esta vacio lo que se envio por formulario, crear error y direccionar.
      } else {
        session_start();
        $_SESSION['recuperarError'] = 'Debes escribir tu correo.';
        header('location: recuperar.php');
      }
    } else {
      //Si no se envio nada redireccionar al formulario de recuperacion.
      header('location: recuperar.php');
    }

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
