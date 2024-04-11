<?php 
include("function.php");
$id = $_GET['id'];
//echo $id;
delete('subtema','id',$id);
header("location:../pages/insertar_subtemas.php");
?>
 