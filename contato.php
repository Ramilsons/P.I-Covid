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
    <link rel="stylesheet" href="css/contato.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Contato</title>
</head>

<body>
    <!-- Header php -->
    <?php include "includes/header.php"; ?>
    <main>
        <article>
            <img src="img/banner_contato.png" class="img-fluid" id="imgbanner"alt="">
            <div class="row" id="div_icons">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3 text-center">
                    <img src="img/mail_contato.png" class="img-fluid" alt="">
                    <h5 id="frase_contato">sistemas@fatecsaoroque.sp.gov.br</h5>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3 text-center">
                    <img src="img/celular_contato.png" class="img-fluid mt-xl-1 mt-lg-1" alt="">
                    <h5 class="mt-3" id="frase_contato">(11)91111-1111</h5>
                    <a href="" id="link_whats">Envie uma mensagem no Whatsapp</a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3 text-center">
                    <img src="img/gps_contato.png" class="img-fluid mt-xl-1 mt-lg-1" alt="">
                    <h5 class="mt-3" id="frase_contato">Rua Marechal Deodoro da Fonseca, 132 - Centro | CEP 18130-070 – São Roque/SP</h5>
                </div>
            </div>
        </article>
        <div class="text-end">
            <img src="img/virus 1.png" class="img-fluid" alt="Imagem de Virús" width="300" height="250" id="img_virus_sintomas">
        </div>
    </main>

    <!-- Footer php -->
    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>