<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');


    //Apertura para lectura

    $f = fopen("archivo.txt", "r");

    $t = fread($f, filesize("archivo.txt"));

    echo $t;

    fclose($f);


    //apertura para escritura

    $f = fopen("nuevo.txt", "w");

    $lista = "papa,banana,manzana\n";
    fwrite($f, $lista);

    $lista = "gato,perro,humano\n";
    fwrite($f, $lista);

    $lista = "loca,perra,dea";
    fwrite($f, $lista);

    fclose($f);

    //apertura para agregado

    $f = fopen("archivo.txt", "a+");

    $lista = "papa, banana, manzana";
    $t = fwrite($f, $lista);

    $t = fread($f, filesize("archivo.txt"));

    echo $t;

    fclose($f);

    //leer archivo delimitado por comas

    $f = fopen("nuevo.txt", "r");

    $lista = array();

    $grilla = array();

    while (!feof($f))
    {
        $t = fgets($f);
        $lista = explode(",",$t);
        $grilla[] = $lista;
    }
    

    echo "<br><br>";
    var_dump($grilla);

    fclose($f);

    //mas de una linea



?>