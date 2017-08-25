<?php
$color='';

if (!empty( $_COOKIE['color'] )) {
  $color = $_COOKIE['color'];
  // Asigna valor
}

if ( isset($_REQUEST['miradio']) ) {
  if ($_REQUEST['miradio'] == 1) {
    setcookie( 'color','red',time()+(60*60),'/' );
    // nombre asignado - valor asignado - tiempo activo - /=significa que tambien estara disponible en las carpetas interiores.
    header('location: cookie.php');
  } elseif ($_REQUEST['miradio'] == 2) {
    setcookie( 'color','blue',time()+(60*60),'/' );
    header('location: cookie.php');
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Cookie</title>
<style media="screen">
form{
  text-align: center;
}
body{
  background-color: <?php echo $color; ?>;
}
</style>
  </head>
  <body>
<form action="cookie.php" method="POST">
  <label><h2>Elegir color de fondo</h2></label>
  <label><input type="radio" name="miradio" value="1">Elegir color rojo.</label><br/>
  <label><input type="radio" name="miradio" value="2">Elegir color azul.</label><br/><br/>
  <label><input type="submit" value="Elegir color de fondo"></label>
</form>
  </body>
</html>
