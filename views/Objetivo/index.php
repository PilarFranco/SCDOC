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
    include('../../includes/bar.php');
    ?>
    <div id="layoutSidenav_content">


      <main class="container p-4">

        <div class="row">
          <div class="col-md-4">
            <!-- Mensaje de inicio de sesion correcto-->

            
            <!-- Metodo para añadir elemtos e impresion de la tabla-->
            <div class="card card-body">
              <form action="save_task.php" method="POST">
                <div class="form-group">
                  <h3>REGISTRO DE CAMPOS</h3>
                  <p class="sub">Especifico</p>
                  <input type="text" class="form-control mb-3" name="ob" placeholder="Objetivo">
                  <input type="text" class="form-control mb-3" name="me" placeholder="Meta">
                  <p class="sub">Medible</p>
                  <input type="text" class="form-control mb-3" name="ind" placeholder="Indicadores">
                  <input type="text" class="form-control mb-3" name="fu" placeholder="Fuente de los Datos">
                  <p class="sub">Alcanzable</p>
                  <input type="text" class="form-control mb-3" name="es" placeholder="Estrategías para lograrlo">
                  <input type="text" class="form-control mb-3" name="re" placeholder="Responsables">
                  <p class="sub">Recurso Disponible</p>
                  <input type="text" class="form-control mb-3" name="fi" placeholder="Financieros">
                  <input type="text" class="form-control mb-3" name="hu" placeholder="Humanos">
                  <input type="text" class="form-control mb-3" name="eq" placeholder="Equipo e Infraestructura">
                  <input type="text" class="form-control mb-3" name="ti" placeholder="Tiempo">
                  <p class="sub">Linea de Tiempo</p>
                  <input type="text" class="form-control mb-3" name="feI" placeholder="Fecha de Inicio 000-00-000">
                  <input type="text" class="form-control mb-3" name="feT" placeholder="Fecha de Termino 000-00-00">
                </div>
                <input type="submit" name="save_task" class="forma" value="Guardar" />
              </form>
              </form>
            </div>
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
                <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                <td colspan="1"></td>
                  <?php
                  } else{

                  }
                  ?>

                  <td colspan="2">Especifico</td>
                  <td colspan="2">Medible</td>
                  <td colspan="2">Alcanzable</td>
                  <td colspan="4">Realista</td>
                  <td colspan="2">Limite de tiempo</td>
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

                include('../../includes/_db.php');

                $id_empresa = $_SESSION['id_empresa'];

                if ( $id_empresa == 1) { //admin
                  $query = "SELECT o.id_obj, o.ob, o.me, o.ind, o.fu, o.es, o.re, o.fi, o.hu, o.eq, o.ti, o.feI, o.feT, emp.emp_nombre from objetivos o 
                  inner JOIN empresas emp on o.id_empresa= emp.id_empresa";
                  $result_tasks = mysqli_query($conexion, $query);

                } else {

                  $query = "SELECT * FROM objetivos WHERE id_empresa = '$id_empresa'";
                  $result_tasks = mysqli_query($conexion, $query);
                }             
              

                while ($row = mysqli_fetch_assoc($result_tasks)) { 
                  ?>
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



                    <td>
                      <a href="edit.php?id_obj=<?php echo $row['id_obj'] ?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                      </a>
                      <a href="delete_task.php?id_obj=<?php echo $row['id_obj'] ?>" class="btn btn-danger">
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