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
  <title>FODA</title>
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
    <input type="text" class="form-control mb-3" name="f" placeholder="Fortalezas">
    <input type="text" class="form-control mb-3" name="o" placeholder="Oportunidades">
    <input type="text" class="form-control mb-3" name="d" placeholder="Debilidades">
    <input type="text" class="form-control mb-3" name="a" placeholder="Amenazas">


    </div>
    <input type="submit" name="save_task" class="forma" value="Guardar" />
    
  </form>
</div>
</div>
<div class="col-md-8">
<div class='table-responsive'>
<table class="default" id="tabla">

            <h1>FODA</h1> 
  <p class="concepto"><b>FORTALEZAS:</b> Son aquellas cualidades, actitudes y habilidades deseables y sobresalientes.</p>
  <p class="concepto"><b>OPORTUNIDADES:</b> Son el resultado de las fortalezas y las debilidades, junto con cualquier iniciativa 
                            externa que te colocará en una posición competitiva más sólida.</p>
  <p class="concepto"><b>DEBILIDADES:</b> Son atributos no deseados en una persona, organización o evento, ya que 
                            resultan poco útiles para lograr los objetivos propuestos.</p>
  <p class="concepto"><b>AMENAZAS:</b> Se refieren a las áreas que tienen el potencial de causar problemas. Difieren de las 
                            debilidades en que las amenazas son externas y, por lo general, están fuera de nuestro control.</p>

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
                          <td>F</td>
                          <td>O</td>
                          <td>D</td>
                          <td>A</td>
                          <td></td>
                          
                          
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
                          <td><required size="20">Fortalezas</td>
                          <td><required size="20">Oportunidades</td>
                          <td><required size="16">Debilidades</td>
                          <td><required size="16">Amenazas</td>
                          <td><required size="16">Acciones</td>
                          
                          </tr>               
                    
                    </thead>
               <tbody>
          
                 
            <?php

            include('../../includes/_db.php');

            $id_empresa = $_SESSION['id_empresa'];

            if ( $id_empresa == 1) { //admin
              $query = "SELECT fo.id, fo.f, fo.o, fo.d, fo.a, emp.emp_nombre from foda fo 
              inner JOIN empresas emp on fo.id_empresa= emp.id_empresa";
              $result_tasks = mysqli_query($conexion, $query);           
            }else{
              $query = "SELECT * FROM foda WHERE id_empresa = '$id_empresa'";
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
      <th><?php  echo $row['f']?></th>
      <th><?php  echo $row['o']?></th>
      <th><?php  echo $row['d']?></th>
      <th><?php  echo $row['a']?></th>    
               
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