<?php

    class listaP
    {
        public $lista;

        public function nuevo(persona $p)
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