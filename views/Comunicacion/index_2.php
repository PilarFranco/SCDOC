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
    include('../../includes/bar_lector.php');
    ?>

    <div id="layoutSidenav_content">
      <main >


        <title>Comunicacion</title>

<main class="container p-4">

<div class="row">
<div class="col-md-1">


</div>
<div class="col-md-7">
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
<td rowspan="3">Empresa</td>
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
      $query = "SELECT * FROM comunicacion";
      $result_tasks = mysqli_query($conexion, $query);
    } else {

      $id_empresa = $_SESSION['id_empresa'];
      $query = "SELECT co.id, co.tipo, co.me, co.em, co.re, co.cuando, co.co, co.ind, co.ele, co.mai, co.im, co.res, emp.emp_nombre from comunicacion co 
      inner JOIN empresas emp on co.id_empresa= emp.id_empresa WHERE emp.id_empresa = $id_empresa";
      $result_tasks = mysqli_query($conexion, $query);
    }                

      while($row = mysqli_fetch_assoc($result_tasks)) { ?>
        <tr>
          <th><?php echo $row['emp_nombre'] ?></th>
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