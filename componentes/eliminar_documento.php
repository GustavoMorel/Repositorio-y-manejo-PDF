<?php
if(isset($_POST['nombreArchivo'])) {
    $archivo = $_POST['nombreArchivo'];
    $rutaArchivo = '../files/' . $archivo;
    
    if(file_exists($rutaArchivo)) {
        unlink($rutaArchivo);
        echo "Documento eliminado correctamente.";
    } else {
        echo "El documento no existe.";
    }
}else{
    echo "El Post no paso";
}
?>
