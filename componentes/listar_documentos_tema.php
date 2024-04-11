<?php
require('../componentes/configBD.php');
include("function.php");
$directorio = '../files/';
?>
<?php echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" rel="stylesheet" type="text/css" >'; ?>

<?php
echo '<table width="100%" class="tabla-documento" border="1">';
echo '<thead>';
echo '<tr>';
echo '<th width="82%" class="titulo1">Documento</th>';
echo '<th width="20%" class="titulo2">Usuario</th>';
echo '<th width="20%" class="titulo2">Accion</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';

$sql = "select * from documento";
$result = db_query($sql);
while ($row = mysqli_fetch_object($result)) {
    echo '<td <th width="80%">' . "<a href='$directorio$row->docu_nombre' target='_blank'>$row->docu_nombre</a>";
    echo '</td>';
    echo '<td width="30%">' . $row->docu_dniusu . '</td>';
    echo '<td width="10%>';
    $id=$row->id;
    $docu=$row->docu_nombre;
?>
    <a href="../componentes/ver_docu.php? id= <?php echo $id; ?>&docu_nombre=<?php echo $docu; ?>">ver</a>
    <a class="btn btn-primary" href="../componentes/ver_docu.php?id= <?php echo $id; ?>&docu_nombre=<?php echo $docu; ?>">
        <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>

<?php
    echo '</td>';
    echo '</tr>';
};
echo "</tbody>";

echo "</table>";
?>