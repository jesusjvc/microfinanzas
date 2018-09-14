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
        <div id="presentacion" class="container">
            <?php include("header.php"); ?>

            <section id="intro">
                <img class="logo" src="img/logo.svg" alt="Encuentro Nacional de Microfinanzas">

                <picture>
                    <source media="(max-width: 799px)" srcset="img/borde-movil.svg">
                    <source media="(min-width: 800px)" srcset="img/borde.svg">
                    <img src="img/borde-movil.svg" alt="">
                </picture>

                <!-- Set up your HTML -->
                <div class="owl-carousel">
                    <div class="item"><img src="img/intro/carousel/small/1.jpg" alt=""></div>
                    <div class="item"><img src="img/intro/carousel/small/2.jpg" alt=""></div>
                    <div class="item"><img src="img/intro/carousel/small/3.jpg" alt=""></div>
                    <div class="item"><img src="img/intro/carousel/small/4.jpg" alt=""></div>
                    <div class="item"><img src="img/intro/carousel/small/5.jpg" alt=""></div>
                    <div class="item"><img src="img/intro/carousel/small/6.jpg" alt=""></div>
                </div>

                <div class="texto">
                    <img src="img/fecha.svg" alt="" class="fecha">
                </div>

                <article>
                    <p>
                        El <strong>Encuentro Nacional de Microfinanzas</strong> es un evento que el Programa Nacional de Financiamiento al Microempresario y a la Mujer Rural <strong>(PRONAFIM)</strong> realiza desde hace 16 años para intercambiar experiencias, tendencias e impulsar nuevos proyectos que contribuyan al crecimiento de las instituciones que componen el sector microfinanciero.
                    </p>
                    <p>
                        Entre los temas a discutir este año, se abordarán las innovaciones en productos adaptados a las necesidades de la población microempresaria, el uso de la tecnología y los siguientes pasos para hacer frente a los retos y asignaturas pendientes que nos permitan seguir trascendiendo con las microfinanzas.

                    </p>
                </article>
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
