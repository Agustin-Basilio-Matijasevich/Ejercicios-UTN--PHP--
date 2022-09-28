<?php

    require_once("ImAerolinea.php");
    require_once("AustralAPI.php");

    class managerAustral implements ImAerolinea
    {
        public AustralAPI $API;


        public function __construct(AustralAPI $API)
        {
            $this -> API = $API;
        }

        public function emitirPasaje()
        {
            echo "Validamos la paga y despues...";
            $this -> API -> emitirPasaje();
        }

        public function pagar()
        {
            echo "Pago Pendiente. Gracias por su compra le desea Austral Airlines<br>";
            $this -> emitirPasaje();
        }

    }

?>