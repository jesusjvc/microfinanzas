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
                            <img src="img/ponentes/ILDEFONSO-GUAJARDO.jpg" alt="">
                            <div class="info">
                                <h3>Ildefonso Guajardo Villarreal</h3>
                                <p>Secretario de Economía</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/CYNTHIA-VILLARREAL.jpg" alt="">
                            <div class="info">
                                <h3>Cynthia Villarreal Muraira</h3>
                                <p>Coordinadora General del PRONAFIM</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/VIRGILIO-ANDRADE.jpg" alt="">
                            <div class="info">
                                <h3>Virgilio Andrade Martínez</h3>
                                <p>Director General del Banco del Ahorro Nacional y Servicios Financieros </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/NARCEDALIA-RAMÍREZ.jpg" alt="">
                            <div class="info">
                                <h3>Narcedalia Ramírez Pineda</h3>
                                <p>Directora del   Instituto Nacional de la Economía Social (INAES)</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/Marco-Antonio-Lopez-Perez.jpg" alt="">
                            <div class="info">
                                <h3>Mario Alberto Di Costanzo Armenta</h3>
                                <p>Presidente Comisión Nacional para la Protección y Defensa de los Usuarios de Servicios Financieros (/CONDUSEF)</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/ENRIQUE-MARTINEZ.jpg" alt="">
                            <div class="info">
                                <h3>Enrique Martínez y Morales</h3>
                                <p>Director General de la Financiera Nacional de Desarrollo Agropecuario, Rural, Forestal y Pesquero (FND)</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/BERNARDO-ROSAS.jpg" alt="">
                            <div class="info">
                                <h3>Bernardo González Rosas </h3>
                                <p>Presidente CNBV</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/Fernando-Sandoval.jpg" alt="">
                            <div class="info">
                                <h3>Fernando Sandoval Oseguera</h3>
                                <p>Director de Instituciones Financieras / Estructurados de HR Ratings</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/Juan-Navarrete.jpg" alt="">
                            <div class="info">
                                <h3>Juan Navarrete</h3>
                                <p>Vicepresidente para el desarrollo de Alianzas y Negocios de Fundación Capital</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/Rene-Romero-Arrechavala-27.jpg" alt="">
                            <div class="info">
                                <h3>René Romero Arrechavala</h3>
                                <p>Director en Servicios Financieros Digitales de Amarante Consulting</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/ponentes/Marco-Antonio-Lopez-Perez.jpg" alt="">
                            <div class="info">
                                <h3>Marco Antonio López Pérez </h3>
                                <p>Vicepresidente de Supervisión de Grupos e Intermediarios Financieros de la CNBV</p>
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
