<?php
require('../componentes/configBD.php');
include("function.php");
?>
<?php echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" rel="stylesheet" type="text/css" >'; ?>

<?php
echo '<table width="100%" class="tabla-documento" border="1">';
echo '<thead>';
echo '<tr>';
echo '<th width="85%" class="titulo1">Tema</th>';
echo '<th width="20%" class="titulo2">Sub Tema</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';

$sql = "select * from subtema";
$result = db_query($sql);
while ($row = mysqli_fetch_object($result)) {
    echo '<td width=450px>' . $row->subtema_tema_den . '</td>';
    echo '</td>';
    echo '<td width=200px>' . $row->subtema_den . '</td>';
    echo '</td>';
    echo '</tr>';
};
echo "</tbody>";

echo "</table>";
?>