<?php

include ("Iplatudo.php");
include ("Isuperfuerza.php");
include ("superheroe_acuatico.php");

class superheroe extends persona implements Iplatudo, Isuperfuerza
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

        echo ". Con el superpoder de ".$this -> superPoder.". ".$this -> tenerPlata().". ".$this -> tenerSuperfuerza();

    }

    function tenerPlata()
    {
        return $this -> nombre." Pertenece a los superheroes con Plata";
    }

    function tenerSuperfuerza()
    {
        return $this -> nombre." Pertenece a los superheroes con SuperFuerza";
    }

}

?>