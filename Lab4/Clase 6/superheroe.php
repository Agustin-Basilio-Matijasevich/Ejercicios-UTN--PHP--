<?php

include ("Iplatudo.php");

class superheroe extends persona implements Iplatudo
{
    public $superPoder;
    
    public function __construct($id, $nombre, $direccion, $superPoder)
    {
        parent :: __construct($id, $nombre, $direccion);
        
        $this -> superPoder = $superPoder;

    }

    public function ver()
    {
        parent :: ver();

        echo ". Con el superpoder de ".$this -> superPoder.". ".$this -> tenerPlata();

    }

    function tenerPlata()
    {
        return $this -> nombre." Pertenece a los supereroes con Plata";
    }

}

?>