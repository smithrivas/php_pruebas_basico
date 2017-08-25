<?php

// Objeto que contendra todo lo referente.
class Automovil{

  /* Propiedades o Atributos
  *private: el atributo solo se puede usar dentro de la clase.
  *public:el atributo puede ser llamado desde dentro o desde fuera de la clase u objeto.
  */
  private $color;
  private $velocidad;
  private $motor;
  public $prueba;

  // Metodo
  public function Arrancar($a,$b){
    $this->velocidad = $a;
    $this->motor = $b;
    echo 'Arranca a la velocidad de ',$this->velocidad,' debido a que posee un motor ',$this->motor;
  }

  public function DeterminarColor($color){
    $this->color = $color;
    echo ', su color es ',$this->color;
  }

  public function Frenar(){
    echo ' y ha frenado.';
  }

  public function MiMetodo($parametro){
    $this->prueba = $parametro;
    return $this->prueba;
  }
}

class Moto extends Automovil{
    private $ruedas;
/*
    public function Ruedas($parametro){
      $this->ruedas = $parametro;
      return $this->ruedas;
    }
*/
}


echo "<h2>Ferrari</h2>";
// Crear una instancia: Cuando se define el objeto.
$ferrari = new Automovil();
$ferrari->Arrancar('60 km/h','Tetracilindrico');
$ferrari->DeterminarColor('Rojo');
$ferrari->frenar();

echo "<h2>Moto</h2>";
$moto = new Moto();
/*
echo 'La moto tiene ',$moto->Ruedas('2'),' ruedas.<br/>';
$moto->Arrancar('60 Km/h','4 cilindros');
$moto->DeterminarColor('Azul');

$ferrari->prueba = "Prueba public";
echo $ferrari->prueba;
echo "<hr/>";

echo $ferrari->MiMetodo("Hola segunda prueba");
*/
?>
