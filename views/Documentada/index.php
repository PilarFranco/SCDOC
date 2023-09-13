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
                    <input type="text" class="form-control mb-3" name="n" placeholder="Nombre del formato">
                    <input type="text" class="form-control mb-3" name="r" placeholder="No. Revisión (formato)">
                    <input type="text" class="form-control mb-3" name="f" placeholder="Fecha de revisión">
                    <input type="text" class="form-control mb-3" name="pu" placeholder="Puesto que lo mantiene">

                    <p class="sub">TIPO DE ARCHIVO</p>
                    <input type="text" class="form-control mb-3" name="e" placeholder="E">
                    <input type="text" class="form-control mb-3" name="p" placeholder="P">
                    <input type="text" class="form-control mb-3" name="pe" placeholder="Periodo de retención">
                    <input type="text" class="form-control mb-3" name="d" placeholder="Disposición final">

                  </div>
                  <input type="submit" name="save_task" class="forma" value="Guardar" />
                </form>
                </form>
              </div>
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
                      <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                      <td rowspan="1">Empresa</td>
                  <?php
                  } else{

                  }
                  ?>
                        <td rowspan="2">Nombre del formato</td>
                        <td rowspan="2">No. Revisión (formato)</td>
                        <td rowspan="2">Fecha de revisión</td>
                        <td rowspan="2">Puesto que lo mantiene</td>
                        <td colspan="2">Tipo de archivo</td>
                        <td rowspan="2">Periodo de retención</td>
                        <td rowspan="2">Disposicion Oficial</td>
                        <td rowspan="2">Acciones</td>

                      </tr>
                    </thead>
                  <tbody>
                    <h1> </h1>



                    <?php
                     include("../../includes/_db.php");

                     $id_empresa = $_SESSION['id_empresa'];

                     if ( $id_empresa == 1) { //admin
                      $query = "SELECT do.id, do.n, do.r, do.f, do.pu, do.e, do.p, do.pe, do.d, emp.emp_nombre from documentada do 
                      inner JOIN empresas emp on do.id_empresa= emp.id_empresa";
                      $result_tasks = mysqli_query($conexion, $query);
                    } else {
    
                      $query = "SELECT * FROM documentada WHERE id_empresa = '$id_empresa'";
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
                        <th><?php echo $row['f'] ?></th>
                        <th><?php echo $row['pu'] ?></th>
                        <th><?php echo $row['e'] ?></th>
                        <th><?php echo $row['p'] ?></th>
                        <th><?php echo $row['pe'] ?></th>
                        <th><?php echo $row['d'] ?></th>

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