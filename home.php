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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Home</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>

    <MAIN>
        <article>
        <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <h1 class="display-4 text-left" id="titulo_cumprimento">Olá, boa tarde!</h3>
                        <img src="img/Covid_Home.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-1  text-center">
                        <h1 class="display-6 col-sm-12" id="saiba_mais">Saiba tudo sobre o COVID-19</h1>
                        <h1 class="display-6 col-sm-12" id="subtitulo_cinza" >Como se prevenir, sintomas, estatísticas, vacina e muito mais.</h2>
                        <a class="btn btn-primary btn-lg col-12" id="botao_verde" href="#" role="button">Ver tópicos</a>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color: gray;">
                
            </div>
        </article>
        <aside>
            <header>
                <h2>Últimas notícias</h2>
            </header>
            <section>
                <img src="">
                <h3>Titulo Exemplo</h3>
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptatum.</h5>
                <h6>20/03/2010</h6>
            </section>
            <section>
                <img src="">
                <h3>Titulo Exemplo</h3>
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptatum.</h5>
                <h6>20/03/2010</h6>
            </section>
            <section>
                <img src="">
                <h3>Titulo Exemplo</h3>
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptatum.</h5>
                <h6>20/03/2010</h6>
            </section>
            <section>
                <img src="">
                <h3>Titulo Exemplo</h3>
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptatum.</h5>
                <h6>20/03/2010</h6>
            </section>
            <a>Ver tudo</a>
        </aside>
        <section>
            <section>
                <img src="" alt="">
                <h3>Cuidados</h3>
            </section>
            <section>
                <img src="" alt="">
                <h3>Estatistica</h3>
            </section>
            <section>
                <img src="" alt="">
                <h3>Cuidados</h3>
            </section>
            <section>
                <img src="" alt="">
                <h3>Cuidados</h3>
            </section>
            <section>
                <img src="" alt="">
                <h3>Cuidados</h3>
            </section>
            <section>
                <img src="" alt="">
                <h3>Cuidados</h3>
            </section>
        </section>
    </MAIN>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>