<?php

    require_once ("Iimprimible.php");

    class colaImpresion
    {
        public $cola;

        public function nuevo (Iimprimible $doc)
        {
            $this -> cola[] = $doc;
        }

        public function imprimir ()
        {
            echo "Imprimiendo...<br><br>";

            foreach($this -> cola as $key=>$doc)
            {
                echo "<strong>Documento [".($key+1)."] :</strong><br><br>";
                echo $doc -> getImpresion();
            }

            echo "<br>Fin de Impresion";

            unset($this -> cola);

        }
    }

?>