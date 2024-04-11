<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "tep";
$conn = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($conn, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

$sql=("SELECT id, tema_den FROM tema");
$consulta=mysqli_query($conn, $sql);

$sql_subtema=("SELECT id, subtema_id_tema, subtema_tema_den, subtema_den FROM subtema");
$consulta_subtema=mysqli_query($conn, $sql_subtema);


?>