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
  <title>OBJETIVO</title>
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

        </div>
          <div class="col-md-8">
            <div class='table-responsive'>
            <table class="default" id="tabla">

              <h1>OBJETIVO</h1>
              <p class="concepto"><b>OBJETIVO:</b> Resultado deseados que se esperan alcanzar con la
                ejecución de las actividades que integran un proyecto, empresa o entidad.</p>
              <p class="concepto"><b>META:</b> Fin hacia el que se dirigen las acciones o deseos.</p>
              <p class="concepto"><b>INDICADORES:</b> A donde va dirigido</p>
              <p class="concepto"><b>FUENTE DE LOS DATOS:</b> ¿De que fuente fue rescatada la información?</p>
              <p class="concepto"><b>ESTRATEGIAS PARA LOGRARLO:</b> Plan para lograr la meta</p>
              <p class="concepto"><b>RESPONSABLES:</b> ¿Quienes estaran a cargo?</p>
              <p class="concepto"><b>RECURSOS FINANCIEROS:</b> Recursos financiero disponible</p>
              <p class="concepto"><b>RECURSOS HUMANOS:</b> Recursos Humano disponible</p>
              <p class="concepto"><b>EQUIPO E INFRAESTRUCTURA:</b> Recursos de Equipo e Infraestructura disponibles</p>
              <p class="concepto"><b>TIEMPO:</b> Tiempo disponible</p>
              <p class="concepto"><b>FECHA DE INICIO:</b> Fecha de Comienzo 000-00-00</p>
              <p class="concepto"><b>FECHA DE TERMINO:</b> Fecha de Termino 000-00-00</p>


              <thead>

                <tr>
                <td colspan="1"></td>
                  <td colspan="2">Especifico</td>
                  <td colspan="2">Medible</td>
                  <td colspan="2">Alcanzable</td>
                  <td colspan="4">Realista</td>
                  <td colspan="2">Limite de tiempo</td>
                <tr>
                  <td rowspan="2">Empresa</td>
                  <td rowspan="2">Objetivo</td>
                  <td rowspan="2">Meta</td>
                  <td rowspan="2">Indicadores</td>
                  <td rowspan="2">Fuente de los datos</td>
                  <td rowspan="2">Estrategías para lograrlo</td>
                  <td rowspan="2">Responsables</td>
                  <td colspan="4">Recursos disponibles</td>
                  <td rowspan="2">Fecha de inicio</td>
                  <td rowspan="2">Fecha de termino</td>
                </tr>

                <tr>
                  <td>Financieros</td>
                  <td>Humanos</td>
                  <td>Equipo e infraestructura</td>
                  <td>Tiempo</td>
                </tr>
              </thead>
              <tbody>
                <h1> </h1>


                <?php

                include('db.php');

                $id_empresa = $_SESSION['id_empresa'];

                if ( $id_empresa == 1) { //admin
                  $query = "SELECT * FROM objetivos";
                  $result_tasks = mysqli_query($conexion, $query);
                } else {

                  $query = "SELECT * FROM objetivos WHERE id_empresa = '$id_empresa'";
                  $result_tasks = mysqli_query($conexion, $query);
                }                
              

                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                    <th><?php echo $row['id_empresa'] ?></th>
                    <th><?php echo $row['ob'] ?></th>
                    <th><?php echo $row['me'] ?></th>
                    <th><?php echo $row['ind'] ?></th>
                    <th><?php echo $row['fu'] ?></th>
                    <th><?php echo $row['es'] ?></th>
                    <th><?php echo $row['re'] ?></th>
                    <th><?php echo $row['fi'] ?></th>
                    <th><?php echo $row['hu'] ?></th>
                    <th><?php echo $row['eq'] ?></th>
                    <th><?php echo $row['ti'] ?></th>
                    <th><?php echo $row['feI'] ?></th>
                    <th><?php echo $row['feT'] ?></th>

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