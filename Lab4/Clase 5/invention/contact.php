<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!--Head contiene estilos y boostrap-->
<?php require_once ("../librerias/head.php");?>

<!--Tratamiento para modificacion de Persona-->
<?php

  if (isset($_GET["id_actualiza"]) && !empty($_GET["id_actualiza"]))
  {
    $persona = personas :: getPersona($_GET["id_actualiza"]-1);
  }
  
  if (isset($persona))
  {
    $nombre = $persona -> nombre;
    $telefono = $persona -> telefono;
    $direccion = $persona -> direccion;
    $id = $_GET["id_actualiza"];
  }
  else
  {
    $nombre = "";
    $telefono = "";
    $direccion = "";
    $id = "";
  }

?>

<body>
<div id="wrapper">
  <div id="content">

    <!-- HEADER -->
    <?php include("../librerias/header.php"); ?>

    <!--Barra Titulo-->
    <div id="mainimg">
      <h3>inventions</h3>
      <h4>for a wireless world</h4>
    </div>

    <!--Content Area-->
    <div id="contentarea">
      
      <!--Barra izquierda-->
      <div id="leftbar">
      <button type="button" class="btn btn-success" onclick="Mostrar_Nombre()">Tu Nombre</button>
        <h2>Añadir Persona</h2>
        
        <form action="index.php" method="POST">
<!--name es identificador para backend y id es identificador para frontend-->
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Fulanito" value="<?=$nombre?>" required>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="3624163569" pattern="[0-9]{4}[0-9]{6}" title="Ingrese un Numero de Telefono Valido" value="<?=$telefono?>" required>
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Puflito 345" pattern="[a-zA-Z.-_ñ]{2,}.*. .[0-9]{0,}" title="Ingrese una Direccion Valida" value="<?=$direccion?>" required>
          </div>

          <input type="hidden" name="id" value="<?=$id?>">

          <div class="mb-3">
            <input type="submit" class="form-control" id="boton-carga" value="Aceptar">
          </div>

        </form>

        <br />
      </div>
      
      <!--Barra Derecha-->
      <?php include ("../librerias/barraDerecha.php"); ?>

    </div>

    <!--BOTTOM-->
    <?php require_once ("../librerias/bottom.php"); ?>


  </div>
</div>
</body>
</html>
