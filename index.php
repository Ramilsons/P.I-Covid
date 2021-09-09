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
                            if ($time > 8 && $time < 12) {
                                echo "Olá, bom dia!";
                            } else if ($time > 12 && $time < 6) {
                                echo "Olá, boa tarde!";
                            } else {
                                echo "Olá, boa noite!";
                            }
                            ?>
                        </h1>
                        <img src="img/Covid_Home-att.png" tabindex="0" class="img-fluid" alt="Três personagens. Uma mulher na esquerda limpando uma superficie, uma mulher no meio colocando máscara de proteção e um homem na direita lavando as mãos.">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-1  text-center">
                        <h1 class="display-6 col-sm-12" id="saiba_mais">Saiba tudo sobre o COVID-19</h1>
                        <h1 class="display-6 col-sm-12" id="subtitulo_cinza">Como se prevenir, sintomas, estatísticas, vacina e muito mais.</h2>
                            <a href="#div_linha_indice" class="btn btn-primary btn-lg col-12" id="botao_verde" href="#" role="button">Ver tópicos</a>
                    </div>
                </div>
            </div>
            <section>
                <div class="row mt-5 mb-3" id="div_dados">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                        <div class="card" id="card_conteudo">
                            <div class="card-body">
                                <p class="card-text" id="p_card_texto">Casos(Brasil)</p>
                                <p class="card-text" id="p_card_numero">16,9 mi</p>
                                <img src="img/virus_vermelho.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                        <div class="card" id="card_conteudo">
                            <div class="card-body">
                                <p class="card-text" id="p_card_texto">Recuperados(Brasil)</p>
                                <p class="card-text" id="p_card_numero">14,9 mi</p>
                                <img src="img/virus_green.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                        <div class="card" id="card_conteudo">
                            <div class="card-body">
                                <p class="card-text" id="p_card_texto">Casos(global)</p>
                                <p class="card-text" id="p_card_numero">173 mi</p>
                                <img src="img/virus_vermelho.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3" id="card_div">
                        <div class="card" id="card_conteudo">
                            <div class="card-body">
                                <p class="card-text" id="p_card_texto">Morte(Brasil)</p>
                                <p class="card-text" id="p_card_numero">473 mil</p>
                                <img src="img/virus_vermelho.png" class="img-fluid" alt="..." id="img_card" width="40" height="36">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <aside>
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-5 text-left" id="titulo_noticias">Últimas noticias</h1>
                    </div>
                </div>
            </header>
            <section>
                <div class="row me-5" id="div_noticias">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2">
                        <img src="https://s2.glbimg.com/ZpjJ0LeoPmInp0K5SoLoDHxGJ3I=/0x0:1200x870/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/h/L/bXop1ITlWZxBy5uzYMww/0506-recordemm-semanal-1-.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4">
                        <a target="_blank" title="Brasil registra 1.661 novas mortes por Covid em 24 horas" href="https://g1.globo.com/bemestar/coronavirus/noticia/2021/06/05/brasil-registra-1661-novas-mortes-por-covid-em-24-horas.ghtml"><h5 id="titulo_noticia">g1 | Brasil registra 1.661 novas mortes por Covid em 24 horas</h5></a>
                        <p id="subtitulo_noticia">País contabiliza 472.629 óbitos e 16.904.986 casos...</p>
                        <p id="data_home">05/06/2021</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-4 mt-sm-4 mt-md-4 mt-lg-0">
                        <img src="https://imagens.brasil.elpais.com/resizer/m0_WNUezgu2a--YFA5M11h2nXAw=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/LIMQXLZLBSX4Z623M6XTIDB7RI.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-4 mt-sm-4 mt-md-4 mt-lg-0">
                        <a target="_blank" title="CBF afasta presidente e cresce a tensão sobre a Copa América" href="https://brasil.elpais.com/brasil/2021-06-06/noticias-sobre-a-covid-19-e-a-crise-politica-ao-vivo.html"><h5 id="titulo_noticia">El País | CBF afasta presidente e cresce a tensão sobre...</h5></a>
                        <p id="subtitulo_noticia">Brasil confirmou 1.689 mortes em 24 horas neste sábado...</p>
                        <p id="data_home">06/06/2021</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
                        <img src="https://medias.cnnbrasil.com.br/pessoas-caminham-de-mascara-em-belem-pa-09092020.jpeg?format=WEBP&image=https://mediastorage.cnnbrasil.com.br/IMAGES/00/00/02/29112_33E572D6BE6243D7.jpg&width=804&height=452&resize=CROP" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
                        <a target="_blank" title="73,9% das cidades mantêm restrições, maio tem 59.010 mortes" href="https://www.cnnbrasil.com.br/saude/2021/05/31/ultimas-da-covid-19-73-9-das-cidades-mantem-restricoes-maio-tem-59010-mortes"><h5 id="titulo_noticia">CNN Brasil | 73,9% das cidades mantêm restrições...</h5></a>
                        <p id="subtitulo_noticia">Um levantamento realizado pela Confederação Nacional...</p>
                        <p id="data_home">31/05/2021</p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
                        <img src="https://s2.glbimg.com/3Kz-UEN8WL1y9OPEYY2qWVqdfeE=/0x0:1656x742/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/t/x/kYQB6ZQkOqxJxld2CPzg/transferencia-paciente-ok.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
                        <a target="_blank" href="https://g1.globo.com/ms/mato-grosso-do-sul/noticia/2021/06/06/hospitais-lotados-e-251-na-fila-por-leitos-faz-ms-mandar-pacientes-graves-com-covid-19-para-sp.ghtml" title="Hospitais lotados e 251 na fila por leitos fazem MS mandar pacientes graves com Covid-19 para SP "><h5 id="titulo_noticia">UOL | Hospitais lotados e 251 na fila por leitos fazem MS...</h5>
                        <p id="subtitulo_noticia">Na semana passada, o estado transferiu 9 pacientes para...</p>
                        <p id="data_home">06/06/2021</p>
                        <a id="link_home" target="_blank" href="https://www.google.com/search?client=firefox-b-d&q=noticias+covid">Ver tudo</a>
                    </div>
                </div>
            </section>
            </div>
    </aside>

    <section>
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
    </section>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>