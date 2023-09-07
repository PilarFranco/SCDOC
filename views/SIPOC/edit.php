<?php

session_start();
error_reporting(0);

include("../../includes/_db.php");
$id_empresa = $_SESSION['id_empresa'];

$pro = '';
$en= '';
$sos= '';
$sal= '';
$cli= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM sipoc WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $pro = $row['pro'];
    $en = $row['en'];
    $sos = $row['sos'];
    $sal = $row['sal'];
    $cli = $row['cli'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $pro= $_POST['pro'];
  $en= $_POST['en'];
  $sos= $_POST['sos'];
  $sal= $_POST['sal'];
  $cli= $_POST['cli'];

  $query = "UPDATE sipoc set pro= '$pro', en= '$en', sos= '$sos', sal= '$sal', cli= '$cli' WHERE id=$id";
  mysqli_query($conexion, $query);
  

  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - SIPOC</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>SIPOC</h1>

      <thead>

          <tr>
                <td><required size="20"><center>S</center></td>
                <td><required size="20"><center>I</center></td>
                <td><required size="16"><center>P</center></td>
                <td><required size="16"><center>O</center></td>
                <td><required size="16"><center>C</center></td>
                </tr>
            </thead>
            </tbody>

              <tr>
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


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="pro" class="informe"><?php echo $pro;?></textarea></th>
      <th><textarea name="en" class="informe"><?php echo $en;?></textarea></th>
      <th><textarea name="sos" class="informe"><?php echo $sos;?></textarea></th>
      <th><textarea name="sal" class="informe"><?php echo $sal;?></textarea></th>
      <th><textarea name="cli" class="informe"><?php echo $cli;?></textarea></th>
 
            
</tr>
<button class="forma" name="update">
        ¡ACTUALIZAR!
</button>
     
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

