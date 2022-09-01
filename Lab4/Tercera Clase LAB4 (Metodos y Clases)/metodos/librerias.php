<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

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

    public static function casteo($obj)
    {
        return new persona ($obj -> nombre, $obj -> telefono, $obj -> direccion);
    }

}

class personas
{
    //Trabaja directamente con la sesion utilizando el id "Personas"
    //ID "Personas" RESERVADO

    //public $lista;

    public static function nuevo ($n, $t, $d)
    {
        //$this -> $lista[] = new persona($n, $t, $d);
        $_SESSION["Personas"][] = json_encode(new persona($n, $t, $d));
    }

    public static function mostrar ()
    {
        $salida = "";
        
        /*
        foreach ($this -> $lista as $key => $p)
        {
            $salida .= "<br>" . "Persona " . $key+1;
            $salida .= "<br>" . $p -> mostrar() . "<br>";
        }

        return $salida;
        */

        foreach ($_SESSION["Personas"] as $key => $p)
        {
            $p = json_decode($p);
            $p = persona :: casteo ($p);
            $salida .= "<br>" . "Persona " . $key+1;
            $salida .= "<br>" . $p -> mostrar() . "<br>";
        }

        return $salida;

        /*$obj = json_decode($_SESSION["Personas"][0]);
        $obj = persona :: casteo($obj);
        echo var_dump($obj);*/

    }

}

?>