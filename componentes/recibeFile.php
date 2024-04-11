<?php
include('configBD.php');
//ucwords pasar a mayúsculas solo la primera letra de toda la cadena
$usuario    = ucwords($_POST['usuario']);
//strtoupper Para pasar a Mayuscula
$dni          = trim(strtoupper($_POST['dni']));

//Verificando si existe el directorio
$dirLocal = "../files";
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}
$miDir         = opendir($dirLocal); //Habro el directorio

if(isset($_POST['submit']) && count($_FILES['documentos']['name'])>0){

// Recorrer cada archivo subido

foreach ($_FILES['documentos']['name'] as $i => $name) {
 
  //strlen método de php pues devuelve la longitud de una cadena
  if (strlen($_FILES['documentos']['name'][$i]) > 1) {
  
  $fileName          = $_FILES['documentos']['name'][$i];
  $sourceFoto        = $_FILES['documentos']['tmp_name'][$i];
  $tamanoFoto        = $_FILES["documentos"]['size'][$i];
  /*$restricciontamano = "500";//MB
  if((($tamanoFoto/1024)/1024)<=$restricciontamano){*/

  /**Renombrando cada foto que llega desde el formulario */
 // $nuevoNombreFile    = substr(md5(uniqid(rand())),0,15);
  $nuevoNombreFile  = $fileName  ;
  $extension_foto     = pathinfo($fileName, PATHINFO_EXTENSION);
  $nombreFoto         = $nuevoNombreFile.'_'.$dni.'.'.$extension_foto;


  $resultadoFotos     = $dirLocal.'/'.$nombreFoto;

    // Mover archivo a una ubicación permanente
    move_uploaded_file($sourceFoto, $resultadoFotos);
  
    // Insertar información del archivo en la base de datos
    $sql = "INSERT INTO documento (docu_nombre, docu_dniusu) VALUES ('{$nombreFoto}', '{$dni}')";
    mysqli_query($conn, $sql);
    
 /* }else{
    echo'<p style="color:red">Existe una foto que supera el peso Maximo de '.$tamanoFoto.'</p>';
  }*/
}
}

/**Nota:Obvio no se puede meter este INSERT dentro del Foreach, por que crearía el mismo clientes
 * la n cantidad de veces de acuerda al numero de imagenes que se esten cargando, solo aplicaría
 * para cuando se carga una sola imagen.
 */
$sql = "INSERT INTO usuario (usuario, dni) VALUES ('{$usuario}', '{$dni}')";
mysqli_query($conn, $sql);


}
// Cerrar conexión a la base de datos
mysqli_close($conn);

// Redirigir a la página de inicio
header("Location: ../pages/subir_documentos.php");
