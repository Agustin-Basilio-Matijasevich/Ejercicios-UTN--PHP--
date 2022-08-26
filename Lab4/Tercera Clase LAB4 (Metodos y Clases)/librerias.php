<?php

function calcular ($a, $b)
{
    return $a+$b;
}

class persona
{
    public $nombre;
    public $telefono;
    public $direccion;

    public function __construct($nombre, $telefono, $direccion)
    {
        $this -> nombre = $nombre;
        $this -> telefono = $telefono;
        $this -> direccion = $direccion;
        
    }

    public function mostrar ()
    {
        return "Nombre: " . $this -> nombre . "<br> Telefono: " . $this -> telefono . "<br> Direccion: " . $this -> direccion;
    }

}

class personas
{
    public $lista;

    public function nuevo ($n, $t, $d)
    {
        $this -> $lista[] = new persona($n, $t, $d);
    }

    public function mostrar ()
    {
        $salida;

        foreach ($this -> $lista as $key => $p)
        {
            $salida .= "<br>" . "Persona " . $key+1;
            $salida .= "<br>" . $p -> mostrar() . "<br>";
        }

        return $salida;
    }

}

?>