<?php
include('../componentes/configBD.php');
//$nom=$_REQUEST['nombre'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Verificar si se han recibido los valores del select
  if (isset($_POST['tema'])) {
    // Obtener los valores seleccionados
    $tema_id = $_POST['tema'];

    
    // Obtener el texto adicional de la opción 1
    $texto_adicional_tema = $_POST['data-extra'];
    
    // Hacer lo que necesites con los valores seleccionados
    echo "Opción 1 seleccionada: " . $tema_id . " - Texto adicional: " . $texto_adicional_tema . "<br>";
  }

}else{
  echo "NO PASO";
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verificar si se han recibido los valores del select
  if (isset($_POST['opcion1']) && isset($_POST['opcion2'])) {
      // Obtener los valores seleccionados
      $opcion1 = $_POST['opcion1'];
      $opcion2 = $_POST['opcion2'];
      
      // Obtener el texto adicional de la opción 1
      $texto_adicional_opcion1 = $_POST['opcion1_extra'];

      $query = ("INSERT INTO subtema(subtema_id_tema, subtema_tema_den, subtema_den)
    	VALUES('$opcion1', '$texto_adicional_opcion1', '$opcion2')");
      $consulta = mysqli_query($conn, $query);


      if ($consulta) {
          echo 'El subtema ha sido dato de alta.';
      }

  }
// Cerrar conexión a la base de datos
mysqli_close($conn);


// Redirigir a la página de inicio
header("Location: ../pages/insertar_subtemas.php");
}
?>