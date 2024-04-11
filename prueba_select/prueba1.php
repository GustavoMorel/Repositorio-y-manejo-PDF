<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario con Selects</title>
</head>
<body>

<form id="myForm">
    <label for="selectTema">Tema:</label>
    <select id="selectTema" name="selectTema">
        <option value="">Seleccione...</option>
        <?php
        // Conexión a la base de datos
        $dsn = 'mysql:host=localhost;dbname=tep;charset=utf8';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Consulta para obtener datos del primer select
            $query = "SELECT id, tema_den FROM tema";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Generar opciones del primer select
            foreach ($resultado as $fila) {
                echo "<option value='{$fila['id']}'>{$fila['tema_den']}</option>";
            }
        } catch (PDOException $e) {
            die('Error al conectar: ' . $e->getMessage());
        }
        ?>
    </select>
    

    <label for="selectSubtema">Subtema:</label>
    <select id="selectSubtema" name="selectSubtema">
        <option value="">Seleccionex...</option>
        <?php
        // Filtrar opciones del segundo select si se ha seleccionado un tema
        if (isset($_POST['selectTema']) && !empty($_POST['selectTema'])) {
            $id_tema = $_POST['selectTema'];
            echo $id_tema;
            try {
                // Consulta para obtener datos del segundo select filtrados por el tema seleccionado
                $query = "SELECT id, subtema_tema_den, subtema_den FROM subtema2 WHERE subtema_id_tema = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$id_tema]);
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Generar opciones del segundo select
                foreach ($resultado as $fila) {
                    echo "<option value='{$fila['id']}' data-subtema-id-tema='{$id_tema}'>{$fila['subtema_den']}</option>";
                }
            } catch (PDOException $e) {
                die('Error al conectar: ' . $e->getMessage());
            }
        }else{
            echo "no paso";
        }
        ?>
    </select>
</form>

</body>
</html>
