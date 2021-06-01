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
    <link rel="stylesheet" href="css/duvidas.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Dúvidas Frequentes</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <MAIN>
        <article>
            <h1 class="titulo_pricipal">Dúvidas Frequentes</h1>
            <div class="container" id="indice_1">
                <section>
                    <div class="row mt-lg-5 mt-sm-5 mt-md-5" id="div_row_duvidas">
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3 mb-sm-3 mb-md-3 ms-lg-5 me-lg-5" id="div-amarela">
                            <h3 class="titulo_card">O que é o Coronavírus?</h3>
                            <p class="paragrafo_card">Os coronavírus são uma grande família viral, conhecidos desde meados de 1960, que causam infecções respiratórias em seres humanos e em animais.</p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3 mb-sm-3 mb-md-3 ms-lg-5" id="div-amarela">
                            <h3>Qual(is) remédios a pessoa com COVID-19 deve tomar?</h3>
                            <p class="paragrafo_card">Não existe remédio específico. O tratamento é baseado no quadro clínico da pessoa. É indicado repouso e consumo de bastante água, além de algumas medidas adotadas para aliviar os sintomas, conforme cada caso.</p>
                        </div>
                    </div>
                    <div class="row mt-lg-5" id="div_row_duvidas">
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3 mb-sm-3 mb-md-3 ms-lg-5 me-lg-5" id="div-amarela">
                            <h3 class="titulo_card">O que é o período de incubação?</h3>
                            <p class="paragrafo_card">Período de incubação consiste no intervalo entre a data de contato com o vírus até o início dos sintomas. No caso do COVID-19, já se sabe que o vírus pode ficar incubado por até duas semanas (14 dias), quando os sintomas aparecem desde a infecção.</p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3 mb-sm-3 mb-md-3 ms-lg-5" id="div-amarela">
                            <h3 class="titulo_card">O Coronavírus pode matar?</h3>
                            <p class="paragrafo_card">O óbito pode ocorrer em virtude de complicações da infecção, como por exemplo, insuficiências respiratórias.</p>
                        </div>
                    </div>
                    <div class="row mt-lg-5 mb-lg-5" id="div_row_duvidas">
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3 mb-sm-3 mb-md-3 ms-lg-5 me-lg-5" id="div-amarela">
                            <h3 class="titulo_card">Como é feito o diagnóstico da COVID-19?</h3>
                            <p class="paragrafo_card">O diagnóstico é feito com a coleta de materiais respiratórios (aspiração de vias aéreas ou coleta de secreções da boca e nariz).</p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-3 mb-sm-3 mb-md-3 ms-lg-5" id="div-amarela">
                            <h3 class="titulo_card">Como a pessoa com COVID-19 sabe que está curada da doença.</h3>
                            <p class="paragrafo_card">No momento, para os casos mais leves, com recomendação de isolamento domiciliar, é necessário permanecer sob monitoramento por no mínimo sete dias, e permanecer isolado até que os sintomas acabem, para evitar a transmissão. </p>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </MAIN>
    <aside>
        <div class="container">
            <div class="row" id="div_final_duvidas">
                <p class="p1">Referência Bibliográfica
                    Perguntas e respostas: tire suas dúvidas sobre o novo coronavírus.Do Portal do Governo, 2021.Disponível em: <a href="https://www.saopaulo.sp.gov.br/spnoticias/perguntas-e-respostas-tire-suas-duvidas-sobre-coronavirus/.Acesso">Acesse a Referência</a> em:05 de maio de 2021.</p>
            </div>
        </div>
        <div class="text-end" id="indice_2">
            <img src="img/virus_gif.gif" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
        </div>
    </aside>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>