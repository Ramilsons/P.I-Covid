<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Estilos de fonte adicionais -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Footer</title>
</head>

<body>
    <footer>
        <div class="clearfix position-relative" id="footer_div">
            <a href="home.php"><img src="img/logo.png" class="img-fluid" id="img_footer" width="80" height="76" alt=""></a>
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light" id="footer_menu">
                    <div class="container-fluid m-auto">
                        <div class="navbar-collapse">
                            <ul class="me-auto mb-2 mb-lg-0 col-5" id="order">
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="prevencao.php">Prevenção</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="sintomas.php">Sintomas</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="formas_contagio.php">Formas de Contágio</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="vacinas.php">Vacina Contra a COVID-19</a>
                                </li>
                            </ul>
                            <ul class="me-auto mb-2 mb-lg-0 col-5" id="order">
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="fases_contencao.php">Fases de Contenção</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="estatisticas.php">Estatisca</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="casos_sp.php">Casos em São Paulo</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link" id="link_menu_footer" aria-current="page" href="contato.php">Contato</a>
                                </li>
                            </ul>
                            <ul class="me-4 mb-2 mb-lg-0 col-2" id="order">
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link text-nowrap" id="link_menu_footer" aria-current="page" href="duvidas.php">Dúvidas</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link text-nowrap" id="link_menu_footer" aria-current="page" href="fakenews.php">Fake News</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link text-nowrap" id="link_menu_footer" aria-current="page" href="normas.php">Normas de Uso</a>
                                </li>
                                <li class="nav-item" id="li_footer">
                                    <a class="nav-link text-nowrap" id="link_menu_footer" aria-current="page" href="quemsomos.php">Quem somos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="position-absolute bottom-0 start-50 mb-5">
            <a href="https://www.facebook.com/"><i class="bi bi-facebook me-5" id="facebook_icon"></i>  </a>
            <a href="https://twitter.com/"><i class="bi bi-twitter ms-5" id="twitter_icon"></i></a>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>