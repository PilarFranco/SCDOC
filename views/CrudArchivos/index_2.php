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
  <title>OPERACIÓN</title>
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
      <main class="container p-2">

     

<h1>OPERACIÓN</h1>

<div>
    <table class="default" id="tabla">
        <thead>
            <tr>
                <td class="titulo">#</td>
                <th class="titulo">NOMBRE</th>
                <td class="titulo">CATEGORIA</td>
                <th class="titulo">ARCHIVO</th>
                <td class="titulo">FECHA</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                include 'config/bd.php';
                $conexion=conexion();
                $query=listar($conexion);
                $contador=0;

                while($datos=mysqli_fetch_assoc($query)){
                    $contador++;
                    $id=$datos['id'];
                    $nombre=$datos['nombre'];
                    $categoria=$datos['categoria'];
                    $fecha=$datos['fecha'];
                    $archivo=$datos['archivo'];
                    $tipo=$datos['tipo'];

                $valor="";
                if($categoria=='jpg' || $categoria=='png'){
                    $valor="<img width='50' src='data:image/jpg;base64,".base64_encode($archivo)."'>";
                }

                if($categoria=='pdf'){
                    $valor="<img  width='50' src='img/pdf.png'>";
                }

                if($categoria=='xls' || $categoria=='xlsm' ){
                    $valor="<img  width='50' src='img/exel.png'>";
                }

                if($categoria=='doc' || $categoria=='docx'){
                    $valor="<img  width='50' src='img/word.png'>";
                }
                if($categoria=='mp4'){
                    $valor="<img  width='50' src='img/desconocido.png'>";
                }

                if($categoria=='mp3'){
                    $valor="<img  width='50' src='img/desconocido.png'>";
                }

                if($valor==''){
                    $valor="<img  width='50' src='img/desconocido.png'>";
                }

                
            ?>
            <tr >
                <td><?php echo $contador;?></td>
                <th><?php echo $nombre ;?></th>
                <td><?php echo $categoria;?></td>
                <th><a href="cargar.php?id=<?php echo $id; ?>"><?php echo $valor ;?> descargar</a></th>
                <td><?php echo $fecha ;?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>


</div>
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