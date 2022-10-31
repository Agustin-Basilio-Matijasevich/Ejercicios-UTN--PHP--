<?php

    class producto
    {
        public $id;
        public $nombre;
        public $precio;
        public $descripcion;
        public $foto;


        public function __construct ($id, $nombre, $precio, $descripcion, $foto)
        {
            $this -> id = $id;
            $this -> nombre = $nombre;
            $this -> precio = $precio;
            $this -> descripcion = $descripcion;
            $this -> foto = $foto;
        }

    }

?>