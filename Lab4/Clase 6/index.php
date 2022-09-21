<!DOCTYPE html>

    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        include ("persona.php");


        $listaP = new listaP();

        $listaP -> nuevo(new persona (1,"Maria", "Italia 16"));

        $listaP -> nuevo(new superheroe(2, "IronMan", "San Francisco", "Tener Plata"));

        $listaP -> listar();

    ?>

</html>