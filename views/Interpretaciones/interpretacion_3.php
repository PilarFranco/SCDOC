<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SESIÓN 3</title>
  <link rel="icon" type="image/png" href="../../icono/icono.png" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php
    include('../../includes/bar_lector.php');
    ?>

    <div id="layoutSidenav_content">
      <main>  

        <div class="title">

          <h1>Interpretación de los Requisitos de la Norma ISO 9001:2015 S3</h1>


        </div>

        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/8emDxVNzUBg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="container-fluid d-flex flex-row-reverse bd-highlight my-1 px-3">

          <a href="./documentos/Interpretacion.html" style="margin: 30px;" type="button" class="btn btn-outline-dark fw-bold">PRESENTACIÓN CURSO - INTERPRETACIÓN NORMA ISO 9001:2015</a>
        </div>

      </main>
      <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-9">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted"></div>
              <div>
              <a>Copyright &copy; Your Website 2023</a>
              </div>
              <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Iconos ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Scrips para el bar -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../../js/scripts.js"></script>
  <script src="../../js/user.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="../../js/datatables-simple-demo.js"></script>
</body>

</html>
<script>
  setTimeout(() => {
    const player = new Plyr('#player');
  }, 100);
</script>


<style>
  h1 {

    color: #0e828c;
    ;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    margin: 10px;
    text-align: center;
  }

  .boton {

    display: block;
    width: 120px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 10px;
    margin: 50px 50px;
    color: #4b4b4b;
    text-align: center;
    margin-left: 750px;
    text-decoration: none;
    border-style: dashed;
    box-shadow: 5px 5px 25px rgb(52, 92, 224);
    border-color: #000000;



  }

  .title {
    background-color: transparent;
    border-style: dashed;
    border-radius: 80px;
    border-color: #000000;
    text-align: center;
    width: 900px;
    margin: 40px 100px;
    box-shadow: 15px 15px 20px rgb(108, 139, 238);


  }

  body {

    background-image: url(../../IMAGES/img/f1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

  }

  iframe {

    width: 1000px;
    height: 500px;
    margin: auto;
    display: block;
    box-shadow: 5px 5px 25px rgb(65, 64, 64);
  }
</style> -->