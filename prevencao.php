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
    <link rel="stylesheet" href="./css/prevencao.css">
    <title>Prevenção</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <main>
        <img class="rounded mx-auto mt-5 mb-5 d-block img-fluid" src="./img/prevencao-banner.png" alt="Cadeado símbolizando segurança e prevenção">
        <article class="container mb-5">
            <h1>Como se prevenir?</h1>
            <div class="row justify-content-md-center">
                <section class="col-sm-12 col-lg-5 topico">
                    <img src="./img/icon1-prev.png" alt="Mãos sendo lavadas">
                    <h3>Lave as mãos constantemente com água e sabão ou álcool em gel</h3>
                </section>
                <section class="col-sm-12 col-lg-5 topico" alt="Dois bonecos e uma seta abaixo indicando distanciamento">
                    <h3>Mantenha uma distância de 2 metros de pessoas</h3>
                    <img src="./img/icon2.png">
                </section>
                <section class="col-sm-12 col-lg-5 topico">
                    <img src="./img/icon3.png" alt="Máscara de proteção">
                    <h3>Use máscara</h3>
                </section>
                <section class="col-sm-12 col-lg-5 topico" alt="Casa na cor verde">
                    <h3>Fique em casa, se possível</h3>
                    <img src="./img/icon4.png">
                </section>
            </div>
        </article>
    </main>
    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>