<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Estilos de fonte adicionais -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="css/quemsomos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Quem Somos</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>

    <MAIN>
        <article>
            <h1 class="titulo_principal">Quem Somos</h1>
            <section>
                <div class="container mt-5 mb-5">
                    <div class="row text-center" id="linha1">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <img src="img/luana_profile.png" class="img-fluid mt-5 mt-sm-5 mt-md-5" alt="">
                            <p class="nome">Luana Aparecida Pedroso de Oliveira</p>
                            <p class="paragrafo_1">RA:2650832023033</p>
                            <p class="paragrafo_1">Mini Biografia: Meu nome é Luana, tenho 28 anos, sou técnica em contabilidade, estou conhecendo a area de tecnologia e gostando muito.</p>
                            <p class="paragrafo_1">Função: Imagens e Gráficos.</p>
                            <a class="link_pagina" href="fases_contencao.php">Link: Fases de Contenção</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <img src="img/rafael_profile.png" class="img-fluid mt-5 mt-sm-5 mt-md-5" alt="">
                            <p class="nome">Rafael dos Santos</p>
                            <p class="paragrafo_1">RA: 2650832013016</p>
                            <p class="paragrafo_1">Mini Biografia: Olá me chamo Rafael tenho 30 anos sou formado em técnico
                                em química indústrial e elétrica industrial.
                                Agora estou migrando de área cursando sistemas para internet na FATEC-SR , no momento em busca de estágio.</p>
                            <p class="paragrafo_1">Função: Coder</p>
                            <a class="link_pagina" href="formas_contagio.php">Link: Formas de contagio</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <img src="img/ramilson_profile.png" class="img-fluid mt-5 mt-sm-5 mt-md-5" alt="">
                            <p class="nome">Ramilson Felix da Silva</p>
                            <p class="paragrafo_1">RA: 2650832023016</p>
                            <p class="paragrafo_1">Mini Biografia:Tive o primeiro contato com a programação em um curso técnico em 2017, agora estou cursando S.I na FATEC São Roque e estagiando na ROCKY.</p>
                            <p class="paragrafo_1">Função: Designer</p>
                            <a class="link_pagina" href="prevencao.php">Link: Prevenção</a>
                        </div>
                    </div>
                    <div class="row mt-lg-5 text-center" id="linha2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <img src="img/tatiana_profile.png" class="img-fluid mt-5 mt-sm-5 mt-md-5" alt="">
                            <p class="nome">Tatiana Nakata Mishima</p>
                            <p class="paragrafo_1">RA: 2650832023019</p>
                            <p class="paragrafo_1">Mini Biografia:Cursando Sistemas pela Internet na FATEC - S. R., Bacharel em Enfermagem pela F.C.M. Santa Casa de S. P., aumentando meu conhecimento em tecnologia.</p>
                            <p class="paragrafo_1">Função: Gerente,Textos e Logo</p>
                            <a class="link_pagina" href="vacinas.php">Link: Vacina Contra COVID-19</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <img src="img/vitor_profile.png" class="img-fluid mt-5 mt-sm-5 mt-md-5" alt="">
                            <p class="nome">Vitor Hugo Teixeira Oliveira </p>
                            <p class="paragrafo_1">RA: 260832023028</p>
                            <p class="paragrafo_1">Mini Biografia:Meu nome é Vitor Hugo, tenho 21 anos. Sempre gostei de tecnologia e há dois anos me encantei pela área de programação, agora busco criar sistemas que facilitem a vida das pessoas.</p>
                            <p class="paragrafo_1">Função: Coder</p>
                            <a class="link_pagina" href="sintomas.php">Link: Sintomas</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </MAIN>
    <div class="text-end">
        <img src="img/virus_gif.gif" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
    </div>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>