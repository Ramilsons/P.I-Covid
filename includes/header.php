<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $pagina_atual = $_SERVER["REQUEST_URI"];
?>
<header>
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid">
                <a href="home.php" class="navbar-brand" id="brand_esquerda" href="#">
                    <img src="img/logo.png" class="img-fluid ms-2" alt="..." width="60" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto px-auto mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/home.php' || $pagina_atual == '/covid_ProjetoIntegrador/') ? "active" : ''; ?>" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/prevencao.php')? 'active' : '' ?>" href="prevencao.php">Prevenção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/formas_contagio.php')? 'active' : '' ?>" href="formas_contagio.php">Formas de contágio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/vacinas.php')? 'active' : '' ?>" href="vacinas.php">Vacinas contra COVID</a>
                        </li>
                        <li class="nav-item navbar-brand">
                            <a class="navbar-brand" id="imagem_menu" href="home.php">
                                <img src="img/logo.png" class="ms-4 img-fluid" alt="..." width="75" height="69">
                            </a>
                        </li>
                        <li class="nav-item" id="link_ajuste">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/sintomas.php')? 'active' : '' ?>" href="sintomas.php">Sintomas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/casos_sp.php')? 'active' : '' ?>" href="casos_sp.php">Casos em SP</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/estatisticas.php')? 'active' : '' ?>" href="estatisticas.php">Estatisticas</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark text-nowrap mt-1 fw-bolder <?php echo ($pagina_atual == '/covid_ProjetoIntegrador/fases_contencao.php')? 'active' : '' ?>" href="fases_contencao.php">Fases de contenção</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>