<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han recibido los valores del select
    if (isset($_POST['opcion1_extra']) && isset($_POST['opcion2'])) {
        // Obtener los valores seleccionados
        $opcion1 = $_POST['opcion1'];
        $opcion2 = $_POST['opcion2'];
        
        // Obtener el texto adicional de la opción 1
        $texto_adicional_opcion1 = $_POST['opcion1_extra'];
        
        // Hacer lo que necesites con los valores seleccionados
        echo "Opción 1 seleccionada: " . $opcion1 . " - Texto adicional: " . $texto_adicional_opcion1 . "<br>";
        echo "Opción 2 seleccionada: " . $opcion2 . "<br>";
    } else {
        // Si no se han recibido los valores esperados, mostrar un mensaje de error
        echo "Por favor, selecciona una opción para ambos selectores.";
    }
}
?>