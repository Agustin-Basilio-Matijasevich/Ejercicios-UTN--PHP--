<!DOCTYPE html>
<html lang="es">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Cadenas de Caracteres</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php require_once ("./tratamientoStrings.php"); ?>

    <?php
    
    function printPalindromos ($array)
    {
      if (!empty($array))
      {
        foreach($array as $key=>$palabra)
        {
          echo ('['.($key+1).']: "'.$palabra.'"<br>');
        }
      }
      else
      {
        echo ("No existen Palindromos en el Texto");
      }
    }

    ?>

  </head>

  <?php
  
    if (!empty($_POST) && !empty($_POST["Texto"]) && !empty($_POST["Letra"]))
    {
        $texto = $_POST["Texto"];
        $letra = $_POST["Letra"];
    }
    else
    {
        $texto = "";
        $letra = "";
    }

  ?>

  <body>

    <div id="wrapper">
      <div id="mainimg">
        <h3>Cadenas de Caracteres</h3>
        <h4>Para procesar Textos</h4>
      </div>

    
      <div id="contentarea">
        <div id="leftbar">
          <h2>Zona de Carga</h2>
        
          <form action="./" method="POST">

            <div class="mb-3">
              <label for="Texto" class="form-label">Ingrese el Texto a Procesar</label>
              <textarea class="form-control" id="Texto" name="Texto" rows="5" required><?php echo ($texto); ?></textarea>
            </div>

            <div class="mb-3">
              <label for="Letra" class="form-label">Buscare palabras que empiecen con la letra... </label>
              <input type="text" class="form-control" id="Letra" name="Letra" pattern="[A-Za-z]{1,1}" title="Ingrese solo UNA Letra" value="<?=$letra?>" required>
            </div>

            <div>
              <input type="submit" class="form-control" value="Procesar">
            </div>

          </form>

          <br />
        </div>
      
        <div id="rightbar">
          <h2>Resultados</h2>
          <?php
          
          if (!empty($texto) && !empty($letra))  //Rightbar calculado
          {
              echo ('<p><span class="orangetext">Cantidad de Palabras...</span><br />'
              .contPalabras($texto).'<br />
              <br />
              <span class="orangetext">Cantidad de palabras que inician con la letra dada...</span><br />'
              .contPalabrasLetra($texto, $letra).'<br />
              <br />
              <span class="orangetext">Palindromos Detectados...</span><br />');
              
              printPalindromos(identPalindromos($texto));

              echo ('</p>');
          }
          else //Rigtbar por defecto
          {
              echo ('<p><span class="orangetext">Cantidad de Palabras...</span><br />
              No hay texto para procesar. <br />
              <br />
              <span class="orangetext">Cantidad de palabras que inician con la letra dada...</span><br />
              No hay texto para procesar. <br />
              <br />
              <span class="orangetext">Palindromos Detectados...</span><br />
              No hay texto para procesar. </p>');
          }

          ?>
        </div>

        <div id="bottom">

        </div>

      </div>

    </div>

  </body>

</html>
