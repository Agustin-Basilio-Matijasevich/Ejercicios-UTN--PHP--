<!DOCTYPE html>

<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include ("colaImpresion.php");
    include ("documentos.php");

    $colaI = new colaImpresion();

    $colaI -> nuevo(new html("21/9/2022", "Agustin", "<h1>Esto es un h1 de prueba</h1>"));
    $colaI -> nuevo(new imagen("10/11/2020", "ElBaso", '<img src="imagen.jpg">'));

    $tabla[0][0] = "Columna 0 Fila 0";
    $tabla[1][0] = "Columna 1 Fila 0";
    $tabla[2][0] = "Columna 2 Fila 0";
    $tabla[0][1] = "Columna 0 Fila 1";
    $tabla[1][1] = "Columna 1 Fila 1";
    $tabla[2][1] = "Columna 2 Fila 1";

    $colaI -> nuevo(new tabla("7/5/1982", "General Guy", $tabla));

    $colaI -> imprimir();

?>

</html>