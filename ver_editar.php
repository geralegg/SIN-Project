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
    <div id="topbar" class="d-flex align-items-center" style = "margin-top: 1px;">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+51 987 654 321</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lun-Dom: Abierto las 24 horas</span></i>
                <i class="bi bi-envelope-fill d-flex align-items-center ms-4"><span> booktoyou.support@gmail.com </span></i>
                <i class="bi bi-geo-alt-fill d-flex align-items-center ms-4"><span> 157 Plaza de armas, Piura, Perú </span></i>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center" style= "margin-top:18px !important">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="col-8 logo me-auto me-lg-0"><a href="index.php">BookToYou</a></h1>
            
            <a href="inner-page.php" class="book-a-table-btn scrollto d-none d-lg-flex">Tabla de reservas</a>
            <a href="index.php" class="book-a-table-btn scrollto d-none d-lg-flex"> Página de Inicio</a>

        </div>
    </header>
    <!-- End Header -->


    <main id="main" style = "margin-top: 1px !important; padding-top: 0px !important">
        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table" style = "margin-top: 1px !important; padding: 20px !important">
            <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Estás editando una reserva</h2>
                        <p>Modificar reserva</p>
                    </div>
                    
                <?php
    include("func/db_conect.php");
    $my_sql_conn = db_connect();

 

?>

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
                                <input type="date" name="date" class="form-control" value = "2021-06-25" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
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

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style = "padding: 8px!important; margin-top: 20px">
        <div class="container">
            <div class="copyright" style = "font-size:11px !important; padding: 8px!important">
                &copy; Copyright <strong><span>Book To You</span></strong>. All Rights Reserved
            </div>
            <div class="credits" style = "font-size:10px !important; padding: 1px!important">
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