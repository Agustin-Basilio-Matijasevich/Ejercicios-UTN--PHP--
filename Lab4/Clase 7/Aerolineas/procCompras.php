<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once("ImAerolinea.php");
    require_once("AustralAPI.php");
    require_once("IberiaAPI.php");
    require_once("managerAustral.php");
    require_once("managerIberia.php");

    class procCompras
    {
        public ImAerolinea $I;

        public function __construct(ImAerolinea $I)
        {
            $this -> I = $I;
        }

        public function comprar()
        {
            $this -> I -> pagar();
        }
    }

    $A = new AustralAPI();
    $I = new IberiaAPI();
    $mA = new managerAustral($A);
    $mI = new managerIberia($I);
    $c = new procCompras($mA);
    $c -> comprar();
    echo "<br><br>";
    $c = new procCompras($mI);
    $c -> comprar();
    
    

?>