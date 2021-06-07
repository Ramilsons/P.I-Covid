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
    <link rel="stylesheet" href="css/vacina.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Vacina contra COVID-19</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <MAIN>
        <article>


            <h1>Vacina Contra a COVID-19<span class="badge badge-secondary"></span></h1>
            <p>A CoronaVac é produzida com vírus inativados do novo coronavírus (Sars-CoV-2) para inoculação em
                humanos.Com a aplicação de duas doses, o sistema imunológico passaria a produzir anticorpos contra o
                agente causador da COVID-19.</p>

            <section>
                <img src="./img/Ellipse 7.png" class="img-fluid" alt="vírus laboratório" id="imgvl" />
                <span class="align-middle"></span>
                <span class="align-text-bottom">1.O vírus é isolado em laboratório.</span>
        
                <section>

                    <img src="./img/Ellipse 4.png" class="img-fluid" alt="virus" id="imgv" />
                    <span class="align-baseline"> 2. Os cientistas infectam células com o vírus para que ele se multiplique.</span>
                    <div class="text-nowrap bd-highlight" style="width: 8rem;">
                    </div>
                </section>
                <section>
                    <img src="./img/Ellipse 8.png" class="img-fluid" alt="cientista" id="imgc" />
                    <span class="align-middle"></span>
                    <span class="align-text-bottom">3. Os vírus são coletados e inativados por meio de procedimentos químicos para não causarem infecção.</span>

                </section>
                <section>
                    <img src="./img/Ellipse 5.png" class="img-fluid" alt="vírus seringa" id="imgvs" />
                    <span class="align-baseline">4. Uma substância chamada adjuvante é adicionada aos vírus inativados e purificados para formular a
                        vacina.</span>

                </section>
                <section>
                    <img src="./img/Ellipse 6.png" class="img-fluid" alt="vacina" id="imgva" />
                    <span class="align-middle"></span>
                    <span class="align-text-bottom">5. A vacina é aplicada em duas doses para induzir a produção de anticorpos por parte do sistema
                        imunológico.</span>

                </section>
                <div class="text-end">
                    <img src="img/virus_gif.gif" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
                </div>
                <section>
                    <p>Todas as vacinas têm que passar por testes rigorosos para garantir a sua segurança, antes de poderem
                        ser
                        introduzidas no programa de vacinação de um país.
                        <br />Cada vacina em desenvolvimento tem, em primeiro lugar, de ser submetida a exames e avaliações,
                        para determinar que antigénio deve ser usado para provocar uma resposta do sistema imunitário. Esta fase
                        pré-clínica é feita sem testes em humanos. Uma vacina experimental é testada primeiro em animais,
                        para se
                        avaliar a sua segurança e potencial para prevenir a doença.<br />Se a vacina desencadear uma
                        resposta
                        imunitária, passa a ser testada em ensaios clínicos com humanos em três fases.<br />
                    </p>
                </section>
                <footer>
                    <p>
                        Referência Bibliográfica
                        <br />Como são as vacinas desenvolvidas? World Health Organization, 2021.Disponível
                        em:https://www.who.int/pt/news-room/feature-stories/detail/how-are-vaccines-developed .Acesso em: 27
                        abril
                        2021.
                        <br />VACINA CONTRA COVID-19. SP CONTRA O NOVO CORONAVÍRUS, 2021.Disponível em:https://www.saopaulo.sp.gov.br/coronavirus/vacina/.Acesso em: 27 abril 2021.
                        <br />Unsplash.Photos for everyone,2021.Disponível em:https://unsplash.com/s/photos/covid.Acesso em: 21 maio 2021.<br />
                    </p>
                </footer>
        </article>
    </MAIN>

    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
