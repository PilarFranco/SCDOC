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
  <title>SIPOC</title>
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
          <input type="text" class="form-control mb-3" name="pro" placeholder="provedores">
          <input type="text" class="form-control mb-3" name="en" placeholder="entrada">
          <input type="text" class="form-control mb-3" name="sos" placeholder="procesos">
          <input type="text" class="form-control mb-3" name="sal" placeholder="salidas">
          <input type="text" class="form-control mb-3" name="cli" placeholder="clientes">
          
           </div>
           <input type="submit" name="save_task" class="forma" value="Guardar" />
        </form>
      </div>
    </div> 
    <div class="col-md-8">
    <div class='table-responsive'>
    <table class="default" id="tabla">

    <h1>SIPOC</h1>
               <thead>
        <p class="concepto"><b>PROVEEDORES:</b> Todo lo que se requiere para llevar a cabo el proceso. Se considera 
                                  recursos a la información, materiales e incluso, personas.</p>
        <p class="concepto"><b>ENTRADAS:</b> Todos los datos o elementos necesarios para llevar a cabo dicho proceso.</p>
        <p class="concepto"><b>PROCESO:</b> Serie de actividades que generan una línea entre el punto de entrada hacia la 
                                  salida, estableciendo un valor requerido.</p>
        <p class="concepto"><b>SALIDAS:</b> Resultado final obtenido de un seguimiento de ideas y un correcto proceder en cada estación.</p>
        <p class="concepto"><b>CLIENTES:</b> Es la persona o individuo a quien son dados los resultados finales y a quien se debe 
                                  satisfacer con la calidad de productos hechos a la perfección los demás puntos.</p>
                                  <h1></h1>

              <tr>
              <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                      <td></td>
                  <?php
                  } else{

                  }
                  ?>
                <td><required size="20"><center>S</center></td>
                <td><required size="20"><center>I</center></td>
                <td><required size="16"><center>P</center></td>
                <td><required size="16"><center>O</center></td>
                <td><required size="16"><center>C</center></td>
                </tr>
            </thead>
            </tbody>

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
                <th>PROVEEDORES</th>
                <th>ENTRADAS</th>
                <th>PROCESO</th>
                <th>SALIDAS</th>
                <th>CLIENTES</th>
              </tr>
              <tr>
                <th>Supplier</th>
                <th>Imput</th>
                <th>Process</th>
                <th>Output</th>
                <th>Customer</th>
          </tr>                
                          
                          </thead>
                     <tbody>
                     <h1> </h1> 
          <?php
                          include('../../includes/_db.php');

          $id_empresa = $_SESSION['id_empresa'];

          if ( $id_empresa == 1) { //admin
            $query = "SELECT s.id, s.pro, s.en, s.sos, s.sal, s.cli, emp.emp_nombre from sipoc s
            inner JOIN empresas emp on s.id_empresa= emp.id_empresa";
            $result_tasks = mysqli_query($conexion, $query);
          } else {

            $query = "SELECT * FROM sipoc WHERE id_empresa = '$id_empresa'";
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
                         <th><?php  echo $row['pro']?></th>
                         <th><?php  echo $row['en']?></th>
                         <th><?php  echo $row['sos']?></th>
                         <th><?php  echo $row['sal']?></th>    
                         <th><?php  echo $row['cli']?></th>                             
 
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