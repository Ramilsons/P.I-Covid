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
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="css/estatisticas.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Estatisticas</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <MAIN>
        <article>
            <div class="row" id="div_dados">
            <a class="link_principal" href="#imgs_grafico"><h1 class="titulo_principal">Estatística COVID-19 no Brasil</h1></a>
            </div>
            <section>
                <div class="row mt-5 mb-5" id="imgs_estastiscas">
                    <div class="col-4">
                        <img src="img/estatisca_1.png" class="img-fluid" alt="Casos recuperados 14.097.287. Em acompanhamento 1.094.437">
                    </div>
                    <div class="col-4">
                        <img src="img/estatisca_2.png" class="img-fluid" alt="Casos confirmados: 15.627.475 acumulado, 40.941 casos novos, 7436.4 incidência.">
                    </div>
                    <div class="col-4">
                        <img src="img/estatisca_3.png" class="img-fluid" alt="óbitos confirmados: 435.751 óbitos acumulados, 1.036 casos novos, 2.8 por cento de letalidade e 207.4 mortalidades ">
                    </div>
                </div>
            </section>
            <section>
                <div class="container" id="div_grafico">
                    <div class="row mb-3" id="div_estatisca">
                        <div class="col-6 float-start" id="imgs_grafico">
                            <img src="img/estatistica_casos_novos.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 float-end">
                            <h3 id="fonte_grafico">Casos novos de COVID-19 por data de notificação</h3>
                        </div>
                    </div>
                    <div class="row" id="div_estatisca">
                        <div class="col-6 float-start">
                            <h3 id="fonte_grafico2">Casos acumulados de COVID-19 por data de notificação</h3>
                        </div>
                        <div class="col-6 float-end" id="imgs_grafico">
                            <img src="img/estatistica_casos_acumulados.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row" id="div_estatisca">
                        <div class="col-6 float-start" id="imgs_grafico">
                            <img src="img/estatistica_obitos.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 float-end">
                            <h3 id="fonte_grafico">Óbitos de COVID-19 por data de notificação</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="text-end">
                    <img src="img/virus_gif.gif" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
                </div>
            </section>
        </article>
    </MAIN>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>