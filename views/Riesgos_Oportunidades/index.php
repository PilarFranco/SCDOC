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
  <title>RIESGOS Y OPORTUNIDADES</title>
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

                    <p class="titulo">Registro de campos</p>
                    <p class="sub">Identificación del Riesgos/Oportunidad </p>
                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha 000/00/00">
                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo O/R">
                    <input type="text" class="form-control mb-3" name="irespon" placeholder="Responsable">
                    <input type="text" class="form-control mb-3" name="idesc" placeholder="Riesgo/Oportunidad">
                    <input type="text" class="form-control mb-3" name="iorig" placeholder="Origen">
                    <input type="text" class="form-control mb-3" name="i_i_e" placeholder="Interno/Externo">
                    <input type="text" class="form-control mb-3" name="icausa" placeholder="Causas">
                    <p class="sub">Análisis y Evaluación del Riesgo</p>
                    <input type="text" class="form-control mb-3" name="ocuAR" placeholder="Probabilidad Ocurrencia">
                    <input type="text" class="form-control mb-3" name="conseAR" placeholder="Consecuencia">
                    <input type="text" class="form-control mb-3" name="valAR" placeholder="Valoración">
                    <input type="text" class="form-control mb-3" name="nivAR" placeholder="Nivel">
                    <input type="text" class="form-control mb-3" name="resAR" placeholder="Responsable. Aprovación del Riesgo">
                    <p class="sub">Análisis y Evaluación de la Oportunidad </p>
                    <input type="text" class="form-control mb-3" name="ocuAO" placeholder="Probabilidad Ocurencia">
                    <input type="text" class="form-control mb-3" name="conseAO" placeholder="Consecuencia">
                    <input type="text" class="form-control mb-3" name="valAO" placeholder="Valoración">
                    <input type="text" class="form-control mb-3" name="nivAO" placeholder="Nivel">
                    <p class="sub">Tratamiento del Riesgo/Oportunidad</p>
                    <input type="text" class="form-control mb-3" name="controlTRA" placeholder="Control">
                    <input type="text" class="form-control mb-3" name="estraTRA" placeholder="Estrategia">
                    <p class="sub">Seguimiento del Riesgo/Oportunidad</p>
                    <input type="text" class="form-control mb-3" name="accionesSEG" placeholder="Acciones Seguimiento">
                    <input type="text" class="form-control mb-3" name="fechaSEG" placeholder="Fecha 000/00/00">
                    <input type="text" class="form-control mb-3" name="evidSEG" placeholder="Evidencia Documental">
                    <input type="text" class="form-control mb-3" name="freSEG" placeholder="Frecuencia">
                    <input type="text" class="form-control mb-3" name="resSEG" placeholder="Responsable Implementación">
                    <p class="sub">Verificación del Riesgo/Oportunidad</p>
                    <input type="text" class="form-control mb-3" name="cumVER" placeholder="Cumplimiento Si/No">
                    <input type="text" class="form-control mb-3" name="fechaVER" placeholder="Fecha 000/00/00">
                    <input type="text" class="form-control mb-3" name="efecVER" placeholder="Efectividad">
                    <input type="text" class="form-control mb-3" name="obseVER" placeholder="Observaciones">
                    <input type="text" class="form-control mb-3" name="respVER" placeholder="Responsable Verificación">


                  </div>
                  <input type="submit" name="save_task" class="forma" value="Guardar" />
                </form>
                </form>
              </div>
            </div>
            <div class="col-md-8">
            <div class='table-responsive'>
              <table class="default" id="tabla">

                <h1>RIESGOS Y OPORTUNIDADES</h1>
                <thead>
                  <p class="concepto"><b>IDENTIFICACION DE RIESGOS / OPORTUNIDADES:</b> Se lleva a cabo para obtener un listado de posibles
                    eventos que pue- dan dar origen a Riesgos y Oportunidades, que posteriormente serán analizados y gestionados</p>
                  <p class="concepto"><b>ANÁLISIS Y EVALUACIÓN DEL RIESGO:</b> El análisis de riesgos es un proceso de varios pasos destinado
                    a mitigar el impacto de los riesgos en las operaciones empresariales.</p>
                  <p class="concepto"><b>ANÁLISIS Y EVALUACIÓN DE LA OPORTUNIDAD:</b> Evaluar una oportunidad de mercado implica determinar su
                    atractivo estructural y nuestra posición competitiva en dicho mercado, para entender cuánto valor podemos capturar de él.</p>
                  <p class="concepto"><b>TRATAMIENTO DEL RIESGO/ OPORTUNIDAD:</b> El proceso de tratamiento de riesgos consiste en seleccionar y aplicar
                    las medidas más adecuadas, con el fin de poder modificar el riesgo, para evitar de este modo los daños intrínsecos al factor
                    de riesgo, o bien aprovechar las ventajas que pueda reportarnos.</p>
                  <p class="concepto"><b>SEGUIMIENTO DEL RIESGO/OPORTUNIDAD:</b> Debe considerar todas las fuentes de riesgo importantes, incluso aquellas que
                    están fuera del control de la organización. El objetivo no es crear una larga lista de posibles riesgos, sino identificar todos
                    los que son relevantes y que pueden afectar a la organización.</p>
                  <p class="concepto"><b>VERIFICACIÓN DEL RIESGO/OPORTUNIDAD:</b> </p>

                  <h1></h1>

                  <thead>
                    <tr>
                      <td></td>
                      <td colspan="7">IDENTIFICACIÓN DEL RIESGOS/OPORTUNIDAD</td>
                      <td colspan="5">ANÁLISIS Y EVALUACIÓN DEL RIESGO</td>
                      <td colspan="4">ANÁLISIS Y EVALUACIÓN DE LA OPORTUNIDAD</td>
                      <td colspan="2">TRATAMIENTO DEL RIESGO/ OPORTUNIDAD</td>
                      <td colspan="5">SEGUIMIENTO DEL RIESGO/OPORTUNIDAD</td>
                      <td colspan="4">VERIFICACIÓN DEL RIESGO/OPORTUNIDAD</td>
                    </tr>

                    <tr>
                    <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                      <td>Empresa</td>
                  <?php
                  } else{

                  }
                  ?>
                      <td>Fecha de identificación</td>
                      <td>Tipo R/O</td>
                      <td>Responsable de riesgo/oportunidad</td>
                      <td>Riesgo/ Oportunidad (Descripción)</td>
                      <td>Origen del del riesgo/ oportunidad</td>
                      <td>Interno/Externo</td>
                      <td> Posibles causas que lo originan</td>

                      <td>Probabilidad de ocurrencia</td>
                      <td>Consecuencia</td>
                      <td>Valoración del riesgo</td>
                      <td>Nivel del Riesgo</td>
                      <td>Responsable de aprobación del riesgo</td>

                      <td>Probabilidad de ocurrencia de la oportunidad</td>
                      <td>Consecuencia de la oportunidad</td>
                      <td>Valoración de la oportunidad</td>
                      <td>Nivel de beneficio</td>


                      <td>Control</td>
                      <td>Estrategia para la administración del riesgo</td>

                      <td>Acciones para el seguimiento del riesgo/oportunidad</td>
                      <td>Fecha de implementación de las acciones</td>
                      <td>Evidencia documental</td>
                      <td>Frecuencia de revisión</td>
                      <td>Responsable de la implementación de las acciones</td>

                      <td>Cumplimiento de las acciones (si/no)</td>
                      <td>Fecha de verificación</td>
                      <td>Efectividad de las acciones</td>
                      <td>Observaciones</td>
                      <td>Responsable de la verificación</td>
                      <td>Acciones</td>
                    </tr>

                  </thead>
                  </tbody>
                  <?php

                  include("../../includes/_db.php");

                  $id_empresa = $_SESSION['id_empresa'];

                  if ( $id_empresa == 1) { //admin
                    $query = "SELECT r.id, r.fecha, r.tipo, r.irespon, r.idesc, r.iorig, r.i_i_e, r.icausa, r.ocuAR, r.conseAR, r.valAR, r.nivAR, r.resAR, r.ocuAO, r.conseAO, r.valAO, r.nivAO, r.controlTRA, r.estraTRA, r.accionesSEG, r.fechaSEG, r.evidSEG, r.freSEG, r.resSEG, r.cumVER, r.fechaVER, r.efecVER, r.obseVER, r.respVER, emp.emp_nombre from riesgos r
                    inner JOIN empresas emp on r.id_empresa= emp.id_empresa";
                    $result_tasks = mysqli_query($conexion, $query);
                  } else {
  
                    $query = "SELECT * FROM riesgos WHERE id_empresa = '$id_empresa'";
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
                      <th><?php echo $row['fecha'] ?></th>
                      <th><?php echo $row['tipo'] ?></th>
                      <th><?php echo $row['irespon'] ?></th>
                      <th><?php echo $row['idesc'] ?></th>
                      <th><?php echo $row['iorig'] ?></th>
                      <th><?php echo $row['i_i_e'] ?></th>
                      <th><?php echo $row['icausa'] ?></th>
                      <th><?php echo $row['ocuAR'] ?></th>
                      <th><?php echo $row['conseAR'] ?></th>
                      <th><?php echo $row['valAR'] ?></th>
                      <th><?php echo $row['nivAR'] ?></th>
                      <th><?php echo $row['resAR'] ?></th>
                      <th><?php echo $row['ocuAO'] ?></th>
                      <th><?php echo $row['conseAO'] ?></th>
                      <th><?php echo $row['valAO'] ?></th>
                      <th><?php echo $row['nivAO'] ?></th>
                      <th><?php echo $row['controlTRA'] ?></th>
                      <th><?php echo $row['estraTRA'] ?></th>
                      <th><?php echo $row['accionesSEG'] ?></th>
                      <th><?php echo $row['fechaSEG'] ?></th>
                      <th><?php echo $row['evidSEG'] ?></th>
                      <th><?php echo $row['freSEG'] ?></th>
                      <th><?php echo $row['resSEG'] ?></th>
                      <th><?php echo $row['cumVER'] ?></th>
                      <th><?php echo $row['fechaVER'] ?></th>
                      <th><?php echo $row['efecVER'] ?></th>
                      <th><?php echo $row['obseVER'] ?></th>
                      <th><?php echo $row['respVER'] ?></th>
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