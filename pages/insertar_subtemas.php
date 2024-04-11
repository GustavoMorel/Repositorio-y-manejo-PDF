<?php

require('../componentes/configBD.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Agregar Sub Temas al Sistema</title>
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

  <div class="container">
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-12">
        <h2 class="text-center  font-weight-bold">Agregar Sub Temas al Sistema
          <hr>
        </h2>
      </div>

      <div class="col-md-5">
       <!-- <form  action="../componentes/insertar_subtemas.php" method="POST" enctype="multipart/form-data"> -->
        <form id="myFormDocuTema" action="../componentes/insertar_subtemas.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="tema">Seleccione un Tema:</label>

            <select id="tema" name="tema">
              <?php
              while ($obj = mysqli_fetch_object($consulta)) { ?>

                <option value="<?php echo $obj->id ?>"><?php echo $obj->tema_den; ?></option>

              <?php
              }
              ?>
            </select>
          </div>

          

          <div class="form-group">
            <label for="usuario">Sub Tema: </label>
            <input type="text" id="subtema" name="subtema" class="form-control">
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Enviar Formulario</button>
        </form>
      </div>

      <div class="col-md-7">

        <div class="listar">
      
          <span class="titulo-vista-docu">
            <h2 class="subtitulo">Sub Temas Guardados</h2>
          </span>
          <span class="cuerpo-vista-docu"> 
          <?php include '../componentes/listar_subtemas.php'; ?>
          </span>
        </div>


      </div>

    </div>
  </div>

  




 <script src="../scripts.js"></script>

</body>

</html>