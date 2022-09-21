<?php

    abstract class Adocumento implements Iimprimible
    {
        public $fecha;
        public $autor;
        public $data;

        public function __construct($fecha, $autor, $data)
        {
            $this -> fecha = $fecha;
            $this -> autor = $autor;
            $this -> data = $data;
        }

        public function getFecha()
        {
            return $this -> fecha;
        }

        public function getAutor()
        {
            return $this -> autor;
        }

        public function procImpresion()
        {

        }

        public function getImpresion()
        {
            $salida = "";

            $salida .= "Fecha: ".$this -> getFecha()."<br>";
            $salida .= "Autor: ".$this -> getAutor()."<br>";
            $salida .= "<br>".$this -> procImpresion()."<br>";

            return $salida;
            
        }
        
    }

?>