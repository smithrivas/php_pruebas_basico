<?php
echo "<h2>Calculadora</h2>";
include 'class.Imprimir.php';
$calculadora = new Imprimir(8,2);
$calculadora->Sumar();

echo '<h2>Estatico</h2>';
include 'class.Estatico.php';
/*
$objeto = new Estatico('Esto es lo de estatico.');
echo $objeto->Impreso();
 */
echo Estatico::ImpresoDos('Esto es lo que paso por el static function.');
?>
