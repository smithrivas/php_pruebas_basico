<?php
class Calcular{
  protected $num1;
  protected $num2;
  protected $resultado;

  public function __construct($a,$b){
    $this->num1 = $a;
    $this->num2 = $b;
  }

  public function Sumar(){
    $this->resultado = $this->num1 + $this->num2;
    return $this->resultado;
  }
}
?>
