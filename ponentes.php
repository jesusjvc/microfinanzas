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
        <div id="ponentes" class="template-section">
             <?php include("header.php"); ?>
            <section id="intro">

                <div class="texto">
                    <img src="img/ponentes/ponentes.svg" alt="Ponentes" class="fecha hospedaje">
                </div>

                <article>
                    <p class="texto">
                        En la decimoséptima edición del Encuentro Nacional de Microfinanzas, se reunirán reconocidos expertos del sistema microfinanciero nacional e internacional para intercambiar perspectivas y experiencias que contribuyan a ofertar más y mejores productos y servicios, así como analizar las asignaturas pendientes que hay en el sector para lograr un mayor impacto en la población microempresaria.
                    </p>

                    <!-- Set up your HTML -->
                    <div class="owl-carousel ponentes">
                        <div class="item">
                            <img src="img/ponentes/p1.jpg" alt="">
                            <div class="info">
                                <h3>Nunk Pellentesque Etiam</h3>
                                <p>PELLENTESQUE TEMPUS IPSUM DIAM ALIQUAM INTERDUM</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/p2.jpg" alt="">
                            <div class="info">
                                <h3>Fauchibus Etiam Proin</h3>
                                <p>PELLENTESQUE TEMPUS IPSUM DIAM ALIQUAM INTERDUM</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/p3.jpg" alt="">
                            <div class="info">
                                <h3>Laoreat Tindicunt Dapbus</h3>
                                <p>PELLENTESQUE TEMPUS IPSUM DIAM ALIQUAM INTERDUM</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/p4.jpg" alt="">
                            <div class="info">
                                <h3>Nunk Pellentesque Etiam</h3>
                                <p>PELLENTESQUE TEMPUS IPSUM DIAM ALIQUAM INTERDUM</p>
                            </div>
                        </div>

                    </div>
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
                        items: 4
                    }
                }
            });


        });

    </script>
</body>

</html>
