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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/formasdecontagio.css">
    <title>Formas De Contágio</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>


    <MAIN>
        <article>
            <a class="link_principal" href="#formas">
                <h1>Formas de contágio</h1>
            </a>
            <div class="contagio-1">
                <img src="img/contagio1.png" class="displayed" alt="Como prevenir o contágio,Lave as mãos com água e sabão ou use álcool em gel, cubra o nariz e a boca ao espirrar ou tossir, evite aglomerações, mantenha os ambientes bem ventilados, não compartilhe objetos pessoais">
            </div>
            <section>
                <section>
                    <h2 id="formas">Transmissão</h2>
                    <p>O novo coronavírus, que causa a COVID-19, pode ser transmitido entre pessoas.
                        A doença pode se espalhar por meio de pequenas gotículas do nariz ou da boca –
                        expelidas por uma pessoa com COVID-19 quando tosse ou espirra, por exemplo.
                        Essas gotículas depositam-se em objetos e superfícies ao redor da pessoa.
                        Outras pessoas se contaminam tocando esses objetos ou superfícies e depois tocando nos olhos, nariz ou boca.
                        fonte (https://vidasaudavel.einstein.br/coronavirus/covid-19-faq/)
                    </p>

                </section>

                <h3>Formas de contaminação</h3>
                    <ul>
                        <li class="li"> gotículas de saliva;</li>
                        <li class="li"> espirro;  </li>
                        <li class="li"> tosse; </li>
                        <li class="li"> catarro.</li>
                    </ul>
                
                
                <img src="img/contagio2.png" class="displayed" src="" alt="Quatro cenas com uma personagem mulher. A primeira cena mostra a personagem tossindo e as gotículas de saliva sendo lançadas ao ar. A segunda cena está representando o catarro como fator de transmissão. A terceira cena mostra a personagem espirrando. A quarta a personagem está soltando catarro">
                <h3>Importante</h3>

                <p>É importante destacar que, em alguns casos,
                    um indivíduo contaminado pode transmitir a doença, mesmo antes de apresentar sintomas.
                </p>



                <section>
                    <img src="img/contagio3.png" class="displayed" src="..." alt="Lembre-se sempre cubra o nariz e a boca ao espirrar ou tossir"><br>
                </section>

            </section>
        </article>
    </MAIN>

    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>