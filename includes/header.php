<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $pagina_atual = $_SERVER["REQUEST_URI"];
?>
<header>
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand" id="brand_esquerda" href="#">
                    <img src="img/logo.png" class="img-fluid ms-2" alt="Logo do grupo. Vírus na cor vermelha sendo atravessado por um pedaço de madeira rodeada por uma cobra  na cor verde" width="60" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto px-auto mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? "disabled" : ''; ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'prevencao.php')? 'disabled' : '' ?>" href="prevencao.php">Prevenção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'formas_contagio.php')? 'disabled' : '' ?>" href="formas_contagio.php">Formas de contágio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'vacinas.php')? 'disabled' : '' ?>" href="vacinas.php">Vacinas contra COVID</a>
                        </li>
                        <li class="nav-item navbar-brand">
                            <a class="navbar-brand" id="imagem_menu" href="index.php">
                                <img src="img/logo.png" class="ms-4 img-fluid" alt="Logo do projeto que redireciona para a página principal" width="75" height="69">
                            </a>
                        </li>
                        <li class="nav-item" id="link_ajuste">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'sintomas.php')? 'disabled' : '' ?>" href="sintomas.php">Sintomas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'casos_sp.php')? 'disabled' : '' ?>" href="casos_sp.php">Casos em SP</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'estatisticas.php')? 'disabled' : '' ?>" href="estatisticas.php">Estatísticas</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo (basename($_SERVER['PHP_SELF']) == 'fases_contencao.php')? 'disabled' : '' ?>" href="fases_contencao.php">Fases de contenção</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>