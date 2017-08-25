<?php

class Persona{
  private $nombre;
  private $apellido;

// Funciona para darle el valor a los atributos de una vez y poder usarlos de una vez en los metodos.
  public function __construct($nombre,$apellido){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }

  public function Nombre(){
      return $this->nombre;
  }

  public function Apellido(){
      return $this->apellido;
  }

}

echo "<h2>Prueba __construct( )</h2>";
$persona1 = new Persona('Smith','Rivas');
$persona2 = new Persona('Brayan','Bustos');
echo 'La persona se llama ',$persona1->Nombre(),' y se apellida ',$persona1->Apellido(),'.<br/>';
echo 'La persona se llama ',$persona2->Nombre(),' y se apellida ',$persona2->Apellido(),'.<br/>';

?>
