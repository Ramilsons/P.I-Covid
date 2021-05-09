<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Estilos de fonte adicionais -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Header</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" id="brand_esquerda" href="#">
                    <img src="img/logo.jpeg" class="img-fluid ms-2" alt="..." width="60" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto px-auto mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="prevencao.php">Prevenção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="formas_contagio.php">Formas de Contágio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="vacinas.php">Vacinas Contra COVID</a>
                        </li>
                        <li class="nav-item navbar-brand">
                            <a class="navbar-brand" id="imagem_menu" href="#">
                                <img src="img/logo.png" class="ms-4 img-fluid" alt="..." width="75" height="69">
                            </a>
                        </li>
                        <li class="nav-item" id="link_ajuste">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="sintomas.php">Sintomas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="casos_sp.php">Casos em S.P.</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="estatisticas.php">Estatisticas</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder" href="fases_contencao.php">Fases de Contenção</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>