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
  <title>INFORMACIÓN DOCUMENTADA</title>
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
                    <p class="titulo">REGISTROS</p>
                    <p class="sub"></p>
                    <input type="text" class="form-control mb-3" name="descc" placeholder="Descripción del problema ">
                    <input type="text" class="form-control mb-3" name="ana" placeholder="Análisis de la causa raíz ">
                    <input type="text" class="form-control mb-3" name="acc" placeholder="Acción de contención">
                    <input type="text" class="form-control mb-3" name="accii" placeholder="Acciones correctivas">
                    <input type="text" class="form-control mb-3" name="res" placeholder="Responsable">
                    <input type="text" class="form-control mb-3" name="fe_i" placeholder="Fecha de inicio">
                    <p class="sub">ESTADO DE LA ACCIÓN</p>
                    <input type="text" class="form-control mb-3" name="abi" placeholder="Abierta">
                    <input type="text" class="form-control mb-3" name="imp" placeholder="Implementada">
                    <input type="text" class="form-control mb-3" name="cie" placeholder="Cerrada">
                    <input type="text" class="form-control mb-3" name="fe_c" placeholder="Fecha de cierre">
                    <input type="text" class="form-control mb-3" name="resu" placeholder="Resultado de la verificación ">
                    <input type="text" class="form-control mb-3" name="ver" placeholder="Verificado por">
                    <input type="text" class="form-control mb-3" name="fe_v" placeholder="Fecha de verificación ">

                  </div>
                  <input type="submit" name="save_task" class="forma" value="Guardar" />
                </form>
              </div>
            </div>
            <div class="col-md-8">
            <div class='table-responsive'>
              <table class="default" id="tabla">

                <h1>CONTROL DE ACCIONES CORRECTIVAS - MEJORA</h1>

                <thead>
                  <p class="concepto"><b>REGISTROS:</b>Documento que indica o describe el total de manuales, procedimientos, instrucciones de trabajo,
                    formatos y registros que contiene el Sistema de Gestión de la Calidad. Así mismo indica el nivel de revisión
                    de cada uno de ellos, con el objetivo de utilizar siempre la última versión.</p>

                  <h1></h1>

                  <thead>
                    <thead>
                      <tr>
                      <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                        <td rowspan="3">Empresa</td>
                  <?php
                  } else{

                  }
                  ?>
                        <td colspan="13">MEJORA</td>
                      </tr>
                      <tr>
                        <td rowspan="2">Descripción del problema o no conformidad</td>
                        <td rowspan="2">Análisis de la causa raíz </td>
                        <td rowspan="2">Acción de contención o corrección </td>
                        <td rowspan="2">Acciones correctivas y/o preventivas a implementar</td>
                        <td rowspan="2">Responsable de implementar la acción</td>
                        <td rowspan="2">Fecha de inicio</td>
                        <td colspan="3">Estado de la acción </td>
                        <td rowspan="2">Fecha de cierre</td>
                        <td rowspan="2">Resultado de la verificación</td>
                        <td rowspan="2">Verificado por</td>
                        <td rowspan="2">Fecha de verificación</td>
                        <td rowspan="2">Acciones</td>

                      </tr>

                      <tr>
                        <td>Abierta</td>
                        <td>Implementada</td>
                        <td>Cerrada</td>

                      </tr>
                    </thead>
                  <tbody>
                    <h1> </h1>



          <?php
          include('../../includes/_db.php');

          $id_empresa = $_SESSION['id_empresa'];

          if ( $id_empresa == 1) { //admin
            $query = "SELECT m.id, m.descc, m.ana, m.acc, m.accii, m.res, m.fe_i, m.abi, m.imp, m.cie, m.fe_c, m.resu, m.ver, m.fe_v, emp.emp_nombre from mejora m
            inner JOIN empresas emp on m.id_empresa= emp.id_empresa";
            $result_tasks = mysqli_query($conexion, $query);
          } else {

            $query = "SELECT * FROM mejora WHERE id_empresa = '$id_empresa'";
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
                        <th><?php  echo $row['descc']?></th>
                        <th><?php  echo $row['ana']?></th>
                        <th><?php  echo $row['acc']?></th>
                        <th><?php  echo $row['accii']?></th>        
                        <th><?php  echo $row['res']?></th>    
                        <th><?php  echo $row['fe_i']?></th>       
                        <th><?php  echo $row['abi']?></th>    
                        <th><?php  echo $row['imp']?></th>    
                        <th><?php  echo $row['cie']?></th>
                        <th><?php  echo $row['fe_c']?></th>
                        <th><?php  echo $row['resu']?></th>
                        <th><?php  echo $row['ver']?></th>
                        <th><?php  echo $row['fe_v']?></th>

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