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
  <title>PARTES INTERESADAS</title>
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
    <table class="default" id="tabla">

    <h1>PARTES INTERESADAS</h1> 
        <p class="concepto"><b>REQUISITOS:</b> Responde a Nesesario(N) o Especifico(E)</p>
        <p class="concepto"><b>DESCRIPCIÓN:</b> Narración breve de los cumplimientos o lo que se busca obtener de la parte 
                  interesada</p>
        <p class="concepto"><b>PLAN DE ACCIÓN:</b> Plan a seguir para llegar a la parte interesada o procedimiento breve</p>
        <p class="concepto"><b>FECHA DE EJECUCIÓN:</b> Tiempo en el que se llevara a cavo o duraria</p>
        <p class="concepto"><b>RESPONSABLE:</b> Responsable a cargo</p>
        <p class="concepto"><b>SEGUIMIENTO Y REVISIÓN:</b> Persona o departamento que estara a cargo del seguimiento, avanses y revisión</p>


        <thead>
            </tr>
  
            <tr>
            <td rowspan="2">Empresa</td>
            <td rowspan="2">Partes interesadas</td>
            <td rowspan="2">Pertinente</td>
            <td colspan="2">Requisitos</td>
            <td rowspan="2">Descripción</td>
            <td rowspan="2">Plan de acción </td>
            <td rowspan="2">Fecha de ejecución</td>
            <td rowspan="2">Responsable</td>
            <td rowspan="2">Seguimiento y revisión</td>

            <tr>
            <td colspan="1">N</td>
            <td colspan="1">E</td>
            </tr>               
                          
             </thead>
        <tbody>
        <h1> </h1> 
          <?php
           include('db.php');

           $id_empresa = $_SESSION['id_empresa'];

           if ( $id_empresa == 1) { //admin
             $query = "SELECT * FROM interesadas";
             $result_tasks = mysqli_query($conexion, $query);
           } else {

             $query = "SELECT * FROM interesadas WHERE id_empresa = '$id_empresa'";
             $result_tasks = mysqli_query($conexion, $query);
           }


          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <th><?php  echo $row['id_empresa']?></th>
            <th><?php  echo $row['i']?></th>
            <th><?php  echo $row['n']?></th>
            <th><?php  echo $row['t']?></th>
            <th><?php  echo $row['e']?></th>    
            <th><?php  echo $row['r']?></th>    
            <th><?php  echo $row['es']?></th>       
            <th><?php  echo $row['a']?></th>    
            <th><?php  echo $row['d']?></th>    
            <th><?php  echo $row['ass']?></th>    
            
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