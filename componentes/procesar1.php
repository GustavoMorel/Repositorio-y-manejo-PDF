<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por el formulario
    $opcion1_valor = $_POST["opcion1_valor"];
    $opcion1_texto = $_POST["opcion1_texto"];
    $opcion2_valor = $_POST["opcion2_valor"];
    $opcion2_texto = $_POST["opcion2_texto"];

    // Hacer algo con los valores, por ejemplo, imprimirlos
    echo "Opción 1 seleccionada - Valor: " . $opcion1_valor . ", Texto: " . $opcion1_texto . "<br>";
    echo "Opción 2 seleccionada - Valor: " . $opcion2_valor . ", Texto: " . $opcion2_texto;
}
?>
