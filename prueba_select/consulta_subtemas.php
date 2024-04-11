<?php
// Conexión a la base de datos
$dsn = 'mysql:host=localhost;dbname=nombre_de_tu_base_de_datos;charset=utf8';
$username = 'tu_usuario';
$password = 'tu_contraseña';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error al conectar: ' . $e->getMessage());
}

// Consulta para obtener los subtemas
$query = "SELECT id, subtema_id_tema, subtema_den FROM subtema";
$stmt = $pdo->prepare($query);
$stmt->execute();
$subtemas = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($subtemas); // Devolver los subtemas en formato JSON
?>
