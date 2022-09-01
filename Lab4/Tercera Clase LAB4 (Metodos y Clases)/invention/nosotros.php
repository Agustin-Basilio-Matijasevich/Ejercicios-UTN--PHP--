<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--Head contiene estilos y boostrap-->
<?php require_once ("../librerias/head.php"); ?>

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
        <h2>Sobre Nosotros</h2>
          <p>Somos re piola alta empresa perro bah ni se si calificamos como empresa pero andamos re bien.</p>
        <br />

          <?php
            $obj = json_decode($_SESSION["objeto"]);
            $obj =  persona :: casteo ($obj);
            
          ?>

          <h1>Objeto</h1>
          <h2><?php echo $obj -> mostrar(); ?></h2>

          <?php
            personas :: nuevo ("Prueba", "36240", "Los Hacheros 16");
            echo personas :: mostrar ();

          ?>

        <br />
        <a href="#">more ></a><br />
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
