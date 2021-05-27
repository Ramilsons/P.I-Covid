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
                <h1 class="titulo_principal">Estatística COVID-19 no Brasil</h1>
            </div>
            <section>
                <div class="row mt-5 mb-5" id="imgs_estastiscas">
                    <div class="col-4">
                        <img src="img/estatisca_1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="img/estatisca_2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="img/estatisca_3.png" class="img-fluid" alt="">
                    </div>
                </div>
            </section>
            <section>
                <div class="row" id="div_grafico">
                <div class="col-12" id="div_estatisca">
                        <div class="col-6 float-start">
                            <h3 id="fonte_grafico2">Casos acumulados de COVID-19 por data de notificação</h3>
                        </div>
                        <div class="col-6 float-end" id="imgs_grafico">
                            <img src="img/grafico_4.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-12 mb-3" id="div_estatisca">
                        <div class="col-6 float-start" id="imgs_grafico">
                            <img src="img/grafico_5.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 float-end">
                            <h3 id="fonte_grafico">Casos de COVID-19 por data de notificação</h3>
                        </div>
                    </div>
                    <div class="col-12" id="div_estatisca">
                        <div class="col-6 float-start">
                            <h3 id="fonte_grafico2">Casos acumulados de COVID-19 por data de notificação</h3>
                        </div>
                        <div class="col-6 float-end" id="imgs_grafico">
                            <img src="img/grafico_6.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-12" id="div_estatisca4">
                        <div class="col-6 float-start" id="imgs_grafico">
                            <img src="img/grafico_7.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 float-end">
                            <h3 id="fonte_grafico">Óbitos de COVID-19 por data de notificação</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="text-end">
                    <img src="img/virus 1.png" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
                </div>
            </section>
        </article>
    </MAIN>
    <aside>
        <p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
            also the leap into electronic typesetting, remaining It is a long established fact that a reader will be
            distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is
            that it has a more-or-less normal distribution of letters, as opposed to using .
        </p>
    </aside>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>