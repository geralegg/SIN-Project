<?php

session_start();

if($_SESSION["conectado"] != "1"){
  header ("Location: loginform.html");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    require('db_conect.php');
    $con = db_connect();
   
  ?>
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
        <i class="bi bi-phone d-flex align-items-center"><span>+51 965 547 235</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lun-Dom: Abierto las 24 Horas</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">BOOKTOYOU</a></h1>
   
      <a href="index.php" class="book-a-table-btn scrollto d-none d-lg-flex">Reserva una mesa</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Reservaciones</h2>
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li><a onclick="misreservas()">Reservas</a></li>
            
            <li>
            <a  onclick="misclientes()">
            Clientes
            </a>
            </li>

            <li><a href="cerrar_session.php">Salir</a></li>
          </ol>
          <script>
            function misclientes(){
              document.getElementById("misclientes").style.display="block";
              document.getElementById("misreservas").style.display="none";


            }
            function misreservas(){
              document.getElementById("misclientes").style.display="none";
              document.getElementById("misreservas").style.display="block";


            }
            </script>
        </div>
      </div>
    </section>

    <section id="misreservas" class="inner-page" style="display:block;">
      <div class="container">
        <h5>Busca por fecha de reserva </h5>
        <form action="inner-page.php" method="post" class="form-inline" style = "margin-top: 20px;">
          <div class="form-group mb-2">
            <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="width: 50%; display: inline-block;">
          <div class="text-center" style="display: inline-block;"><button type="submit" class=" btn btn-dark book-a-table-btn scrollto d-none d-lg-flex">Filtrar</button></div>
          </div>
        </form>

      </div>
      <div class="container" style = "margin-top:20px">
                <table class="table">
                  <thead style="color: white;">
                    
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Asistentes</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Celular</th>
                    <th scope="col">F. Realizada</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </thead>
                  <tbody style="color: white;">
                  <?php
                  
                  
                  
                  $consulta = "SELECT nombre, email FROM clientes";
                  $consulta_reservas = "
                  select a.fecha, a.hora, b.nombre, c.idmesas, a.numeropersonas, a.mensaje, b.email, b.celular, a.fechaenvio, a.idreservas
                  from reservas as a
                  join clientes as b
                  on a.clientes_id = b.idclientes
                  join mesas as c
                  on c.idmesas = a.mesas_id
                  ";
                  if(!empty($_POST["date"])){
                    $consulta_reservas .= 
                    " where a.fecha = '".$_POST["date"]."'";
                  }
                  $consulta_reservas .= " order by a.fecha asc";
                  $resultado = mysqli_query(db_connect(), $consulta_reservas);

                  while ($columna = mysqli_fetch_array($resultado))
                      {
                          echo "<tr>";
                          echo "<td>" . $columna[0] . "</td><td>" . $columna[1] . "</td><td>" . $columna[2] . "</td><td>" . $columna[3] . "</td><td>" . $columna[4] .
                          "</td><td>" . $columna[5] . "</td><td>" . $columna[6] . "</td><td>" . $columna[7] . "</td><td>" . $columna[8] . "</td>"
                          ;
                          echo "<td><a href='ver_editar.php?id=". $columna[9] ."'><i class='bi bi-pen-fill'></i></></td>";
                          echo "<td><a href='eliminar_registro.php?id=". $columna[9] ."'><i class='bi bi-trash' ></i></a></td>";
                          echo "</tr>";
                      }
                  ?>
                  </tbody>

                </table>
      </div>



    </section>

    <section id="misclientes" class="inner-page" style="display:none;">
      <div class="container">
        <h5>Clientes</h5>
        <div>
        <button href="inner-page.php?id_c=1" class=" btn btn-dark book-a-table-btn scrollto d-none d-lg-flex"  style="display: inline-block;">Mejores clientes</button>
        <button href="inner-page.php?id_c=2" class=" btn btn-dark book-a-table-btn scrollto d-none d-lg-flex"  style="display: inline-block;">Todos los clientes</button>
        </div>

        <!--
        <form action="inner-page.php" method="post" class="form-inline" style = "margin-top: 20px;">
          <div class="form-group mb-2">
            <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="width: 50%; display: inline-block;">
          <div class="text-center" style="display: inline-block;"><button type="submit" class=" btn btn-dark book-a-table-btn scrollto d-none d-lg-flex">Filtrar</button></div>
          </div>
        </form>
        -->

      </div>
      <div class="container" style = "margin-top:20px">
                <table class="table">
                  <thead style="color: white;">
                    
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Reservas</th>

                  </thead>
                  <tbody style="color: white;">
                  <?php
                  $consulta_misclientes = "select nombre, email, celular, count(reservas.idreservas)
                  from clientes
                  join reservas 
                  on clientes.idclientes = reservas.clientes_id
                  group by idclientes
                  Limit 10";
                  $resultado_cl = mysqli_query(db_connect(), $consulta_misclientes);
                  while ($columna_cl = mysqli_fetch_array($resultado_cl))
                      {
                          echo "<tr>";
                          echo "<td>" . $columna_cl[0] . "</td><td>" . $columna_cl[1] . "</td><td>" . $columna_cl[2] . "</td><td>".$columna_cl[3]."</td>"
                          ;

                          echo "</tr>";
                      }

                  ?>
                  </tbody>

                </table>
      </div>



    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class=" row footer-info">
              <h3>Book To You</h3>
              <div class = "col-lg-4">
                <p> 157 Plaza de armas, Piura
                <br>PIU 20, Perú <br><br></p>
              </div>
              <div class = "col-lg-4">               
                <p><strong>Celular:</strong> 987654345<br>
                <strong>Email:</strong> booktoyou.support@gmail.com <br></p>
              </div>
              
              <div class="col-lg-4 social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

     </div>
    </div>

    <div class="container" style = "padding: 5px !important">
      <div class="copyright" style = "padding-top: 2px !important">
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
  </footer><!-- End Footer -->

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