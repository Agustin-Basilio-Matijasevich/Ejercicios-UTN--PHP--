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

    public static function armodifica ($array)
    {
        $_SESSION["Personas"][$array["id"]] = json_encode(new persona($array["nombre"], $array["telefono"], $array["direccion"]));
    }

    public static function borrar ($id)
    {
        if (!empty($_SESSION["Personas"][$id]))
        {
            unset($_SESSION["Personas"][$id]);
        }
    }

    public static function getPersona ($id)
    {
            if (isset($_SESSION["Personas"][$id]) && !empty($_SESSION["Personas"][$id]))
            {
                return (persona :: casteo(json_decode($_SESSION["Personas"][$id])));
            }
    }

    public static function mostrar ()
    {
        $cantP = 0;
        //Apertura de tabla
        echo 
        '<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acciones</th>
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
                <th scope="row" style="vertical-align: middle;">'.($key+1).'</th>
                <td style="vertical-align: middle;">'.$p -> nombre.'</td>
                <td style="vertical-align: middle;">'.$p -> telefono.'</td>
                <td style="vertical-align: middle;">'.$p -> direccion.'</td>
                <td style="vertical-align: middle;">
                <a href="contact.php?id_actualiza='.($key+1).'" style="display: inline-table;"><img src="../images/editar.png" width="30"></a>
                <a href="?id='.($key+1).'" style="display: inline-table;"><img src="../images/Borrar.png" width="30"></a>
                </td>
            </tr>';
            $cantP++;
        }



        //Cierre de tabla
        echo 
        "</tbody>
        </table>";

        //Pie de Tabla
        echo "<h3>Cantidad de Personas: $cantP</h3>";
        echo '<button type="button" class="btn btn-danger" onclick="Vaciar_Tabla()">Vaciar Tabla</button>';

    }



}

//Procesamiento de datos
if (!empty($_POST))
{
    if (!empty($_POST["id"]))
    {
        Personas :: armodifica($_POST);
    }
    else
    {
        Personas :: arnuevo($_POST);
    }
}

if (!empty($_GET))
{
    if (!empty($_GET["id"]))
    {
        Personas :: borrar($_GET["id"]-1);
    }

    if (!empty($_GET["tabla"]))
    {
        if ($_GET["tabla"]=290101)
        {
            unset($_SESSION["Personas"]);
        }
    }
    
}

?>