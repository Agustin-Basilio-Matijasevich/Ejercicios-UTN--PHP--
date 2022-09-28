<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once ("banco.php");
    require_once ("Ibanco.php");
    require_once ("managerBanco.php");

    class compras
    {
        public Ibanco $b;

        public function __construct(Ibanco $i)
        {
            $this -> b = $i;
        }

        public function comprar()
        {
            $this -> b -> pagar();
        }
    }

    $b = new banco();
    $mb = new managerBanco($b);
    $c = new compras($mb);
    $c -> comprar();
    

?>