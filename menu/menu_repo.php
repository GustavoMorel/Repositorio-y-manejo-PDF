<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--Declaracion de Bootstrap-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximun-scalable=1.0, minimun-scalable=1.0" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/estilos.css" />
    <title>Menu Seleccionado</title>
    <div class="container">
        <header>

            <h1>
                <p align="center">Sistema General - Tribunal Electoral Permanente</p>
            </h1>
            <h2>
                <p align="center">Menu Repositorio</p>
            </h2>

        </header>
    </div>
</head>


<body>

    <div class="container">
        <br />
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar-1">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>

                        </button>


                    </div>

                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Documentos<span class="caret"> </span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu">
                                    <li> <a href="../pages/subir_documentos.php">Subir Documentos</a></li>
                                    <li> <a href="../pages/rela_docu_tema.php">Clasificar Documentos</a></li>
                                    <li> <a href="../usuario/consulta_usuario.php">Consulta</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Mantenimiento<span class="caret"> </span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu">
                                    <li> <a href="../pages/insertar_temas.php">Subir Temas</a></li>
                                    <li> <a href="../pages/insertar_subtemas.php">Subir Subtemas</a></li>

                                    <li> <a href="#">Consulta</a></li>

                                </ul>
                            </li>

                            <li><a href="">Operativo</a> </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Ip<span class="caret"> </span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu">
                                    <li> <a href="../informatica/ip_alta.php">Alta</a></li>
                                </ul>
                            </li>
                            <li><a href="../logout.php">Cerrar Sesion</a> </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
    </div>

    <main>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    </main>

    <footer>
        <div class="container">
            <h5>Hecho por el Area Informatica TEP año 2015</h5>
        </div>
    </footer>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>