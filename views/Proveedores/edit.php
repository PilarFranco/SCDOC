<?php
include("db.php");

$id = '';
$n = '';
$r = '';
$d = '';
$t = '';
$e = '';
$a = '';
$f = '';
$c = '';
$fe = '';
$cl = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM proveedores WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $n = $row['n'];
    $r = $row['r'];
    $d = $row['d'];
    $t = $row['t'];
    $e = $row['e'];
    $a = $row['a'];
    $f = $row['f'];
    $c = $row['c'];
    $fe = $row['fe'];
    $cl = $row['cl'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $n = $_POST['n'];
  $r = $_POST['r'];
  $d = $_POST['d'];
  $t = $_POST['t'];
  $e = $_POST['e'];
  $a = $_POST['a'];
  $f = $_POST['f'];
  $c = $_POST['c'];
  $fe = $_POST['fe'];
  $cl = $_POST['cl'];


  $query = "UPDATE proveedores set  n= '$n', r= '$r', d= '$d', t= '$t', e= '$e', a= '$a', f= '$f', c= '$c', fe= '$fe', cl= '$cl' WHERE id=$id";
  mysqli_query($conexion, $query);

  header('Location: index.php');
}

?>
<link rel="stylesheet" href="style.css">
<table class="default" id="tabla">
  <tbody>
    <title>Ver, Editar - PARTES INTERESADAS</title>
    <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

    <h1>LISTA DE PROVEEDORES</h1>

    <thead>
      <tr>
        <td colspan="11">PROVEEDORES NACIONALES</td>
      </tr>
      <tr>
        <td>No.</td>
        <td>R.F.C.</td>
        <td>Domicilio</td>
        <td>No. Telefonico</td>
        <td>Email</td>
        <td>Actividad Comercial</td>
        <td>Fecha de Evaluación</td>
        <td>Calificación</td>
        <td>Fecha de Siguiente Evaluación</td>
        <td>Clasificación</td>
      </tr>

    </thead>
  <tbody>


    <link rel="stylesheet" href="style.css">
    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>


        <th><textarea name="n" class="informe" cols="20" rows="4"><?php echo $n; ?></textarea></th>
        <th><textarea name="r" class="informe" cols="20" rows="4"><?php echo $r; ?></textarea></th>
        <th><textarea name="d" class="informe" cols="3" rows="4"><?php echo $d; ?></textarea></th>
        <th><textarea name="t" class="informe" cols="3" rows="4"><?php echo $t; ?></textarea></th>
        <th><textarea name="e" class="informe" cols="30" rows="4"><?php echo $e; ?></textarea></th>
        <th><textarea name="a" class="informe" cols="30" rows="4"><?php echo $a; ?></textarea></th>
        <th><textarea name="f" class="informe" cols="20" rows="4"><?php echo $f; ?></textarea></th>
        <th><textarea name="c" class="informe" cols="10" rows="4"><?php echo $c; ?></textarea></th>
        <th><textarea name="fe" class="informe" cols="20" rows="4"><?php echo $fe; ?></textarea></th>
        <th><textarea name="cl" class="informe" cols="20" rows="4"><?php echo $cl; ?></textarea></th>



        <button class="forma" name="update">
          ¡Actualizar!
        </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <?php include('includes/footer.php'); ?>