<?php

$datos = file_get_contents("http://electronicanordeste.tplinkdns.com:5030/sArticulo.php");

$datos = json_decode($datos);

foreach($datos as $objeto)
{
    echo "<h1>$objeto->titulo</h1>";
    echo '<img src="'.$objeto->imagenArticulo.'"/>';
    echo "<h1>$objeto->NombreUsuario</h1>";
    echo '<img src="'.$objeto->imagenUsuario.'"/>';
}

?>