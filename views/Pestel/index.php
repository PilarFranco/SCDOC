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
  <title>PESTEL</title>
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
          <h3>REGISTRO DE CAMPOS</h3>
          <input type="text" class="form-control mb-3" name="p" placeholder="Factor Pestel">
          <input type="text" class="form-control mb-3" name="e" placeholder="Factor Economico">
          <input type="text" class="form-control mb-3" name="s" placeholder="Factor Social">
          <input type="text" class="form-control mb-3" name="t" placeholder="Factor Tecnológico">
          <input type="text" class="form-control mb-3" name="ec" placeholder="Factor Ecológico">
          <input type="text" class="form-control mb-3" name="l" placeholder="Factor Legal">
          </div>
          <input type="submit" name="save_task" class="forma" value="Guardar" />
        </form>
      </div>
    </div>
    <div class="col-md-8">
    <div class='table-responsive'>
    <table class="default" id="tabla"> 

                  <h1>PESTEL</h1> 
        <p class="concepto"><b>FACTOR POLITICO:</b> Estos elementos provienen de regulaciones legislativas y 
                                otros mecanismos, mediante los cuales el gobierno puede incidir en tu negocio.</p>
        <p class="concepto"><b>FACTOR ECONÓMICO:</b> Es vital que consideres el entorno macroeconómico que 
                                  gira alrededor de tu industria o sector.</p>
        <p class="concepto"><b>FACTOR SOCIAL:</b> Incluiye cuestiones como la cultura, la religión, las creencias compartidas, los 
                                  imaginarios, las clases sociales y los papeles asignados en función del género.</p>
        <p class="concepto"><b>FACTOR TECNOLOGICO:</b> Las posibilidades de acceso de las personas a las herramientas informáticas, el 
                                  manejo de Internet o el nivel de cobertura de ciertos servicios</p>
        <p class="concepto"><b>FACTOR ECOLÓGICO:</b> Algunos factores ambientales que podrían afectarte son el cambio climático, la cultura 
                                  del reciclaje, las políticas medioambientales y los riesgos naturales.</p>
        <p class="concepto"><b>FACTOR LEGAL:</b> Factores legales a tener en cuenta son los derechos de autor, la propiedad intelectual,
                                  las licencias y certificaciones</p>
                      <h1></h1>
                         <tr>
                         <td rowspan="2">Empresa</td>
                                <td>Factor Político </td>
                                <td>Factor económico</td>
                                <td>Factro Social</td>
                                <td>Factor Tecnológico</td>
                                <td>Factor Ecológico</td>
                                <td>Factor Legal</td> 
                            </tr>
                             <tr>
                                <td><required size="20"><center>P</center></td>
                                <td><required size="20"><center>E</center></td>
                                <td><required size="16"><center>S</center></td>
                                <td><required size="16"><center>T</center></td>
                                <td><required size="16"><center>E</center></td>
                                <td><required size="16"><center>L</center></td>
                                </tr>               
                          
                          </thead>
                     <tbody>
                     <h1> </h1> 
                       <?php

                       
                include('db.php');
                $id_empresa = $_SESSION['id_empresa'];

                if ( $id_empresa == 1) { //admin
                  $query = "SELECT * FROM pestel";
                  $result_tasks = mysqli_query($conexion, $query);
                } else {
     
                  $query = "SELECT * FROM pestel WHERE id_empresa = '$id_empresa'";
                  $result_tasks = mysqli_query($conexion, $query);
                }
                  
                       while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                       <tr>
                       <th><?php  echo $row['id_empresa']?></th>
                         <th><?php  echo $row['p']?></th>
                         <th><?php  echo $row['e']?></th>
                         <th><?php  echo $row['s']?></th>
                         <th><?php  echo $row['t']?></th>    
                         <th><?php  echo $row['ec']?></th>    
                         <th><?php  echo $row['l']?></th>       
                         
                         
                         <td>
                           <a href="edit.php?id_pestel=<?php echo $row['id_pestel']?>" class="btn btn-secondary">
                             <i class="fas fa-marker"></i>
                           </a>
                           <a href="delete_task.php?id_pestel=<?php echo $row['id_pestel']?>" class="btn btn-danger">
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