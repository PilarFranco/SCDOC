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
  <title>DESEMPEÑO</title>
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
          <p class="titulo">REGISTRO DE CAMPOS</p>
          <p class="sub"></p>
          <input type="text" class="form-control mb-3" name="p" placeholder="Proceso">
          <input type="text" class="form-control mb-3" name="o" placeholder="Objetivo">
          <input type="text" class="form-control mb-3" name="r" placeholder="Responsable">

          <p class="sub">INDICADOR Y META</p>
          <input type="text" class="form-control mb-3" name="i" placeholder="Indicador">
          <input type="text" class="form-control mb-3" name="m" placeholder="Meta">
          <input type="text" class="form-control mb-3" name="f" placeholder="Frecuencia">

          <p class="sub">DESEMPEÑO (AÑO)</p>
          <input type="text" class="form-control mb-3" name="en" placeholder="Enero">
          <input type="text" class="form-control mb-3" name="fe" placeholder="Febrero">
          <input type="text" class="form-control mb-3" name="ma" placeholder="Marzo">
          <input type="text" class="form-control mb-3" name="ab" placeholder="Abril">
          <input type="text" class="form-control mb-3" name="may" placeholder="Mayo">
          <input type="text" class="form-control mb-3" name="ju" placeholder="Junio">
          <input type="text" class="form-control mb-3" name="jul" placeholder="Julio">
          <input type="text" class="form-control mb-3" name="ag" placeholder="Agosto">
          <input type="text" class="form-control mb-3" name="se" placeholder="Septiembre">
          <input type="text" class="form-control mb-3" name="oc" placeholder="Octubre">
          <input type="text" class="form-control mb-3" name="no" placeholder="Noviembre">
          <input type="text" class="form-control mb-3" name="di" placeholder="Diciembre">

          </div>
          <input type="submit" name="save_task" class="forma" value="Guardar" />
        </form>
      </div>
    </div>
    <div class="col-md-8">
    <div class='table-responsive'>
    <table class="default" id="tabla">

              <h1>DESEMPEÑO</h1>

              <thead>
        <p class="concepto"><b>PROCESO:</b> Es un proceso recurrente en el tiempo que tiene como finalidad principal medir el desempeño de cada integrante de la organización en las competencias propias de su puesto de trabajo.</p>
        <p class="concepto"><b>OBJETIVO:</b> Conocer el valor del trabajo realizado por los empleados de la organización y así poder medir el nivel de competitividad de la organización.</p>
        <p class="concepto"><b>RESPONSABLE:</b>Responsable por el desempeño, de su constante evaluación y de la comunicación de resultados de sus subordinados con ayuda de RRHH, quienes establecen los parámetros de evaluación.</p>
        <p class="concepto"><b>INDICADOR:</b>Instrumento utilizado para medir el éxito en la ejecución de actividades dentro de una empresa. Estos indicadores están diseñados para ofrecer datos cuantificables del desempeño de los grupos de trabajo en relación con ejercicios anteriores u objetivos previamente establecidos.</p>
        <p class="concepto"><b>METAS:</b> Este escrito se centra principalmente en la manera como el establecimiento de metas influye en el comportamiento y el desempeño.</p>
        <p class="concepto"><b>FRECUENCIA:</b> Estas evaluaciones de desempeño se deben realizar al menos 2 veces al año a todo el personal y funcionan para medir la participación de todos los miembros de tu empresa, su progreso, su relación con el resto su equipo de trabajo directo e indirecto, así como la influencia de estos factores en el clima laboral de tu empresa. </p>
        <p class="concepto"><b>DESEMPEÑO DEL AÑO:</b> Una revisión anual de resultados permite que los empleados recuerden cuál es su función en la empresa, midan el impacto de su trabajo diario y se sientan más alineados con los objetivos de la organización. </p>

                                  <h1></h1>

                                  <thead>
              <thead>
              
              <tr>
              <td colspan="1"></td>
              <td colspan="6">INDICADOR Y META</td>
              <td colspan="12">DESEMPEÑO (AÑO)</td>
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
              <td>Proceso</td>
              <td>Objetivo</td>
              <td>Responsable</td>
              <td>Indicador</td>
              <td>Meta</td>
              <td>frecuencia</td>
              <td>Enero</td>
              <td>Febrero</td>
              <td>Marzo</td>
              <td>Abril</td>
              <td>Mayo</td>
              <td>Junio</td>
              <td>Julio</td>
              <td>Agosto</td>
              <td>Septiembre</td>
              <td>Octubre</td>
              <td>Noviembre</td>
              <td>Diciembre</td>

            </tr>               
                          
                          </thead>
                     <tbody>
                     <h1> </h1> 
                       
          
<?php
          include('../../includes/_db.php');
          
          $id_empresa = $_SESSION['id_empresa'];

          if ( $id_empresa == 1) { //admin
            $query = "SELECT de.id, de.p, de.o, de.r, de.i, de.m, de.f, de.en, de.fe, de.ma, de.ab, de.may, de.ju, de.jul, de.ag, de.se, de.oc, de.no, de.di, emp.emp_nombre from desempeño de 
            inner JOIN empresas emp on de.id_empresa= emp.id_empresa";
            $result_tasks = mysqli_query($conexion, $query);
          } else {
 
            $query = "SELECT * FROM desempeño WHERE id_empresa = '$id_empresa'";
            $result_tasks = mysqli_query($conexion, $query);
          }
        
        

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
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
            <th><?php  echo $row['p']?></th>
            <th><?php  echo $row['o']?></th>
            <th><?php  echo $row['r']?></th>
            <th><?php  echo $row['i']?></th>
            <th><?php  echo $row['m']?></th>    
            <th><?php  echo $row['f']?></th>
            <th><?php  echo $row['en']?></th>
            <th><?php  echo $row['fe']?></th>
            <th><?php  echo $row['ma']?></th>   
            <th><?php  echo $row['ab']?></th>
            <th><?php  echo $row['may']?></th>
            <th><?php  echo $row['ju']?></th>
            <th><?php  echo $row['jul']?></th>
            <th><?php  echo $row['ag']?></th>
            <th><?php  echo $row['se']?></th>   
            <th><?php  echo $row['oc']?></th>
            <th><?php  echo $row['no']?></th>
            <th><?php  echo $row['di']?></th>


                     
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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