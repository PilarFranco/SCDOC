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
  <title>INFORMACIÓN DOCUMENTADA</title>
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

                <h1>LISTA MAESTRA DE REGISTRO</h1>

                <thead>
                  <p class="concepto"><b>REGISTROS:</b>Documento que indica o describe el total de manuales, procedimientos, instrucciones de trabajo,
                    formatos y registros que contiene el Sistema de Gestión de la Calidad. Así mismo indica el nivel de revisión
                    de cada uno de ellos, con el objetivo de utilizar siempre la última versión.</p>

                  <h1></h1>

                  <thead>
                    <thead>
                      <tr>
                      <td colspan="1"></td>
                        <td colspan="8">REGISTROS</td>
                      </tr>
                      <tr>
                      <td rowspan="1">Empresa</td> 
                        <td rowspan="2">Nombre del formato</td>
                        <td rowspan="2">No. Revisión (formato)</td>
                        <td rowspan="2">Fecha de revisión</td>
                        <td rowspan="2">Puesto que lo mantiene</td>
                        <td colspan="2">Tipo de archivo</td>
                        <td rowspan="2">Periodo de retención</td>
                        <td rowspan="2">Disposicion Oficial</td>

                      </tr>
                    </thead>
                  <tbody>
                    <h1> </h1>



                    <?php
                     include("../../includes/_db.php");

                     $id_empresa = $_SESSION['id_empresa'];

                     if ( $id_empresa == 1) { //admin
                      $query = "SELECT * FROM  documentada";
                      $result_tasks = mysqli_query($conexion, $query);
                    } else {
    
                      $query = "SELECT do.id, do.n, do.r, do.f, do.pu, do.e, do.p, do.pe, do.d, emp.emp_nombre from documentada do 
                      inner JOIN empresas emp on do.id_empresa= emp.id_empresa WHERE do.id_empresa = '$id_empresa'";
                      $result_tasks = mysqli_query($conexion, $query);
                    }

                   

                    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                      <tr>
                        <th><?php  echo $row['emp_nombre']?></th>
                        <th><?php echo $row['n'] ?></th>
                        <th><?php echo $row['r'] ?></th>
                        <th><?php echo $row['f'] ?></th>
                        <th><?php echo $row['pu'] ?></th>
                        <th><?php echo $row['e'] ?></th>
                        <th><?php echo $row['p'] ?></th>
                        <th><?php echo $row['pe'] ?></th>
                        <th><?php echo $row['d'] ?></th>

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