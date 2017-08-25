<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="text-align: center">
    <?php
    echo "<h1>TABLAS DE MULTIPLICAR</h1>";
    for ($i=1; $i <= 10 ; $i++) {
      echo "<h2>Tabla del ".$i."</h2>";
      echo $i." x 1 = ".($i*1)."<br/>";
      echo $i." x 2 = ".($i*2)."<br/>";
      echo $i." x 3 = ".($i*3)."<br/>";
      echo $i." x 4 = ".($i*4)."<br/>";
      echo $i." x 5 = ".($i*5)."<br/>";
      echo $i." x 6 = ".($i*6)."<br/>";
      echo $i." x 7 = ".($i*7)."<br/>";
      echo $i." x 8 = ".($i*8)."<br/>";
      echo $i." x 9 = ".($i*9)."<br/>";
      echo $i." x 10 = ".($i*10)."<br/>";
    }
    ?>
  </body>
</html>
