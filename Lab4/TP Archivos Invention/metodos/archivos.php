<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');


    function grabar ($data)
    {
        $f = fopen ("../ArchivosCSV/Personas.csv", "w");

        foreach ($data as $persona)
        {
            if (!empty($persona))
            {
                fwrite ($f, $persona."\n");
            }
        }

        fclose($f);

    }

    function leer ()
    {
        unset($_SESSION["Personas"]);
        $f = fopen ("../ArchivosCSV/Personas.csv", "r");
        
        while (!feof($f))
        {
            $t = fgets($f);
            $d = json_decode($t);
            if (!empty($d))
            {
                    $t = json_encode($d);
                    $_SESSION["Personas"][] = $t;
            }
        }
        
        fclose($f);
    }


?>