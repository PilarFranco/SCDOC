<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];
$id_empresa = $_SESSION['id_empresa'];



if ($validar == null || $validar = '') {

  header("Location: ../../includes/login.php");
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
  <title>FODA</title>
  <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

<?php
    include('../../includes/bar_lector.php');
    ?>

    <div id="layoutSidenav_content">
<main class="container p-4">

<div class="row"> 
<div class="col-md-2">
<!-- Mensaje de inicio de sesion correcto-->

</div>
<div class="col-md-8">
<div class='table-responsive'>
<table class="default" id="tabla">

            <h1>FODA</h1> 
  <p class="concepto"><b>FORTALEZAS:</b> Son aquellas cualidades, actitudes y habilidades deseables y sobresalientes.</p>
  <p class="concepto"><b>OPORTUNIDADES:</b> Son el resultado de las fortalezas y las debilidades, junto con cualquier iniciativa 
                            externa que te colocará en una posición competitiva más sólida.</p>
  <p class="concepto"><b>DEBILIDADES:</b> Son atributos no deseados en una persona, organización o evento, ya que 
                            resultan poco útiles para lograr los objetivos propuestos.</p>
  <p class="concepto"><b>AMENAZAS:</b> Se refieren a las áreas que tienen el potencial de causar problemas. Difieren de las 
                            debilidades en que las amenazas son externas y, por lo general, están fuera de nuestro control.</p>

                   <tr>
                          <td></td>
                          <td>F</td>
                          <td>O</td>
                          <td>D</td>
                          <td>A</td>
                          
                          
                      </tr>
                      <tr>
                          <td>Empresa</td>
                          <td><required size="20">Fortalezas</td>
                          <td><required size="20">Oportunidades</td>
                          <td><required size="16">Debilidades</td>
                          <td><required size="16">Amenazas</td>
                          
                          </tr>               
                    
                    </thead>
               <tbody>
          
                 
            <?php

            include('db.php');

            $id_empresa = $_SESSION['id_empresa'];

            if ( $id_empresa == 1) { //admin
              $query = "SELECT * FROM foda";
              $result_tasks = mysqli_query($conexion, $query);           
            }else{
              $query = "SELECT * FROM foda WHERE id_empresa = '$id_empresa'";
              $result_tasks = mysqli_query($conexion, $query);        
            }
   
    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
    <tr>
      <th><?php  echo $row['id_empresa']?></th>
      <th><?php  echo $row['f']?></th>
      <th><?php  echo $row['o']?></th>
      <th><?php  echo $row['d']?></th>
      <th><?php  echo $row['a']?></th>    
               
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</main>

      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="../../assets/demo/chart-area-demo.js"></script>
  <script src="../../assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="../../js/datatables-simple-demo.js"></script>
</body>

</html>