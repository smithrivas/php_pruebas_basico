<?php
echo "<h3>FOREACH</h3>";
$z = array(
  "Brayan" => 'hombre',
  "Emilce" => 'mujer',
  "Laura" => 'niña'
);
echo $z["Laura"]."<hr/>";
foreach( $z as $llave=>$valor ){
  echo $llave." :: ".$valor."<br/>";
}
echo "<hr/>";

$z = array(
  "Brayan" => array('sexo' => "masculino", 'edad' => "23", 'color' => "<strong style=\"color: darkred\">trigueño</strong>" ),
  "Emilce" => array('sexo' => "femenino", 'edad' => "41", 'color' => "trigueño" ),
  "Laura" => array('sexo' => "femenino", 'edad' => "16", 'color' => "blanco" ),
  "Carlos" => array('sexo' => "masculino", 'edad' => "28", 'color' => "trigueño" ),
  "Marisol" => array('sexo' => "femenino", 'edad' => "48", 'color' => "trigueño" ),
  "Vanessa" => array('sexo' => "femenino", 'edad' => "12", 'color' => "blanco" ),
  "Fernando" => array('sexo' => "masculino", 'edad' => "48", 'color' => "trigueño" ),
  "Claudia" => array('sexo' => "femenino", 'edad' => "56", 'color' => "trigueño" ),
  "Yina" => array('sexo' => "femenino", 'edad' => "16", 'color' => "blanco" )
);
foreach ($z as $nombre => $datos) {
  echo "<strong>".$nombre."</strong> es de sexo ".$datos["sexo"].", tiene ".$datos["edad"]." años y su color de piel es ".$datos["color"].".<br/>";
}
?>
