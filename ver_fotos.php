<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Documentos Guardados</title>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="assets/css/fotos.css">
</head>

<body>

<a href="index.php"><- Volver </a>
    <?php
    include('componentes/configBD.php');
    $idFoto = (int) filter_var($_REQUEST['idFoto'], FILTER_SANITIZE_NUMBER_INT);

    $sqlQuery = "SELECT  c.*, f.* FROM usuario AS c
            INNER JOIN fotos_cars AS f
            ON c.dni = f.placa_cliente
            AND c.id = {$idFoto}
            ORDER BY c.fecha DESC";
    $resultadoSQL = mysqli_query($conn, $sqlQuery);
    ?>


    <div class='container'>
        <?php
        while ($dataFotos = mysqli_fetch_array($resultadoSQL)) { ?>
            <img src="files/<?php echo $dataFotos['foto']; ?>" alt="Gustavo" class="section__masonry-wrapper__item-img">
        <?php } ?>

    </div>



</body>

</html>