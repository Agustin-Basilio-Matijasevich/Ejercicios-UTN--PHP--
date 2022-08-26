<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include "librerias.php";
    ?>
    <title>LAB4</title>
</head>
<body>
    <?php

        echo calcular (2,5);

        $obj = new persona("pablo", "3624165279", "La Esquina 34");

        echo "<h1> Objeto </h1>";
        echo "<h2>" . $obj -> mostrar() . "</h2>";

        $personas = new personas();
        $personas -> nuevo("juan", "45252525", "La tijuana 55");
        $personas -> nuevo("juen", "45252525", "La tijuana 55");
        $personas -> nuevo("juun", "45252525", "La tijuana 55");
        $personas -> nuevo("jeen", "45252525", "La tijuana 55");
        $personas -> nuevo("atu", "45252525", "La tijuana 55");

        echo "<h1> Lista </h1>";
        echo "<h3>" . $personas -> mostrar() . "</h3>";

    ?>
</body>
</html>