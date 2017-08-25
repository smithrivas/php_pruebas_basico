<?php
$a = 10;
$b = 15;

echo "<h3>IF compacto</h3>";

// IF normal
if ($a==$b) {
  echo "Son iguales";
} else {
  echo "No son iguales";
}

echo "<br/>";

// IF compacto
$a == $b ? $c = "Si son iguales" : $c = "No son iguales";

// Muestra resultado del IF compacto
echo $c;
echo "<hr/>";

for ($i=1; $i <= 10 ; $i++) {
  $res=$i*2;
  echo $i." x 2 =".$res."<br/>";
}
?>
