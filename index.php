<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BookToYou</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+51 987 654 321</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lun-Dom: 24h</span></i>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.php">BookToYou</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
                    <li><a class="nav-link scrollto" href="#events">Protocolos</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menú</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Especialidad</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Experiencias</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galería</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Staff</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservaciones</a>

        </div>
    </header>
    <!-- End Header -->
    <?php

if(!empty($_GET["val"])){

    if($_GET["val"] == 1){
        ?>
     <script>
        window.alert("Ingrese todos los datos")
    </script>         
        <?php
    }
    if($_GET["val"] == 2){
    ?>
    <script>
        window.alert("Reserva completada")
    </script>                    
    <?php
    }
    if($_GET["val"] == 3){
    ?>
        <script>
            window.alert("Tuvimos un inconveniente, comunicate con nosotros +51 987 654 321")
        </script>                    
    <?php
    }
    if($_GET["val"] == 4){
        ?>
            <script>
                window.alert("Gracias por suscribirse")
            </script>                    
        <?php
        }
        if($_GET["val"] == 5){
            ?>
                <script>
                    window.alert("Fallo al suscribirse, intentelo nuevamente")
                </script>                    
            <?php
            }

}


?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenidos a<span> BookToYou</span></h1>
                    <h2>El restaurante italiano que se convertirá en tu favorito</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Nuestro Menú</a>
                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reserva una mesa</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=HICi7OmO8dk" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="assets/img/about2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Somos un restaurante italiano con tradición napolitana, listos para servirle.</h3>

                        <p class="fst-italic">
                            Nuestra comida con auténtica tradición italiana te dejará sin palabras.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Recetas que han trascendido por generaciones.</li>
                            <li><i class="bi bi-check-circle"></i> Nuestro servicio es nuestra garantía.</li>
                            <li><i class="bi bi-check-circle"></i> Excelente ambiente. Perfecto para pasar momentos especiales con tus seres queridos, contamos con terraza y diferentes espacios según la ocasión.</li>
                        </ul>
                        <p>
                            Con más de 40 años de experiencia, 'Book To You' engríe día a día a familias, amigos, parejas y amantes de la comida italiana con lo más exquisitos platillos de antaño y únicos, con ese toque que tanto gusta.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Protocolos</h2>
                    <p>Garantizamos tu seguridad con nuestras medidas de prevención</p>
                </div>

                <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="covid1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Nuestro personal utiliza los equipos de protección necesarios</h3>
                                    <p class="fst-italic">
                                        Nuestros trabajadores son nuestra familia.
                                        <br>Nos gusta protegerlos y protegerte a ti también.
                                    </p>
                                    <p>
                                        Por eso, en su indumentaria diaria no pueden faltar los principales equipos de protección personal:
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i> Mascarilla</li>
                                            <li><i class="bi bi-check-circle"></i> Careta </li>
                                            <li><i class="bi bi-check-circle"></i> Guantes </li>
                                            <li><i class="bi bi-check-circle"></i> Lentes </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="covid2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <div class="underlinestyle">
                                        <h3>Cuidamos nuestro ambiente</h3>
                                    </div>
                                    <p class="fst-italic">
                                        Nos preocupamos por desinfectar nuestras mesas por y para ti.
                                    </p>
                                    <p>
                                        Antes, durante y después de tu llegada, nuestro personal tendrá los mejores cuidados con los productos necesarios. Sabemos lo importante que es el orden y limpieza, sobre todo en tiempos de pandemia, por lo que mantener nuestros ambientes desinfectados
                                        es una de nuestras mayores preocupaciones.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="covid4.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Evitamos el contacto</h3>
                                    <p class="fst-italic">
                                        Para tu comodidad, nuestro menú se encuentra online y te ofrecemos diversas formas de pago.
                                    </p>
                                    <p>
                                        Para que escojas tu platillo favorito, nuestros meseros pueden mostrarte nuestro menú en su tablet, tomando la debida distancia; o te pueden ofrecer un link o código QR para que lo puedas ver en tu propio dispositivo. Tú escojes la mejor opción para ti.
                                        Además, puedes pagar tu cuenta a través de diversos medios de pago como:
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i> Yape </li>
                                            <li><i class="bi bi-check-circle"></i> Plin </li>
                                            <li><i class="bi bi-check-circle"></i> Transferencias bancarias </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Events Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>¿Por qué nosotros?</h2>
                    <p>¿Por qué decimos que "Book To You" es para ti?</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Conservamos la esencia de lo tradicional</h4>
                            <p>Sabemos que te encanta la comida italiana de siempre, por lo que nuestras recetas se basan en esos secretos de la abuela que te harán sentir como en Italia.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>Innovamos con lo que te gusta</h4>
                            <p>
                                Así como tenemos los clásicos platillos que tanto te gusta, también te sorprendemos con el toque "Book To You" en platillos únicos combinando tus sabores y texturas favoritas.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4> Tu comodidad y satisfacción es nuestro principal objetivo </h4>
                            <p> Tú eres parte de la familia. Y como tal, queremos hacerte sentir a gusto en esta, tu casa. Para ello, nuestro personal buscará cuidar de tu salud, paladar y bolsillo. El respeto y la empatía son pilares en nuestra relación.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu</h2>
                    <p>Nuestro Delicioso Menú</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Todo</li>
                            <li data-filter=".filter-starters">Entradas</li>
                            <li data-filter=".filter-salads">Ensaladas</li>
                            <li data-filter=".filter-specialty">Especialidad</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/napolitana.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Pizza Napolitana</a><span>s/.55.90</span>
                        </div>
                        <div class="menu-ingredients">
                            Tomate, mozzarella, albahaca, aceite de oliva
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/clasica.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Pizza Clásica</a><span>s/.45.50</span>
                        </div>
                        <div class="menu-ingredients">
                            Tomate, queso, jamón, masa delgada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/alfredo.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Fettuccini Alfredo</a><span>s/.27.90</span>
                        </div>
                        <div class="menu-ingredients">
                            Delicada pasta envuelta en finos ingredientes
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/pesto.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Fettuccini al Pesto</a><span>s/.29.00</span>
                        </div>
                        <div class="menu-ingredients">
                            Pasta al dente con finas hierbas
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/lasagna.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Lasagna</a><span>s/.19.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Salsa de tomate, carne y masa de hojaldre
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/risotto2.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Risotto</a><span>s/.24.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Arroz, caldo, parmesano y vino blanco
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/tiramisu.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Tiramisú</a><span>s/.12.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Pastel frío en capas con nuestra receta secreta
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/gelatto.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Gelatto</a><span>s/.9.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Helado artesanal de la casa
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/ravioles.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Ravioles</a><span>s/.22.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Pasta acompañada de queso parmesano con base de tomate y especies
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nuestros especiales</h2>
                    <p>Nuestras recomendaciones</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Pizza Clásica</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Pizza Napolitana</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Fettuccini al Pesto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Ravioles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Tiramisú</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pizza Clásica</h3>
                                        <p class="fst-italic">
                                            Hacemos de lo clásico, lo más delicioso.
                                        </p>
                                        <p>
                                            Todas nuestras pizzas están hecha en horno casero, con ingredientes frescos.
                                            <br>E una pizza tradicional, mezclada con ingredientes regionales: como tomate, jamón y queso.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/clasica.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pizza napolitana</h3>
                                        <p class="fst-italic">La más pedida del mes</p>
                                        <p>
                                            Nuestra exquisita pizza napolitana es una de las pizzas favoritas de la familia Book To You. La suculenta combinación de tomate, mozzarella, albahaca y aceite de oliva nunca supo mejor.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/napolitana.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fetuccini al pesto</h3>
                                        <p class="fst-italic"> El rey de las pastas</p>
                                        <p> Una vez que pruebes nuestro fetuccini al pesto, no te querrás ir. Esta pasta acompañada de finas hierbas, queso parmesano, ajo, aceite y otros condimentos tiene un sabor increíble que te hará recordarla con cariño.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/pesto.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Ravioles</h3>
                                        <p class="fst-italic">El que nunca decepciona</p>
                                        <p>Sabemos que ravioles es sinónimo de comida italiana tradicional y exquisita. Por eso, te los llevamos a tu mesa acompañados de lo que tú quieras: jamón, queso, carne, espinaca Ya sabes, ¡Tú decides!
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/ravioles.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Tiramisú</h3>
                                        <p class="fst-italic"> El infaltable postre italiano </p>
                                        <p> Desde Véneto, Italia hasta tu mesa. El tiramisú es el dulce italiano por excelencia y nosotros no podíamos dejar de traértelo. La combinación de café, chocolate y licor nunca estuvo mejor hecha. /p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/tiramisu.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Specials Section -->



        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                
                <?php

                if(!empty($_GET["fecha_hora"])){
                    ?>
                    <script>
                        window.alert("Mesa ocupada hasta las <?php echo $_GET["fecha_hora"]?>")
                    </script>                    
                    <?php
                }

                if(!empty($_GET["id_mesa"])) {
                    ?>
                    <script>
                        window.alert("Sugerimos reservar a las:<?php echo $_GET["id_mesa"];?> " )
                    </script>                    
                    <?php
                }
                ?>
             

                    <div class="section-title">
                        <h2>Reservaciones</h2>
                        <p>Reserva tu mesa</p>
                    </div>

                    <form action="reservar_mesa.php" method="post" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="time" class="form-control" name="time" id="time" placeholder="Hora" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="number" class="form-control" name="people" id="people" placeholder="Número de personas" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"></textarea>
                            <div class="validate"></div>
                        </div>

                        <!--<div class="mb-3">
            <div class="loading">Cargando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Tu reserva ha sido recibida. Para su confirmación te enviaremos un email o nos contactaremos contigo. ¡Te esperamos! Gracias por confiar en Book To You.</div>
          </div> -->
                        <div class="text-center"><button type="submit" class="book-a-table-btn scrollto d-none d-lg-flex" style="align-items: center; margin-top: 20px; margin-left: auto; margin-right: auto; color: #444444 !important; "><strong>Reservar ahora</strong></button></div>
                    </form>

            </div>
        </section>
        <!-- End Book A Table Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Experiencias</h2>
                    <p>¿Qué dice la familia Book To You?</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Book To You nació con la ilusión de compartir las tradicionales recetas de mi abuela con más personas. Sabía que más personas debían probar lo rico y variado de
                                    la comida italiana. Y que se merecía ser atendida de la mejor manera, por personas comprometidas que amen lo que hacen.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Felipe Timana</h3>
                                <h4>CEO</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Siempre me he tomado muy en serio mis inversiones. Invierto en negocios potenciales, pero sobre todo en personas apasionadas por su trabajo. En Book To You encontré
                                    ambos: un equipo dedicado a ofrecer lo mejor de sí y una comida y servicio increíble. Gran decisión pertenecer a esta linda familia.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Geraldine Gonzalez</h3>
                                <h4>Socia inversionista</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Yo diría que trabajar en Book To You no es tan fácil. Siempre está repleto de gente y debemos ser muy rápidos. Sin embargo, cuando sales y ves la satisfacción de
                                    las personas, todo vale la pena. Me gusta compartir mi talento con un equipo maravilloso.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Benito Martinez</h3>
                                <h4>Cocinero principal</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Yo solo quiero que la gente compruebe que la pizza de Book To You no es una pizza más. Aquí entendí el significado del "todo con amor, sale mejor". Estoy alegre
                                    y agradecido por ser parte de su staff.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Cristiano Ronaldo</h3>
                                <h4>Mesero</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Mi experiencia en Book To You solo la puedo describir como única. Desde que llegas, te sientes acogido. Parece que lo que vas a comer te lo ha preparado tu familia.
                                    Tienen un excelente equilibrio de precio, calidad y buena atención. Se lo recomiendo siempre a mis amigos, familia y compañeros de trabajo.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>Gianluca Lapadula</h3>
                                <h4>Cliente frecuente</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galería</h2>
                    <p>Conoce un poco de nuestro restaurante</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Staff</h2>
                    <p>Nuestros expertos</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Bruno Mars</h4>
                                    <span>Master Chef</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Selena Gomez</h4>
                                    <span>Encargada de postres</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Luis Arturo Villar</h4>
                                    <span>Cocinero</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contacto</h2>
                    <p>¡Contáctanos!</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=Piura,%20plaza%20de%20armas&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="info">
                        <div class="address col-3" style="display: inline-block;">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Dirección</h4>
                            <p>
                                157 Plaza de armas
                                <br>Piura 108, Perú
                            </p>
                        </div>

                        <div class="open-hours col-3" style="display: inline-block;">
                            <i class="bi bi-clock"></i>
                            <h4>Horario de atención</h4>
                            <p>
                                Lunes a Domingo:<br> 24h
                            </p>
                        </div>

                        <div class="email col-3" style="display: inline-block;">
                            <i class="bi bi-envelope"></i>
                            <h4>Email</h4>
                            <p>booktoyou@gmail.com</p><br>
                        </div>

                        <div class="phone col-2" style="display: inline-block;">
                            <i class="bi bi-phone"></i>
                            <h4>Celular</h4>
                            <p>987654345</p><br>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Book To You</h3>
                            <p>
                                157 Plaza de armas, Piura
                                <br>PIU 20, Perú
                                <br><br>
                                <strong>Número de contacto:</strong> 987654345<br>
                                <strong>Email:</strong> booktoyou@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Para volver a revisar</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#menu">Principales platos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Términos y condiciones</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter" style="align-items: rigth;">
                        <h4>Súscribete</h4>
                        <p>Si te gustaría estar al tanto de las ofertas y promociones que Book To You ofrece, déjanos tu correo: </p>
                        <form action="suscripciones.php" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Book To You</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>