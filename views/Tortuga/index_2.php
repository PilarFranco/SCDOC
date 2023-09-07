<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];



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
  <title>DIAGRAMA DE TORTUGA</title>
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
            <table class="table table-bordere mt-5">
              <thead>

                <h1>DIAGRAMA DE TORTUGA</h1>

                <div class="grid">
                  <div class="conque">
                    <center>¿CON QUE?</center>

                  </div>
                  <div class="entradas">
                    <center>ENTRADAS</center>
                  </div>
                  <div class="criterios">
                    <center>MEDICIÓN</center>

                  </div>
                  <div class="proceso">
                    <center>PROCESO</center>
                  </div>
                  <div class="conquien">
                    <center>¿CON QUIEN?</center>

                  </div>
                  <div class="salidas">
                    <center>SALIDAS</center>
                  </div>
                  <div class="como">
                    <center>¿COMO?</center>

                  </div>
                </div>
          </div>
          </thead>
          <tbody>
            <tr>
              <th>Empresa</th>
              <td>Proceso</td>
              <td>¿Con que?</td>
              <td>Entradas</td>
              <td>Medicion</td>
              <td>¿Con quien?</td>
              <td>Salida</td>
              <td>¿Como?</td>

            </tr>

            <?php
            include('../../includes/_db.php');
           
            $id_empresa = $_SESSION['id_empresa'];

            if ( $id_empresa == 1) { //admin
                $query = "SELECT * FROM tortuga";
              $result_tasks = mysqli_query($conexion, $query);
            } else {

              $query = "SELECT t.id, t.pro, t.c, t.e, t.m, t.co, t.s, t.com, emp.emp_nombre from tortuga t
              inner JOIN empresas emp on t.id_empresa= emp.id_empresa WHERE t.id_empresa = '$id_empresa'";
              $result_tasks = mysqli_query($conexion, $query);
            }


            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>



              <tr>
                <th><?php echo $row['emp_nombre'] ?></th>
                <th><?php echo $row['pro'] ?></th>
                <th><?php echo $row['c'] ?></th>
                <th><?php echo $row['e'] ?></th>
                <th><?php echo $row['m'] ?></th>
                <th><?php echo $row['co'] ?></th>
                <th><?php echo $row['s'] ?></th>
                <th><?php echo $row['com'] ?></th>

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
          <div class="text-muted">Copyright &copy; Your Website 2022</div>
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