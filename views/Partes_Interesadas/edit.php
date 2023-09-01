<?php
include("db.php");

session_start();
error_reporting(0);

include("db.php");
$id_empresa = $_SESSION['id_empresa'];

$i= '';
$n= '';
$t= '';
$e= '';
$r= '';
$es= '';
$a= '';
$d= '';
$ass= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM interesadas WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $i = $row['i'];
    $n = $row['n'];
    $t = $row['t'];
    $e = $row['e'];
    $r = $row['r'];
    $es = $row['es'];
    $a = $row['a'];
    $d = $row['d'];
    $ass = $row['ass'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $i= $_POST['i'];
  $n= $_POST['n'];
  $t= $_POST['t'];
  $e= $_POST['e'];
  $r= $_POST['r'];
  $es= $_POST['es'];
  $a= $_POST['a'];
  $d= $_POST['d'];
  $ass= $_POST['ass'];

  $query = "UPDATE interesadas set i= '$i', n= '$n', t= '$t', e= '$e', r= '$r', es= '$es', a= '$a', d= '$d', ass= '$ass' WHERE id=$id";
  mysqli_query($conexion, $query);
  
  $_SESSION['message'] = 'Editado correcto';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - PARTES INTERESADAS</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>PARTES INTERESADAS</h1>

<thead>
                            <tr>
            
            <td rowspan="2">Partes interesadas </td>
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


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="i" class="form-control" cols="20" rows="4"><?php echo $i;?></textarea></th>
      <th><textarea name="n" class="form-control" cols="20" rows="4"><?php echo $n;?></textarea></th>
      <th><textarea name="t" class="form-control" cols="3" rows="4"><?php echo $t;?></textarea></th>
      <th><textarea name="e" class="form-control" cols="3" rows="4"><?php echo $e;?></textarea></th>
      <th><textarea name="r" class="form-control" cols="30" rows="4"><?php echo $r;?></textarea></th>
      <th><textarea name="es" class="form-control" cols="20" rows="4"><?php echo $es;?></textarea></th>
      <th><textarea name="a" class="form-control" cols="10" rows="4"><?php echo $a;?></textarea></th>
      <th><textarea name="d" class="form-control" cols="20" rows="4"><?php echo $d;?></textarea></th>
      <th><textarea name="ass" class="form-control" cols="20" rows="4"><?php echo $ass;?></textarea></th>
 <button class="forma" name="update">
          ¡Actualizar!
</button>
            
            <td>

      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

