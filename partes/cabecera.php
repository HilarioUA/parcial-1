<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Hoja de estilos -->
    <link href="css/bootstrap/estilo.css" rel="stylesheet" type="text/css">
    <!-- JavaScript Bundle with Popper -->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body">
    <!-- Inicio de la cabecera de la página -->
    <nav class="navbar navbar-expand-lg" id="cabecera" style="background-color: #7532FA; position: fixed; width: 100%;">
        <div class="container-fluid" style="margin-left: 10%;">
            <div>
                <img src="img/al.png" height="80" width="80" style="border-radius: 100%;">
                <a class="navbar-brand blanco" href="#">&nbsp Start</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle blanco" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menú
                        </a>
                        <ul class="dropdown-menu blanco">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blanco" href="acercade.php">Acerca de</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-danger" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Fin de la cabecera -->

    </body>

</html>