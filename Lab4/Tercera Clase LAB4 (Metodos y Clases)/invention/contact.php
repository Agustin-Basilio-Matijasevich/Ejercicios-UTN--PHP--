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
        <h2>Contactenos</h2>
        
        <form action="">

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

        </form>

        <br />
      </div>
      
      <!--Barra Derecha-->
      <?php include ("../librerias/barraDerecha.php"); 
      personas :: nuevo ("Prueba 2", "36240", "Los Hacheros 16");?>

    </div>

    <!--BOTTOM-->
    <?php require_once ("../librerias/bottom.php"); ?>


  </div>
</div>
</body>
</html>
