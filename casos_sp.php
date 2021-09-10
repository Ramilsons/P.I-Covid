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
    <link rel="stylesheet" href="css/casos_sp.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Casos em São Paulo</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <MAIN>
        <article>
            <div class="row" id="div_dados">
            <a class="link_principal" href="#div_estatisca"><h1 class="titulo_principal">Estatística COVID-19 no estado de São Paulo</h1></a>
            </div>
            <div class="row mt-5" id="imgs_estastiscas">
                <img src="img/casos_banner.png" class="img-fluid" alt="Banner da Página Casos em São Paulo. Texto no centro contendo: Boletim completo de São Paulo">
            </div>
            <section>

                <div class="row" id="div_estatisca">
                    <div class="col-6 float-start">
                        <h3 id="fonte_grafico2">Casos acumulados de COVID-19 por data de notificação</h3>
                    </div>
                    <div class="col-6 float-end" id="imgs_grafico">
                        <img src="img/Total_de_casos_em_São_paulo.png" class="img-fluid" alt="Gráfico com o total de casos em são paulo, em 5 de abril de 2020 encontramos um total de 4.620 casos de COVID em são paulo e em 2 de junho de 2021 encontramos um total de 3314631 casos de COVID em são paulo">
                    </div>
                </div>
                <div class="row mb-3" id="div_estatisca">
                    <div class="col-6 float-start">
                        <h3 id="fonte_grafico2">Casos de COVID-19 por data de notificação</h3>
                    </div>
                    <div class="col-6 float-end" id="imgs_grafico">
                        <img src="img/Casos_confirmados_em_São_Paulo.png" class="img-fluid" alt="Gráfico que mostra o total de casos confirmados em são paulo apartir de 200 casos, passados 100 dias temos 229475 casos confirmados, passados 200 dias temos 991725 casos confirmados,passados 300 dias temos 1540513 caos confirmados, passados 400 dias temos 2750300 caos confirmados e depois de 500 dias temos 4015426 casos confirmados.">
                    </div>
                </div>
                <div class="row" id="div_estatisca">
                    <div class="col-6 float-start">
                        <h3 id="fonte_grafico2">Casos novos de COVID-19 por data de notificação</h3>
                    </div>
                    <div class="col-6 float-end" id="imgs_grafico">
                        <img src="img/Casos_novos_em_são_Paulo.png" class="img-fluid" alt="Gráfico que mostra novos casos no estado de são paulo por dia, em 5 de abril de 2020 tivemos um total de 542 casos novos, em 14 de junho de 2021 tivemos um total de 5306 casos novos, pelo gráfico verificamos que em 1 de abril de 2021 tivemos o maior pico ficando com 26567 casos novos neste dia.">
                    </div>
                </div>
                <div class="row">
                    <div class="text-end">
                        <img src="img/virus 2.png" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
                    </div>
                    <div class="col-12" id="div_estatisca4">
                        <div class="col-6 float-start">
                            <h3 id="fonte_grafico2">Óbitos de COVID-19 por data de notificação</h3>
                        </div>
                        <div class="col-6 float-end" id="imgs_grafico">
                            <img src="img/Óbitos_por_dia_em_são_paulo.png" class="img-fluid" alt="Gráfico que mostra óbitos por COVID-19 no estado de são paulo por dia, em 3 de abril de 2020 tivemos um total de 11 óbitos, em 14 de junho de 2021 tivemos um total de 92 óbitos, pelo gráfico verificamos que em 6 de abril de 2021 tivemos o maior pico ficando com 1389 óbitos neste dia">
                        </div>
                    </div>
                </div>

            </section>
        </article>
    </MAIN>
    <aside>
        <div class="row" id="div_final_casos">
            <p class="p1">
                A subnotificação dos casos e a fila de exames podem impedir que a curva traduza de forma precisa o avanço da doença.
            </p>
            <p class="p2">
                Referência Bibliográfica
                BOLETIM COMPLETO. SP CONTRA O NOVO CORONAVÍRUS, 2021.Disponível em:https://www.saopaulo.sp.gov.br/coronavirus/vacina/.Acesso em: 05 maio 2021.
            </p>
        </div>
    </aside>

    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>