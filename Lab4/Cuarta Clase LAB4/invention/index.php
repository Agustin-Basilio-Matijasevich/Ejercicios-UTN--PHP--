<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!--Head contiene estilos y boostrap-->
<?php require_once ("../librerias/head.php"); ?>
<!-- Require da error fatal en la pagina si no encuentra el elemento necesitado. Include solo una advertencia.
el once es un modificador que provoca que dentro de este .php no se vuelva a cargar el mismo archivo al menos a traves de el mismo cargador, include o require-->

<body>
<div id="wrapper">
  <div id="content">
    <!-- HEADER -->
    <?php include("../librerias/header.php"); ?>


    <div id="mainimg">
      <h3>inventions</h3>
      <h4>for a wireless world</h4>
    </div>
    <div id="contentarea">
      <div id="leftbar">
        <h2>Lista de Personas</h2>
      <?php
      if (!empty($_SESSION["Personas"]))
      {
        Personas :: mostrar();
      }
      else
      {
        echo "<h3>Lista Vacia</h3>";
      }

      ?>

      </div>
      <div id="rightbar">
        <h2>latest news</h2>
        <p><span class="orangetext">12/08/2006</span><br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Utid anisl nec leo congue fringilla. <br />
          <br />
          <span class="orangetext">10/08/2006</span><br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Utid anisl nec leo congue fringilla. <br />
          <br />
          <span class="orangetext">28/07/2006</span><br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Utid anisl nec leo congue fringilla. </p>
      </div>
    </div>
    <!--BOTTOM-->
    <?php require_once ("../librerias/bottom.php"); ?>


  </div>
</div>
</body>
</html>
