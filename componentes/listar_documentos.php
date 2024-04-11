<?php
$directorio = '../files/';
$archivos = scandir($directorio);

echo '<table class="tabla-documento" border="1">';
echo '<thead>';
echo '<tr>';
echo '<th class="Documento">DOCUMENTOS GUARDADOS</th>';

echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($archivos as $archivo) {
    if ($archivo != '.' && $archivo != '..') {
       
        echo '<tr>';
        echo '<td>' . "<a href='../files/$archivo' target='_blank'>$archivo</a>". '</td>';
       
       echo '</tr>';
       // echo "<button onclick='eliminarDocumento(\"$archivo\")'>Eliminar</button><br>";
    }
}
echo "</tbody>";
echo "</table>";
?>
