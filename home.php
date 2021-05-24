<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Estilos de fonte adicionais -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>

    <main>
        <article>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <h1 class="display-4 text-left" id="titulo_cumprimento">
                            <?php 
                                $time = date('H');
                                if($time > 8 && $time < 12){
                                    echo "Olá, bom dia!";
                                }else if($time > 12 && $time < 6){
                                    echo "Olá, boa tarde!";
                                }else{
                                    echo "Olá, boa noite!";
                                }
                            ?>
                        </h1>
                        <img src="img/Covid_Home.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-1  text-center">
                        <h1 class="display-6 col-sm-12" id="saiba_mais">Saiba tudo sobre o COVID-19</h1>
                        <h1 class="display-6 col-sm-12" id="subtitulo_cinza">Como se prevenir, sintomas, estatísticas, vacina e muito mais.</h2>
                            <a class="btn btn-primary btn-lg col-12" id="botao_verde" href="#" role="button">Ver tópicos</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-3" id="div_dados">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                    <div class="card" id="card_conteudo">
                        <div class="card-body">
                            <p class="card-text" id="p_card_texto">Óbitos</p>
                            <p class="card-text" id="p_card_numero">400.000</p>
                            <img src="img/virus_vermelho.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                    <div class="card" id="card_conteudo">
                        <div class="card-body">
                            <p class="card-text" id="p_card_texto">Recuperados</p>
                            <p class="card-text" id="p_card_numero">400.000</p>
                            <img src="img/virus_green.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                    <div class="card" id="card_conteudo">
                        <div class="card-body">
                            <p class="card-text" id="p_card_texto">Confirmados</p>
                            <p class="card-text" id="p_card_numero">400.000</p>
                            <img src="img/virus_vermelho.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                    <div class="card" id="card_conteudo">
                        <div class="card-body">
                            <p class="card-text" id="p_card_texto">Vacinados</p>
                            <p class="card-text" id="p_card_numero">400.000</p>
                            <img src="img/virus_green.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <aside>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-5 text-left" id="titulo_noticias">Últimas noticias</h1>
                    </div>
                </div>
                <div class="row me-5" id="div_noticias">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-md-0">
                        <img src="img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-md-3">
                        <h5 id="titulo_noticia">Como se prevenir</h5>
                        <p id="subtitulo_noticia">Uso de máscaras e higienização das mãos são os principais meios de prevenção.</p>
                        <p id="data_home">21/03/2021</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-md-0">
                        <img src="img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-md-3">
                        <h5 id="titulo_noticia">Formas de contágio</h5>
                        <p id="subtitulo_noticia">Pode se espalhar por meio de pequenas gotículas expelidas do nariz ou da boca.</p>
                        <p id="data_home">21/03/2021</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-md-0 mt-lg-5 mt-xl-5">
                        <img src="img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-md-5 mt-lg-5 mt-xl-5">
                        <h5 id="titulo_noticia">Quais os sintomas</h5>
                        <p id="subtitulo_noticia">Febre, tosse e fadiga procure um médico.</p>
                        <p id="data_home">21/03/2021</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-sm-0 mt-md-0 mt-lg-5 mt-xl-5">
                        <img src="img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-md-5 mt-lg-5 mt-xl-5">
                        <h5 id="titulo_noticia">Dúvidas Frequentes</h5>
                        <p id="subtitulo_noticia">Como pega? Como tratar?</p>
                        <p id="data_home">21/03/2021</p>
                    </div>
                </div>
                <div class="text-end">
                    <a id="link_home" href="">Ver tudo</a>
                </div>

            </div>
        </aside>

        <div class="text-end" id="div_img_lateral">
            <img src="img/virus 1.png" class="img-fluid" alt="Imagem de Virús" width="200" height="200" id="img_virus_sintomas">
        </div>
        <div class="row mt-5 mb-3" id="div_linha_indice">

            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4" id="div_img">
                <a href="vacinas.php" id="link_img_indice">
                    <img src="img/vacina_home.png" class="img-fluid" alt="">
                    <p id="prgfo_indice">Vacina Contra o COVID</p>
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4" id="div_img">
                <a href="fakenews.php" id="link_img_indice">
                    <img src="img/Fake_home.png" class="img-fluid" alt="">
                    <p id="prgfo_indice">Fake News</p>
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4" id="div_img">
                <a href="duvidas.php" id="link_img_indice">
                    <img src="img/duvidas_home.png" class="img-fluid" alt="">
                    <p id="prgfo_indice">Dúvidas Frequentes</p>
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4" id="div_img">
                <a href="fases_contencao.php" id="link_img_indice">
                    <img src="img/Rectangle 493.png" class="img-fluid" alt="">
                    <p id="prgfo_indice">Fases de Contenção</p>
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4" id="div_img">
                <a href="contato.php" id="link_img_indice">
                    <img src="img/contato_home.png" class="img-fluid" alt="">
                    <p id="prgfo_indice">Contato</p>
                </a>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4" id="div_img">
                <a href="estatisticas.php" id="link_img_indice">
                    <img src="img/estatistica_home.png" class="img-fluid" alt="">
                    <p id="prgfo_indice">Estatistisca</p>
                </a>
            </div>
        </div>
    </main>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>