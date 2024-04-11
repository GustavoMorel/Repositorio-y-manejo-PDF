<?php
include('../componentes/configBD.php');
//$nom=$_REQUEST['nombre'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores enviados por el formulario
  $tema_valor = $_POST["tema_valor"];
  $tema_texto = $_POST["tema_texto"];
  $subtema_valor = $_POST["subtema"];
 // $subtema_texto = $_POST["subtema_texto"];

  // Hacer algo con los valores, por ejemplo, imprimirlos
  echo "Nuevo Opción tema seleccionada - Valor: " . $tema_valor . ", Texto: " . $tema_texto . "<br>";
  echo "Opción Subtema seleccionada - Valor: " . $subtema_valor; 
  //. ", Texto: " . $subtema_texto;
}



if(isset($_POST['submit'])){
/*$subtema = $_REQUEST['subtema'];
$idtema = $_REQUEST['tema'];*/


$query = ("INSERT INTO subtema(subtema_id_tema, subtema_tema_den, subtema_den)
	VALUES('$tema_valor', '$tema_texto', '$subtema_valor')");
$consulta = mysqli_query($conn, $query);
if ($consulta) {
  echo 'El subtema ha sido dato de alta.';
}

}
// Cerrar conexión a la base de datos
mysqli_close($conn);


// Redirigir a la página de inicio
header("Location: ../pages/insertar_subtemas.php");
?>