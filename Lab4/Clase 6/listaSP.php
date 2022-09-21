<?php

    //include ("Isuperfuerza.php");  Ya incluido en persona a traves de superheroe

    class listaSP
    {
        public $lista;

        public function nuevo(Isuperfuerza $p)
        {
            $this -> lista[$p -> id] = $p;
        }

        public function listar ()
        {
            foreach ($this -> lista as $p)
            {
                echo "ID: ".$p -> id." => ";
                $p -> ver();
                echo "<br>";
            }
        }

    }

?>