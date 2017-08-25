<?php
include 'class.Primera.php';
include 'class.Segunda.php';
// El parametro que se pasa por construct se debe ingresar al instanciar.
$objeto = new Segunda('Primer parametro.','Segundo parametro.');
$objeto->Imprimir();
?>
