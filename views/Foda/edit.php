<?php

session_start();
error_reporting(0);

include("../../includes/_db.php");
$id_empresa = $_SESSION['id_empresa'];

$f = '';
$o= '';
$d= '';
$a= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM foda WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $f = $row['f'];
    $o = $row['o'];
    $d = $row['d'];
    $a = $row['a'];

    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $f= $_POST['f'];
  $o= $_POST['o'];
  $d= $_POST['d'];
  $a= $_POST['a']; 
  

  $query = "UPDATE foda set f= '$f', o= '$o', d= '$d', a= '$a' WHERE id=$id";
  mysqli_query($conexion, $query);
  
 
  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - FODA</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>FODA</h1> 

      <thead>
      <input type = "button" class="forma" value = "¡Regresar!" onclick = "history.back ()"> </form>

<tr>
    <td rowspan="1">Fortalezas </td>
    <td rowspan="1">Oportunidades</td>
    <td rowspan="1">Debilidades</td>
    <td rowspan="1">Amenazas</td>
</tr>
                            
</thead>
    <tbody>


<link rel="stylesheet" href="style.css">
  <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
  <tr>
    <td><textarea name="f" placeholder="" cols="30" rows="20"><?php echo $f;?></textarea></td>
    <td><textarea name="o" placeholder="" cols="30" rows="20"><?php echo $o;?></textarea></td>
    <td><textarea name="d" placeholder="" cols="30" rows="20"><?php echo $d;?></textarea></td>
    <td><textarea name="a" placeholder="" cols="30" rows="20"><?php echo $a;?></textarea></td>

    <td>
      <!-- <div class="form-group">
        <h3>P</h3>
        <textarea name="f" class="form-control" cols="30" rows="10"><?php echo $f;?></textarea>
      </div>
      <div class="form-group">
        <textarea name="o" class="form-control" cols="30" rows="10"><?php echo $o;?></textarea>
      </div>
      <div class="form-group">
        <textarea name="d" class="form-control" cols="30" rows="10"><?php echo $d;?></textarea>
      </div>
      <div class="form-group">
        <textarea name="a" class="form-control" cols="30" rows="10"><?php echo $a;?></textarea>
      </div> -->
        <button class="forma" name="update">
          ¡ACTUALIZAR!
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

