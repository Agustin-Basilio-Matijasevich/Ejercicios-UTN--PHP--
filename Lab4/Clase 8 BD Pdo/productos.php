<?php

    require_once ("producto.php");
    require_once ("eviroment.php");

    class producto
    {
        public $id;
        public $nombre;
        public $precio;
        public $descripcion;
        public $foto;

        public function conexion ()
        {
            
        }

        public function inserto (producto $p)
        {
            echo ("Inserto el Producto");
        }

        public function tomo (int $i)
        {
            echo ("Tomo el producto");
        }

        public function modifico ()
        {

        }

        public function elimino ()
        {

        }

        public function listo ()
        {

        }



    }

?>