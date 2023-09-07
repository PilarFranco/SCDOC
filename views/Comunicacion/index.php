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
  <title>COMUNICACIÓN</title>
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
      <main >


        <title>Comunicacion</title>
        <main class="container p-4">



<main class="container p-4">

<div class="row">
<div class="col-md-4">


<!-- Metodo para añadir elemtos e impresion de la tabla-->
<div class="card card-body">
  <form action="save_task.php" method="POST">
    <div class="form-group">
    <h3>REGISTRO DE CAMPOS</h3>
    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo de Comunicación">
    <input type="text" class="form-control mb-3" name="me" placeholder="Mensaje">
    <input type="text" class="form-control mb-3" name="em" placeholder="Emisor">
    <input type="text" class="form-control mb-3" name="re" placeholder="Receptor">
    <input type="text" class="form-control mb-3" name="cuando" placeholder="¿Cuándo se debe comunicar?">
    <p class="sub">¿Cómo se debe comunicar?	</p>
    <p class="sub">Reuniones</p>
    <input type="text" class="form-control mb-3" name="co" placeholder="Colectiva">
    <input type="text" class="form-control mb-3" name="ind" placeholder="Individual">
    <input type="text" class="form-control mb-3" name="ele" placeholder="Electrónico">
    <input type="text" class="form-control mb-3" name="mai" placeholder="Mail">
    <input type="text" class="form-control mb-3" name="im" placeholder="Medio Impreso">
    <p class="sub">Resultado</p>
    <input type="text" class="form-control mb-3" name="res" placeholder="Resultado que se espera">

    </div>
    <input type="submit" name="save_task" class="forma" value="Guardar" />
  </form>
</div>
</div>
<div class="col-md-8">
<div class='table-responsive'>
<table class="default" id="tabla">

        <h1>TABLA DE COMUNICACIONES</h1>
  <p class="concepto"><b>TIPO DE COMUNICACIÓN:</b> Interna/Externa.</p>
  <p class="concepto"><b>MENSAJE:</b> Motivo por el cual se mandara o mensaje breve.</p>
  <p class="concepto"><b>EMISOR:</b> ¿Quién lo debe comunicar?</p>
  <p class="concepto"><b>RECEPTOR:</b> ¿A quien se debe comunicar?</p>
  <p class="concepto"><b>¿CUANDO SE DEBE COMUNICAR?:</b> Momento en el que se debe de dar a conocer la información.</p>
  <p class="concepto"><b>¿COMO SE DEBE DE DAR A CONOCER?:</b> Marca con una X si la reunion sera Colectiva o Individual
                        asi tambien si se mandara por Correo Electrónico o Medio  Impreso.</p>
  <p class="concepto"><b>RESULTADO QUE SE ESPERA:</b> Meta esperada o lo que se busca obtener.</p>

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
<td rowspan="3">Tipo de Comunicación</td>
<td rowspan="3">Mensaje</td>
<td rowspan="3">Emisor ¿Quién lo debe comunicar?</td>
<td rowspan="3">Receptor ¿A quién se debe comunicar?</td>
<td rowspan="3">¿Cuándo se debe comunicar? </td>
<td colspan="5">¿Cómo se debe comunicar? </td>
<td rowspan="3">Resultado que se espera de la comunicación</td>
<tr>
<td colspan="2">Reuniones</td>
<td rowspan="2">Electrónico</td>
<td rowspan="2">Mail</td>
<td rowspan="2">Medio Impreso</td>

</tr>

<tr>
<td>Colectiva</td>
<td>Individual</td>
</tr>     
       </thead>
  <tbody>
    <h1></h1>

    <?php
    
    include('../../includes/_db.php');

    $id_empresa = $_SESSION['id_empresa'];

    if ( $id_empresa == 1) { //admin
      $query = "SELECT co.id, co.tipo, co.me, co.em, co.re, co.cuando, co.co, co.ind, co.ele, co.mai, co.im, co.res, emp.emp_nombre from comunicacion co 
      inner JOIN empresas emp on co.id_empresa= emp.id_empresa";
      $result_tasks = mysqli_query($conexion, $query);

    } else {

      $query = "SELECT * FROM comunicacion WHERE id_empresa = '$id_empresa'";
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
          <th><?php  echo $row['tipo']?></th>
          <th><?php  echo $row['me']?></th>
          <th><?php  echo $row['em']?></th>
          <th><?php  echo $row['re']?></th>    
          <th><?php  echo $row['cuando']?></th>    
          <th><?php  echo $row['co']?></th>       
          <th><?php  echo $row['ind']?></th>    
          <th><?php  echo $row['ele']?></th>    
          <th><?php  echo $row['mai']?></th>    
          <th><?php  echo $row['im']?></th>       
          <th><?php  echo $row['res']?></th>    
          
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