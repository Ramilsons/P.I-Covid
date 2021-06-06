<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/estilos.css" rel="stylesheet">
    <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Estilos de fonte adicionais -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/sintomas.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Sintomas</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <MAIN>
        <article>
            <div class="container">
                <div class="row col-12">
                    <div class="col-12 align-self-start" id="div_titulo_sintomas">
                        <h1 class="display-4" id="titulo_sintomas">Sintomas</h1>
                    </div>
                    <div class="col-12 align-self-start" id="Corpo_sintomas">
                        <p class="lead" style="margin-top: 30px; margin-left: 15px; font-size: 1.0em;">
                            O número de infectados em nosso país cresce cada vez mais. Devido a isso devemos salientar os primeiros sintomas que são apresentados quando contraimos o virus, já que eles podem ser facilmente confundidos com os sintomas de outras doenças.
                            O periodo de incubação do virús é de 2 a 14 dias, esse é o tempo que demora para os sintomas aparecerem.
                            Os primeiros indicios de manifestação do vírus são: febre e tosse. Dificuldades para respirar e fadiga costumam aparecer durante a progressão da doença. Durante o sétimo dia 80% das pessoas conseguem uma melhora dos sintomas. Caso eles persistam o quadro passa a ser moderado. Nos casos mais complicados, os sintomas se intensificam causando insuficiência respiratória e necessidade de utilizar ventilação mecãnica.
                        </p>
                    </div>
                </div>
                <section>
                    <div class="row mb-5" id="cards">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 col-xxl-3" id="card_1">
                            <div class="card" id="card">
                                <img src="img/Febre.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text" id="p_card">A febre é um dos primeiros sintomas da Covid-19, junto com tosse. Normalmente aparece durante 2 a 14 dias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 col-xxl-3" id="card_1">
                            <div class="card" id="card">
                                <img src="img/Tosse Seca.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text" id="p_card">A tosse vem acompanhada de febre geralmente. Esse sintoma pode se agravar ao longo da doença, causando desconforto.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 col-xxl-3" id="card_1">
                            <div class="card" id="card">
                                <img src="img/Fadiga.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text" id="p_card">Após a progressão da doença normalmente a fadiga começa a aparecer, podendo aumentar bastante em casos graves.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-3 col-xxl-3" id="card_1">
                            <div class="card" id="card">
                                <img src="img/Falta de ar.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text" id="p_card">A falta de ar é o sintoma mais conhecido da Covid-19. Ele estará muito presente em casos graves e moderados. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </MAIN>
    <section>
        <div class="text-end">
            <img src="img/virus_gif.gif" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
        </div>
    </section>
    <aside>
        <div class="container">
            <div class="row">
                <p class="p1">Referência Bibliográfica
                    Sintomas da COVID-19. Dísponivel no site UOL, 2021. Para mais informações acesse <a href="https://www.uol.com.br/vivabem/noticias/redacao/2021/02/04/saiba-quais-sao-os-principais-sintomas-da-covid-19.htm?next=0001H867U11N">Uol</a></p>
            </div>
        </div>
    </aside>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>