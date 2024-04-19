<?php
require('../componentes/configBD.php');
include("function.php");
?>
<?php echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" rel="stylesheet" type="text/css" >'; ?>

<?php
echo '<table width="100%" class="tabla-documento" border="1">';
echo '<thead>';
echo '<tr>';
echo '<th width="82%" class="titulo1">Id</th>';
echo '<th width="20%" class="titulo2">Tema</th>';
echo '<th width="20%" class="titulo2">Accion</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';

$sql = "select * from tema";
$result = db_query($sql);
while ($row = mysqli_fetch_object($result)) {
    echo '<td <th width="80%">' . $row->id . '</td>';
    echo '</td>';
    echo '<td width="30%">' . $row->tema_den . '</td>';
    echo '<td width="10%>';
?>
    <a href="../componentes/borrar.php?id=<?php echo $row->id; ?>"></a>
    <a class="btn btn-primary" href="../componentes/borrar.php?id=<?php echo $row->id; ?>">
        <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>

<?php
    echo '</td>';
    echo '</tr>';
};
echo "</tbody>";

echo "</table>";
?>