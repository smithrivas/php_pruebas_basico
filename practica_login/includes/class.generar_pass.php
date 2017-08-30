<?php
class Generarpass{

  private $cadena;
  private $longitud;
  private $passw;

  public function __construct(){
    //Cadena de caracteres de la cual se generara el pass.
    $this->cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    //Inicialmente vacio.
    $this->passw = '';
  }

  public function Nueva_pass($long){
    //Variable que contiene la cantidad(digitos) de caracteres en la cadena.
    $lng_cadena = strlen($this->cadena);
    //Longitud contienen la cantidad de caracteres que tendra el pass generado.
    $this->longitud = $long;

    //mt_rand *aleatorio* = contiene 2 parametros, desde 0 hasta la Lonitud de la cadena en este caso o la que queramos nosotros.
    for ($i=1; $i <= $this->longitud ; $i++) {
      $aleatorio = mt_rand(0,$lng_cadena);
      //substr(3 parametros)/array o cadena que contiene los caracteres desde los cuales se generara aleatoriamente el resultado.
      //Posicion del caracter(array)
      //Cantidad de caracteres a mostrar
      $this->passw .= substr($this->cadena,$aleatorio,1);
    }
    return $this->passw;
  }
}
?>
