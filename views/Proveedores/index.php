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
  <title>PROVEEDORES</title>
  <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>
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
    <main class="container p-4">

          <div class="row">
            <div class="col-md-4">

              <!-- Metodo para añadir elemtos e impresion de la tabla-->
              <div class="card card-body">
                <form action="save_task.php" method="POST">
                  <div class="form-group">
                    <p class="titulo">PROVEEDORES NACIONALES</p>
                    <p class="sub"></p>
                    <input type="text" class="form-control mb-3" name="n" placeholder="Nombre del proveedor">
                    <input type="text" class="form-control mb-3" name="r" placeholder="R.F.C">
                    <input type="text" class="form-control mb-3" name="d" placeholder="Domicilio">
                    <input type="text" class="form-control mb-3" name="t" placeholder="No. Telefonico">
                    <input type="text" class="form-control mb-3" name="e" placeholder="Email">
                    <input type="text" class="form-control mb-3" name="a" placeholder="Actividad Comercial">
                    <input type="text" class="form-control mb-3" name="f" placeholder="Fecha de Evaluación">
                    <input type="text" class="form-control mb-3" name="c" placeholder="Calificación">
                    <input type="text" class="form-control mb-3" name="fe" placeholder="Fecha de Siguiente Evaluación">
                    <input type="text" class="form-control mb-3" name="cl" placeholder="Clasificación">

                  </div>
                  <input type="submit" name="save_task" class="forma" value="Guardar" />
                </form>
              </div>
            </div>
            <div class="col-md-8">
            <div class='table-responsive'>
              <table class="default" id="tabla">

                <h1>PROVEEDORES</h1>

                <thead>
                  <p class="concepto"><b>PROOVEDORES NACIONALES:</b> Un proveedor se adapta a las necesidades de cada empresa, pero eso no quiere decir que sea fácil de delimitar. Esto es porque existen normas jurídicas para determinar cómo se interpone un proveedor en la producción o prestación de un servicio a otros.

                    Estas normas establecen particularidades para considerar quién es el verdadero proveedor a la hora de empezar la operación con un cliente, generando así un vínculo de colaboración entre ambas partes. Por lo que, este creará un valor añadido a la empresa para quien provee.</p>



                  </style>

                  <h1></h1>

                  <thead>
                    <thead>

                      <tr>
                      <td></td>
                        <td colspan="11">PROVEEDORES NACIONALES</td>
                      </tr>
                      <tr>
                      <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
            <td rowspan="2">Empresa</td>
                  <?php
                  } else{

                  }
                  ?>
                        <td>Nombre del Proveedor</td>
                        <td>R.F.C.</td>
                        <td>Domicilio</td>
                        <td>No. Telefonico</td>
                        <td>Email</td>
                        <td>Actividad Comercial</td>
                        <td>Fecha de Evaluación</td>
                        <td>Calificación</td>
                        <td>Fecha de Siguiente Evaluación</td>
                        <td>Clasificación</td>
                        <td>Accion</td>
                      </tr>

                    </thead>
                  <tbody>
                    <h1> </h1>


                    <?php
                    include('../../includes/_db.php');

                    $id_empresa = $_SESSION['id_empresa'];

               if ( $id_empresa == 1) { //admin
                  $query = "SELECT p.id, p.n, p.r, p.d, p.t, p.e, p.a, p.f, p.c, p.fe, p.cl, emp.emp_nombre from proveedores p
                  inner JOIN empresas emp on p.id_empresa= emp.id_empresa";
                  $result_tasks = mysqli_query($conexion, $query);
                } else { 

                  $query = "SELECT * FROM proveedores WHERE id_empresa = '$id_empresa'";
                  $result_tasks = mysqli_query($conexion, $query);
                }
          

                    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                      <tr>
                      <?php
                      include('../../includes/_db.php');
                      $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                    <th><?php echo $row['emp_nombre'] ?></th>
                  <?php
                  } else{
                  }
                  ?>
                        <th><?php echo $row['n'] ?></th>
                        <th><?php echo $row['r'] ?></th>
                        <th><?php echo $row['d'] ?></th>
                        <th><?php echo $row['t'] ?></th>
                        <th><?php echo $row['e'] ?></th>
                        <th><?php echo $row['a'] ?></th>
                        <th><?php echo $row['f'] ?></th>
                        <th><?php echo $row['c'] ?></th>
                        <th><?php echo $row['fe'] ?></th>
                        <th><?php echo $row['cl'] ?></th>

                        <td>
                          <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                          </a>
                          <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        </main>


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