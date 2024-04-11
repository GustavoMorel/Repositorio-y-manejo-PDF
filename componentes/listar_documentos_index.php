<?php
$directorio = '../files/';
$archivos = scandir($directorio);
//echo $directorio;

echo '<table class="tabla-documento" border="1">';
echo '<thead>';
echo '<tr>';
echo '<th class="Documento">Documento</th>';
echo '<th class="Accion">Accion</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($archivos as $archivo) {
    if ($archivo != '.' && $archivo != '..') {
       
        echo '<tr>';
        echo '<td class="tabla-documento-izquierdo">' . "<a href='./files/$archivo' target='_blank'>$archivo</a>". '</td>';
        echo '<td class="tabla-documento-derecho">' ;
       echo "<button onclick='eliminarDocumento(\"$archivo\")'>Eliminar</button>";
       echo '</td>';
       echo '</tr>';
       // echo "<button onclick='eliminarDocumento(\"$archivo\")'>Eliminar</button><br>";
    }
}
echo "</tbody>";
echo "</table>";
?>
