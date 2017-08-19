<?php
class Acceso{
  protected $user;
  protected $pass;
  protected $email;

  public function __construct($usuario,$password,$email){
    $this->user = $usuario;
    $this->pass = $password;
    $this->email = $email;
  }

  public function Login(){
    // Conexion a la DB.
    $db = new Conexion();
    // Consulta.
    $sql = $db->query("SELECT nombre,password FROM usuarios
      WHERE nombre = '$this->user' AND password = '$this->pass'");
    // Se llama la instancia recorrer para mostrar los datos arrojados por la consulta.
    $data = $db->recorrer($sql);
    //$data['nombre'];
    //$data['password'];
    if ($data['nombre'] === $this->user AND $data['password'] === $this->pass) {
      session_start();
      $_SESSION['user'] = $this->user;
      header('location: acceso.php');
    } else {
      session_start();
      $_SESSION['error'] = 'Datos incorrectos';
      header('location: index.php');
    }

  }

  public function Registro(){
    // Conexion a la DB.
    $db = new Conexion();
    // Insersion de datos.
    $sql = $db->query(" INSERT INTO usuarios (nombre, email, password)
                        VALUES ('$this->user','$this->email','$this->pass') ");
    if ($sql) {
      //echo 'Datos insertados correctamente.';
      session_start();
      $_SESSION['registroExitoso'] = 'Te has registrado exitosamente.';
      header('location: index.php');
    } else {
      //Los datos no fueron insertados;
      session_start();
      $_SESSION['registroError'] = 'Los datos no pudieron ser insertados, intenta de nuevo.';
      header('location: registro.php');
    }

  }

  public function ClavePerdida(){

  }
}
?>
