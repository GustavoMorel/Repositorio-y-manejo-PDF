<?php
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
?>
