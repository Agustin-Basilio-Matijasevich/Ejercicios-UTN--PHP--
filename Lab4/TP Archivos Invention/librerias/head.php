<?php
    require_once ("../metodos/archivos.php");
    session_start();
    if (!empty($_GET))
    {
        if (!empty($_GET["session"]))
        {
            if ($_GET["session"] == "290101")
            {
                session_destroy();
                $page = $_SERVER['PHP_SELF'];
                echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
            }

            if ($_GET["session"] == "290102")
            {
                leer();
            }
        }
    }
    include ("../metodos/librerias.php");
    
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Invention Template</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>