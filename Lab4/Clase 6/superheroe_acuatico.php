<?php

    //include ("Isuperfuerza.php");  Ya incluido en superheroe
    include ("Inadador.php");

    class superheroe_acuatico extends persona implements Isuperfuerza, Inadador
    {
        public $superPoder;
    
        public function __construct($id, $nombre, $direccion, $superPoder)
        {
            parent :: __construct($id, $nombre, $direccion);
        
            $this -> superPoder = $superPoder;

        }

        public function tenerSuperfuerza()
        {
            return $this -> nombre." Pertenece a los superheroes con SuperFuerza";
        }

        public function nadar()
        {
            return $this -> nombre." Pertenece a los superheroes que Nadan y no se Ahogan";
        }

        public function ver()
        {
            parent :: ver();

            echo ". Con el superpoder de ".$this -> superPoder.". ".$this -> nadar().". ".$this -> tenerSuperfuerza();
        }
    
    }

?>