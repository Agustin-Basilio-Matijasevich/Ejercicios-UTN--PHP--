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

    public static function arnuevo ($array) //Identifica los datos segun: Nombre=nombre, Telefono=telefono, Direccion=direccion.
    {
        $_SESSION["Personas"][] = json_encode(new persona($array["nombre"], $array["telefono"], $array["direccion"]));
        
    }

    public static function mostrar ()
    {
        //Apertura de tabla
        echo 
        '<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
          </tr>
        </thead>
        <tbody>';


        //Carga de tabla
        foreach ($_SESSION["Personas"] as $key => $p)
        {
            $p = json_decode($p);
            $p = persona :: casteo ($p);

            echo 
            '<tr>
                <th scope="row">'.($key+1).'</th>
                <td>'.$p -> nombre.'</td>
                <td>'.$p -> telefono.'</td>
                <td>'.$p -> direccion.'</td>
            </tr>';

        }



        //Cierre de tabla
        echo 
        "</tbody>
        </table>";

    }



}

//Procesamiento de datos
if (!empty($_POST))
{
    Personas :: arnuevo($_POST);
}

?>