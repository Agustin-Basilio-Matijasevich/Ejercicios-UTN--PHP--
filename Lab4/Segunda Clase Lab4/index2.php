<?php
    echo "Hola Mundo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
</head>
<body>
    <h1>El Titulo</h1>
    <p>Este es un Parrafo con una frase creativa ahre.....</p>

    <?php

        //PHP tiene los mismos comentarios que C#
        # Tambien se puede usar numeral

        $contador = 0;

        for ($i=0; $i < 10; $i++)
        { 
            $contador++;

            if (($contador%2) == 0)
            {
                echo "Contador es Par: ".$contador."<br>";
            }
            else
            {
                echo "Contador es Impar: ".$contador."<br>";
            }

        }

    ?>

    <!-- La Diferencia entre post y get para mandar datos es que en e get los datos se mandan por la url asi que son visibles y se pueden dar links con datos cargados -->

    <table border="1">
    <tbody>
        <?php
            include ("cuerpotabla.php");
        ?>
    </tbody>
    </table>


    <!--En HTML se comenta con esta etiquetaaa Pero adentro no es como las otras-->
    <p>Ingrese un numero para ver la tabla de Multiplicar: </p>
    <form method="post" action="index.php">

        <!--<label for="nombre">Nombre </label><input type="text" name="nombre">
        <br>
        <label for="edad">Edad </label><input type="number" name="edad">
        <br>-->
        <label for="numero">Numero </label><input type="number" name="numero">
        <input type="submit" value="Enviar">

    </form>

</body>
</html>