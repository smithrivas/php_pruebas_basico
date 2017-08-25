<?php
echo $_COOKIE['color'];

// Borrar COOKIE
setcookie('color',null,time()-1,'/');
?>
