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

            <div class="row" id="div_vacinaCOVID">
                <a class="link_principal" href="#formas"><h1 class="titulo_principal">Vacina Contra a COVID-19</h1></a>
                <h3 class="título secundário">  A CoronaVac é produzida com vírus inativados do novo coronavírus (Sars-CoV-2) para inoculação em
                    humanos. Com a aplicação de duas doses, o sistema imunológico passaria a produzir anticorpos contra o
                    agente causador da COVID-19.</h3>

            </div>

            <section>

                <div class="row mb-3" id="div_vacina">
                    <div class="col-6 float-start" id="imgs_vacina">
                        <img src="./img/Ellipse 7.png" class="img-fluid" alt="profissional no laboratório, com roupas de proteção e luvas, conduzindo uma pesquisa" id="imgvl" />
                    </div>
                    <div class="col-6 float-end" id="formas">
                        <h2 id="fonte1">1.O vírus é isolado em laboratório.</h2>
                    </div>

                    <div class="row" id="div_vacina">
                        <div class="col-6 float-start">
                            <h2 id="fonte2"> 2. Os cientistas infectam células com o vírus para que ele se multiplique.</h2>
                        </div>

                        <div class="col-6 float-end" id="imgs_vacina">
                            <img src="./img/Ellipse 4.png" class="img-fluid" alt="Imagem de um vírus na cor vermelha" id="imgv" />
                        </div>
                        <div class="row mb-3" id="div_vacina">
                            <div class="col-6 float-start" id="imgs_vacina">
                                <img src="./img/Ellipse 8.png" class="img-fluid" alt="cientista, com roupas de proteção segurando um recipiente com um líquido na cor marrom" id="imgc" />
                            </div>
                            <div class="col-6 float-end">
                                <h2 id="fonte1">3. Os vírus são coletados e inativados por meio de procedimentos químicos para não causarem infecção.</h2>
                            </div>

                            <div class="row" id="div_vacina">
                                <div class="col-6 float-start">
                                    <h2 id="fonte2"> 4. Uma substância chamada adjuvante é adicionada aos vírus inativados e purificados para formular a vacina.</h2>
                                </div>
                                <div class="col-6 float-end" id="imgs_vacina">
                                    <img src="./img/Ellipse 5.png" class="img-fluid" alt="Seringa sendo injetada numa figura representando o vírus" id="imgvs" />
                                </div>
                                <div class="col-12" id="div_vacina2">
                                    <div class="col-6 float-start" id="imgs_vacina">
                                        <img src="./img/Ellipse 6.png" class="img-fluid" alt="Seringa sendo abastecida com a vacina" id="imgva" />
                                    </div>
                                    <div class="col-6 float-end">
                                        <h2 id="fonte1">
                                            5. A vacina é aplicada em duas doses para induzir a produção de anticorpos por parte do sistema
                                            imunológico.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </MAIN>
    <section>
        <div class="text-end">
            <img src="img/virus_gif.gif" class="img-fluid" alt="ícone de vírus na cor vermelha, que se desloca na diagonal" width="300" height="250" id="img_virus_sintomas" />
        </div>
    </section>
    <aside>
        <div class="row" id="div_vacinaf">
            <p class="p1">
                Todas as vacinas têm que passar por testes rigorosos para garantir a sua segurança, antes de poderem
                ser
                introduzidas no programa de vacinação de um país.
            </p>
            <p class="p2">
                Cada vacina em desenvolvimento tem, em primeiro lugar, de ser submetida a exames e avaliações,
                para determinar que antígeno deve ser usado para provocar uma resposta do sistema imunitário. Esta fase
                pré-clínica é feita sem testes em humanos. Uma vacina experimental é testada primeiro em animais,
                para se
                avaliar a sua segurança e potencial para prevenir a doença.
            </p>
            <p class="p3">
                Se a vacina desencadear uma
                resposta
                imunitária, passa a ser testada em ensaios clínicos com humanos em três fases.
            </p>
            <p class="p4">
                Referência Bibliográfica:
                Como são as vacinas desenvolvidas? World Health Organization, 2021. Disponível
                em: https://www.who.int/pt/news-room/feature-stories/detail/how-are-vaccines-developed. Acesso em: 27 de
                abril de
                2021.
            </p>
            <p class="p5">
                VACINA CONTRA COVID-19. SP CONTRA O NOVO CORONAVÍRUS, 2021. Disponível em: https://www.saopaulo.sp.gov.br/coronavirus/vacina/. Acesso em: 27 de abril de 2021.
            </p>
            <p class="p6">
                Unsplash Photos for everyone,2021. Disponível em: https://unsplash.com/s/photos/covid. Acesso em: 21 de maio de 2021.
            </p>
        </div>
    </aside>


    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
