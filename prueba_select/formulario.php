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
        <!-- Opciones del primer select se llenan con PHP -->
        <?php include 'consulta_temas.php'; ?>
    </select>
    
    <label for="selectSubtema">Subtema:</label>
    <select id="selectSubtema" name="selectSubtema">
        <option value="">Seleccione...</option>
        <!-- Opciones del segundo select se llenarán dinámicamente con JavaScript -->
    </select>
</form>

<script src="script.js"></script>
</body>
</html>