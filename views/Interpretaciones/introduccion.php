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
  <title>INTRODUCCIÓN</title>
  <link rel="icon" type="image/png" href="../../icono/icono.png" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php
    include('../../includes/bar.php');
    ?>

    <div id="layoutSidenav_content">
      <main class>

<!-- 
        <div class="title">
            <h1>INTRODUCCIÓN</h1>
          </div> -->
          <div class="title">     
            <h1>INTRODUCCIÓN</h1>
            
          <div class="continer-silder"> 

          <div class="slider" id="slider">
            <div class="slider-section">
              <img src="img/banuno.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bandos.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bantres.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bancuatro.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bancinco.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/banseis.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bansiete.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/banocho.png" alt="" class="slider-img">
            </div>
            <div class="slider-section">
              <img src="img/bannueve.png" alt="" class="slider-img">
            </div>
          </div>

          <div class="slider-btn slider-btn-I" id="btn-I"> <ion-icon name="caret-back-outline"></ion-icon></div>
          <div class="slider-btn slider-btn-D" id="btn-D"><ion-icon name="caret-forward-outline"></ion-icon></div>
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
  const slider = document.querySelector("#slider");
  let sliderSection = document.querySelectorAll(".slider-section");
  let sliderSectionLast = sliderSection[sliderSection.length - 1];

  const btnI = document.querySelector("#btn-I");
  const btnD = document.querySelector("#btn-D");



  slider.insertAdjacentElement('afterBegin', sliderSectionLast);

  function Next() {

    let sliderSectionFirst = document.querySelectorAll(".slider-section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";

    setTimeout(function() {
      slider.style.transition = "none";
      slider.insertAdjacentElement('beforeEnd', sliderSectionFirst);
      slider.style.marginLeft = "-100%";



    }, 500);


  }

  function Prev() {

    let sliderSection = document.querySelectorAll(".slider-section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";

    setTimeout(function() {
      slider.style.transition = "none";
      slider.insertAdjacentElement('afterBegin', sliderSectionLast);
      slider.style.marginLeft = "-100%";



    }, 500);


  }


  btnD.addEventListener('click', function() {
    Next();


  })
  btnI.addEventListener('click', function() {
    Prev();


  })


  // Slide automatico
  setInterval(function() {

    Next();

  }, 5000);
</script>

<style>
h1{
    color: #0e828c;
    font-family: OpenSans, bold;
    font-size: 60px;
    text-align: center;
  margin-bottom: 50px;}

  * {

    box-sizing: border-box;
  }

  main {

    min-height: 75vh;
    display: flex;
    align-items: center;
    justify-content: center;

  }


  .continer-silder {

    width: 200%;
    max-width: 900px;
    margin: auto;
    overflow: hidden;
    box-shadow: 0 0 0 10px rgb(221, 215, 215),
      0 15px 50px;
    position: relative;


  }

  .slider {

    display: flex;
    width: 900%;
    height: 28rem;
    margin-left: -100%;

  }

  .slider-section {

    width: 100%;


  }

  .slider-img {

    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;


  }

  .slider-btn {

    position: absolute;
    width: 40px;
    height: 40px;
    background: rgb(225, 255, 255, 0.7);
    top: 50%;
    transform: translateY(-50%);
    font-size: 25px;
    font-weight: bold;
    font-family: monospace;
    text-align: center;
    border-radius: 50%;
    cursor: pointer;

  }


  .slider-btn:hover {

    color: #fff;

  }




  .slider-btn-I {
    left: 10px;



  }

  .slider-btn-D {
    right: 10px;


  }
</style>