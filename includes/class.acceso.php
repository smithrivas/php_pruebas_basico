<?php
class Acceso{
  protected $user;
  protected $pass;

  public function __construct($usuario,$password){
    $this->user = $usuario;
    $this->pass = $password;
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
    if ($data['nombre'] === $this->user AND $data['password'] == $this->pass) {
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

  }

  public function ClavePerdida(){

  }
}
?>
