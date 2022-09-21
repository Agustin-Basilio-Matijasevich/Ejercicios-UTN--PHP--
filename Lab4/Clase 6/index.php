<!DOCTYPE html>

    <?php

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        include ("persona.php");

        echo "Lista de Personas<br>";

        $listaP = new listaP();

        $listaP -> nuevo(new persona (1,"Maria", "Italia 16"));

        $listaP -> nuevo(new superheroe(2, "IronMan", "San Francisco", "Tener Plata"));

        $listaP -> nuevo(new superheroe_acuatico(3, "Acuaman", "Atlantis", "Respirar bajo el agua"));

        $listaP -> listar();

        echo "<br>Lista de Superfuertes<br>";

        $listaSP = new listaSP();

        //$listaSP -> nuevo (new persona (1, "Maria", "Italia 16"));  Revienta porque persona no implementa la interfaz superfuerza

        $listaSP -> nuevo(new superheroe(2, "IronMan", "San Francisco", "Tener Plata"));

        $listaSP -> nuevo(new superheroe_acuatico(3, "Acuaman", "Atlantis", "Respirar bajo el agua"));

        $listaSP -> listar();

    ?>

</html>