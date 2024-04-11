<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Subir multiples archivos con PHP - MySQL</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>

  <div class="container">
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-12">
        <h2 class="text-center  font-weight-bold">Subir Multiples Documentos PDF
          <hr>
        </h2>
      </div>

      <div class="col-md-5">
        <form action="../componentes/recibeFile.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="usuario">Usuario del Sistema:</label>
            <input type="text" name="usuario" class="form-control">
          </div>
          <div class="form-group">
            <label for="Dni">Dni:</label>
            <input type="text" name="dni" class="form-control">
          </div>

          <div class="form-group">
            <label for="fotos_cars">Documentos a subir:</label>
            <input type="file" name="documentos[]" multiple accept="image/*,.pdf" class="form-control-file">
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Enviar Formulario</button>
          <br>
          <a href="../menu/menu_repo.php"><input type="button" value="Volver a Menú" class="btn btn-primary btn-lg btn-block"></a>
          
        </form>
      </div>

      <div class="col-md-7">

        <div class="listar">
          <span class="titulo-vista-docu">
            <h2 class="subtitulo">Documentos Guardados</h2>
          </span>
          <span class="cuerpo-vista-docu"> <?php include '../componentes/listar_documentos_index.php'; ?></span>
        </div>

      </div>

    </div>
  </div>

  <script>
    document.getElementById("myForm").addEventListener("submit", function (event) {
    var tema = document.getElementById("tema");
    var tema_valor = tema.value;
    var tema_texto = tema.options[tema.selectedIndex].text;


    // Añade campos ocultos a flormulario con los valores y textos seleccionados
    var hidden1 = document.createElement("input");
    hidden1.setAttribute("type", "hidden");
    hidden1.setAttribute("name", "tema_valor");
    hidden1.setAttribute("value", tema_valor);
    this.appendChild(hidden1);

    var hidden2 = document.createElement("input");
    hidden2.setAttribute("type", "hidden");
    hidden2.setAttribute("name", "tema_texto");
    hidden2.setAttribute("value", tema_texto);
    this.appendChild(hidden2);


});
  </script>

  <script src="../scripts.js"></script>

</body>

</html>