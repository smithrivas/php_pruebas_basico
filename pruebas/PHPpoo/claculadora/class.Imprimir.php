<?php
include 'class.Calcular.php';
class Imprimir extends Calcular{
  public function Sumar(){
    //Trae el proceso del metodo "Sumar()" de la clase padre.
    parent::Sumar();
    echo 'El resultado es: <strong>',$this->resultado.'</strong>';
  }
}
?>
