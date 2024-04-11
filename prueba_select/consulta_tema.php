<?php
// Conexión a la base de datos
$dsn = 'mysql:host=localhost;dbname=tep;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error al conectar: ' . $e->getMessage());
}

// Consulta para obtener datos del primer select
$query = "SELECT id, tema_den FROM tema";
$stmt = $pdo->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Generar opciones del primer select
foreach ($resultado as $fila) {
    echo "<option value='{$fila['id']}'>{$fila['tema_den']}</option>";
}


?>
