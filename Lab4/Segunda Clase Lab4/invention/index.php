<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <h2>hello!</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut id nisl nec leo congue fringilla. Suspendisse potenti. Phasellus sed velit eget sapien interdum ultrices. Nullam nec magna. Maecenas cursus. Etiam sapien neque, auctor eu, volutpat at, condimentum et, odio. Morbi id lorem. Nam urna ante, venenatis sed, molestie eu, dictum sit amet, tellus. Phasellus pellentesque magna vitae elit. In dignissim eleifend odio. Curabitur at libero. Donec est justo, pellentesque eu, vulputate feugiat, ultrices quis, nunc. Sed neque. Nulla egestas, risus id consectetuer ultrices, ante turpis posuere ligula, ac pulvinar tortor dui ac odio. Curabitur auctor urna sed purus. In varius.</p>
        <br />
        <p>Nulla sit amet magna non enim posuere porttitor. Vestibulum ante. Nam et nulla vestibulum libero facilisis aliquet. Vivamus ante velit, facilisis eu, pulvinar nec, ultricies vel, sem. Morbi ac velit. Sed est. Proin vehicula. Maecenas ac pede. Fusce rhoncus. Maecenas at quam. Aenean nunc felis, elementum vel, faucibus vitae, nonummy et, tellus. Nulla auctor venenatis urna. Donec accumsan urna sed libero. Fusce at mi eu leo sollicitudin adipiscing. Ut metus purus, gravida nec, scelerisque quis, venenatis non, ante. Aliquam a leo vel libero tempus scelerisque. Morbi iaculis. Ut libero. </p>
        <br />
        <a href="#">more ></a><br />
        <br />
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
