<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encuentro Nacional de Microfinanzas</title>


    <!-- CSS -->
    <link href="/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="less/main.css">

    <!-- Respond.js soporte de media queries para Internet Explorer 8 -->
    <!-- ie8.js EventTarget para cada nodo en Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.2/ie8.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Contenido -->
    <main class="page">
        <div id="expomf" class="container template-section">
            <?php include("header.php"); ?>
            <section id="intro">

                <div class="texto">
                    <img src="img/expomf/expomf.svg" alt="Expo MF" class="expo">
                </div>

                <article>
                    <p>
                        En el marco del XVII Encuentro Nacional de Microfinanzas, visita el área de la ExpoMF donde encontrarás a las empresas líderes del sector de las microfinanzas especializadas en:
                    </p>

                    <ul>
                        <li>Financiamiento</li>
                        <li>Capacitación</li>
                        <li>Consultoría</li>
                        <li>Seguros</li>
                        <li>Software</li>
                        <li>Corresponsables Bancarios</li>
                        <li>Instituciones de Gobierno</li>
                    </ul>
                </article>
            </section>

            <section id="expositor-registrate">
                <a href="https://acob.guru/e-nscribe/iniciopronafim2018.asp" class="cta">
                    <img src="img/expomf/cta.svg" alt="Expositor registrate aqui">
                </a>

                <div class="patrocinadores">
                    <!-- Set up your HTML -->
                <div class="owl-carousel">
                    <div class="item"><img src="img/expomf/patrocinadores/Logos-01.svg" alt=""></div>
                    <div class="item"><img src="img/expomf/patrocinadores/Logos-02.svg" alt=""></div>
                    <div class="item"><img src="img/expomf/patrocinadores/Logos-03.svg" alt=""></div>
                    <div class="item"><img src="img/expomf/patrocinadores/Logos-04.svg" alt=""></div>
                    
                   
                </div>

                </div>
            </section>
        </div>
    </main>

    <!-- JS -->
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.min.js"></script>
    
     <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 1500,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });


        });

    </script>
</body>

</html>
