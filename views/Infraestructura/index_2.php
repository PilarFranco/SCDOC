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
  <title>RECURSOS-INFRAESTRUCTURA</title>
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
          <div class="col-md-1">
         
          </div>
          <div class="col-md-7">
            <table class="default" id="tabla">

              <h1>RECURSOS-INFRAESTRUCTURA</h1>

              <thead>
                <p class="concepto"><b>INVENTARIO DE INFRAESTRUCTURA:</b> Los inventarios de infraestructura resultan muy amplios. Se debe incluir puentes, acueductos, estructuras deportivas, educativas o de salud, carreteras, obras hidráulicas de riego, drenajes y sistemas de alcantarillado, fuentes de agua y otros recursos, e incluso antenas de radio y telefonía, entre muchas otras.</p>
                <p class="concepto"><b>FECHA DE ADQUISICIÓN:</b> Es la fecha en la que la empresa adquirente toma el control del negocio o negocios adquiridos. Esta fecha es relevante, pues el valor de los elementos patrimoniales identificables de las empresas o negocios adquiridos, y también el valor del coste de la adquisición, se determinan con referencia a éste momento.</p>
                <p class="concepto"><b>VIDA ÚTIL (AÑOS):</b>La Vida Útil es el periodo de tiempo que se espera utilizar un activo de una empresa, bajo una actividad económica eficiente. Como Activo fijo de una empresa nos referimos a bienes que tienen una duración dentro del ciclo económico superior a un año.</p>
                <p class="concepto"><b>ESTADO ACTUAL:</b>Consiste en detectar las fortalezas y debilidades de la empresa que originen ventajas o desventajas competitivas. Para llevarlo a cabo se estudian los siguientes factores: Producción. Capacidad de producción, costes de fabricación, calidad e innovación tecnológica.</p>

                <h1></h1>

                <thead>
                  <thead>
                    <tr>
                      <td colspan="1"></td>
                      <td colspan="4">INVENTARIO DE INFRAESTRUCTURA</td>
                      <td colspan="3">FECHA DE ADQUISICIÓN O PUESTA EN SERVICIO</td>
                      <td colspan="3">VIDA ÚTIL (AÑOS)</td>
                      <td colspan="3">ESTADO ACTUAL</td>

                    </tr>

                    <tr>
                      <td>Empresa</td>
                      <td>Responsable</td>
                      <td>Tipo de mantenimiento</td>
                      <td>Periodo/frecuencia de mantenimiento</td>
                      <td>Responsable del Mantenimiento</td>
                      <td>Ubicación física</td>
                      <td>D</td>
                      <td>M</td>
                      <td>A</td>
                      <td>5</td>
                      <td>10</td>
                      <td>20</td>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                    </tr>

                  </thead>
                <tbody>
                  <h1> </h1>


                  <?php

                  include('../../includes/_db.php');

                  $id_empresa = $_SESSION['id_empresa'];

                  if ( $id_empresa == 1) { //admin
                    $query = "SELECT * FROM infraestructura";
                    $result_tasks = mysqli_query($conexion, $query);
                  } else {
  
                    $query = "SELECT i.id, i.r, i.t, i.p, i.re, i.u, i.d, i.m, i.a, i.c, i.di, i.ve, i.un, i.do, i.dr, emp.emp_nombre from infraestructura i 
                    inner JOIN empresas emp on i.id_empresa= emp.id_empresa WHERE i.id_empresa = '$id_empresa'";
                    $result_tasks = mysqli_query($conexion, $query);
                  }

                  while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                      <th><?php echo $row['emp_nombre'] ?></th>
                      <th><?php echo $row['r'] ?></th>
                      <th><?php echo $row['t'] ?></th>
                      <th><?php echo $row['p'] ?></th>
                      <th><?php echo $row['re'] ?></th>
                      <th><?php echo $row['u'] ?></th>
                      <th><?php echo $row['d'] ?></th>
                      <th><?php echo $row['m'] ?></th>
                      <th><?php echo $row['a'] ?></th>
                      <th><?php echo $row['c'] ?></th>
                      <th><?php echo $row['di'] ?></th>
                      <th><?php echo $row['ve'] ?></th>
                      <th><?php echo $row['un'] ?></th>
                      <th><?php echo $row['do'] ?></th>
                      <th><?php echo $row['dr'] ?></th>

                    </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="../../assets/demo/chart-area-demo.js"></script>
  <script src="../../assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="../../js/datatables-simple-demo.js"></script>
</body>

</html>