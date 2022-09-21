<?php

class persona
{
    public $id;
    public $nombre;
    public $direccion;

    public function __construct($id, $nombre, $direccion)
    {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> direccion = $direccion;

    }

    public function ver()
    {
        echo "Una persona llamada:".$this -> nombre;
    }

}

include ("listaP.php");
include ("superheroe.php");

?>