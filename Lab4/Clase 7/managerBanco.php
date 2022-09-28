<?php

    require_once("Ibanco.php");
    require_once("banco.php");

    class managerBanco implements Ibanco
    {
        public banco $banc;


        public function __construct(banco $b)
        {
            $this -> banc = $b;
        }

        public function pagar ()
        {
            echo "Validamos la paga y despues...";
            $this -> banc -> pagar();
        }

    }

?>