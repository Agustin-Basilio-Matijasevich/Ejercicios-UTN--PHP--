<?php

    require_once("ImAerolinea.php");
    require_once("IberiaAPI.php");

    class managerIberia implements ImAerolinea
    {
        public IberiaAPI $API;


        public function __construct(IberiaAPI $API)
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
            echo "Pago Pendiente. Gracias por su compra le desea Iberia Airlines International<br>";
            $this -> emitirPasaje();
        }

    }

?>