<?php

require('../../componentes/configBD.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <script>
        // Función para obtener el texto adicional seleccionado
        function obtenerTextoAdicional() {
            // Obtener el elemento select
            var selectOpcion1 = document.getElementById("opcion1");
            // Obtener el índice seleccionado
            var indiceSeleccionado = selectOpcion1.selectedIndex;
            // Obtener el texto adicional asociado al índice seleccionado
            var textoAdicional = selectOpcion1.options[indiceSeleccionado].getAttribute("data-extra");
            
            // Devolver el texto adicional
            return textoAdicional;
        }
    </script>
</head>
<body>
    <h2>Formulario PHP</h2>
    <form method="post" action="procesar_formulario.php" onsubmit="document.getElementById('opcion1_extra').value = obtenerTextoAdicional()">
        <label for="opcion1">Opción 1:</label>
       <!-- <select name="opcion1" id="opcion1">
            <option value="valor1" data-extra="pepe">Valor 1</option>
            <option value="valor2" data-extra="juan">Valor 2</option>
            <option value="valor3" data-extra="maría">Valor 3</option>
        </select>
    -->
    <select id="opcion1" name="opcion1">
              <?php
              while ($obj = mysqli_fetch_object($consulta)) { ?>

                <option value="<?php echo $obj->id ?>" data-extra="<?php echo $obj->tema_den; ?>"><?php echo $obj->tema_den; ?></option>

              <?php
              }
              ?>
            </select>
        <!-- Campo oculto para enviar el texto adicional de la opción 1 -->
        <input type="hidden" name="opcion1_extra" id="opcion1_extra">
        <br><br>
        
        <label for="opcion2">Opción 2:</label>
        <select name="opcion2" id="opcion2">
            <option value="valorA">Valor A</option>
            <option value="valorB">Valor B</option>
            <option value="valorC">Valor C</option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
    </form>


    <script src="../../scripts.js"></script>
</body>
</html>
