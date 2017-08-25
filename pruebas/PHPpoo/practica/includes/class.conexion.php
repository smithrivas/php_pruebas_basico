<?php
// mysqli= Clase nativa de php.
class Conexion extends mysqli{

  public function __construct(){
    // Accede al constructor de la clase padre( mysqli ).
    // 4 parametros en el constructor heredado, $servidor *localhost o 127.0.0.1, $usuario, $contraseña, $nombre base de datos.
    parent::__construct('localhost','root','','cursophp');
    // Todos los envios de datos se realizen atravez del cotejamiento "utf8".
    $this->query("SET NAMES 'utf8';");
    $this->connect_errno ? die('Error al conectarse.') : $x='Conectado exitosamente.';
    //echo $x;
    //unset($x);
  }
}
?>
