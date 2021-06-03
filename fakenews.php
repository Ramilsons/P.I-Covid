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
    <link rel="stylesheet" href="css/fakenews.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Fake-News</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <MAIN>
        <article>
            <header>
                <div class="container">
                    <div class="row text-center">
                        <h1 class="titulo_principal">Fake News</h1>
                    </div>
                    <div class="row text-center mt-3 mb-5">
                        <img src="img/fakenews_banner.png" class="img-fluid" alt="">
                    </div>
                </div>
            </header>

            <section>
                <div class="container">
                    <section>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-3 mt-3 mt-sm-3 mt-md-0 me-2 me-sm-2 me-md-2 me-lg-0 me-xl-0 float-start">
                                    <img src="img/Rectangle 416_fake.png" class="img-fluid">
                                </div>
                                <div class="col-9 mt-4 mt-sm-4 mt-md-0 float-start">
                                    <h5 class="paragrafo"> É falso que o governo do estado de são Paulo irá cortar o fornecimento de Luz entre 0hs e 6hs.</h5>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-3 mt-3 mt-sm-3 mt-md-0 me-2 me-sm-2 me-md-2 me-lg-0 me-xl-0 float-start">
                                    <img src="img/Rectangle 416_fake.png" class="img-fluid">
                                </div>
                                <div class="col-9 mt-4 mt-sm-4 mt-md-0 float-start">
                                    <h5 class="paragrafo"> É falsa a mensagem com novo cronograma de vacinação que circula no Whatsapp.</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row mt-lg-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-3 mt-3 mt-sm-3 mt-md-0 me-2 me-sm-2 me-md-2 me-lg-0 me-xl-0 float-start">
                                    <img src="img/Rectangle 416_fake.png" class="img-fluid">
                                </div>
                                <div class="col-9 mt-4 mt-sm-4 mt-md-0 float-start">
                                    <h5 class="paragrafo"> É falso que o governo do estado de São Paulo irá prender quem não seguir o toque de restrição.</h5>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-3 mt-3 mt-sm-3 mt-md-0 me-2 me-sm-2 me-md-2 me-lg-0 me-xl-0 float-start">
                                    <img src="img/Rectangle 416_fake.png" class="img-fluid">
                                </div>
                                <div class="col-9 mt-4 mt-sm-4 mt-md-0 float-start">
                                    <h5 class="paragrafo"> É falso que o site <a href="https://VACINALA.SP.GOV.BR/">Vacinala</a> é utilizado para aplicar golpes.Ele reúne pré-cadastro, locais de vacinação e outras informações relevantes.</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row mt-lg-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 me-md-2">
                                <div class="col-2 col-sm-2 col-md-2 col-lg-3 mt-3 mt-sm-3 mt-md-0 me-2 me-sm-2 me-md-2 me-lg-0 me-xl-0 float-start" style="margin-top: -10px;">
                                    <img src="img/Rectangle 416_fake.png" class="img-fluid">
                                </div>
                                <div class="col-9 mt-4 mt-sm-4 mt-md-0 float-start">
                                    <h5 class="paragrafo">É falso que respiradores encontrados pela PM pertenciam a hospital do Estado de São Paulo.</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <section>
                <div class="text-end">
                    <img src="img/virus_gif.gif" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
                </div>
            </section>
            
            <footer>
                <section>
                    <div class="container" id="footer_article">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6" id="div_paragrafo">
                                <h4 class="mt-2 mt-sm-2 mt-md-4 mt-lg-4" id="paragrafo_footer">Não seja vítima do fake news, estude a fonte da informação, pesquise, antes de acreditar ou repassar uma informação.</h4>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <img src="img/fakenews_banner_footer.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row mt-5 text-left">
                            <h5 class="paragrafo">Referência Bibliográfica
                                SEM FAKE NEWS.Do Portal do Governo, 2021.Disponível em:
                                <a href="https://www.saopaulo.sp.gov.br/coronavirus/sem-fake-news/.Acesso">Sem Fake News</a> em 05 de maio de 2021.
                            </h5>
                        </div>
                    </div>
                </section>
            </footer>
        </article>
    </MAIN>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>