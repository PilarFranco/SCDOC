<?php

session_start();
error_reporting(0);

include("../../includes/_db.php");
$id_empresa = $_SESSION['id_empresa'];

$p = '';
$e= '';
$s= '';
$t= '';
$ec= '';
$l= '';

if  (isset($_GET['id_pestel'])) {
  $id_pestel = $_GET['id_pestel'];
  $query = "SELECT * FROM pestel WHERE id_pestel=$id_pestel";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $p = $row['p'];
    $e = $row['e'];
    $s = $row['s'];
    $t = $row['t'];
    $ec = $row['ec'];
    $l = $row['l'];
  }
}

if (isset($_POST['update'])) {
  $id_pestel = $_GET['id_pestel'];
  $p= $_POST['p'];
  $e= $_POST['e'];
  $s= $_POST['s'];
  $t= $_POST['t'];
  $ec= $_POST['ec'];
  $l= $_POST['l']; 

  $query = "UPDATE pestel set p= '$p', e= '$e', s= '$s', t= '$t', ec= '$ec', l= '$l' WHERE id_pestel=$id_pestel";
  mysqli_query($conexion, $query);
  
 
  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id_pestel="tabla">
 <tbody>
 <title>Ver, Editar - PESTEL</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>PESTEL</h1>

      <thead>

                         <tr>
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


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id_pestel=<?php echo $_GET['id_pestel']; ?>" method="POST">
      
      <tr>

      <th><textarea name="p" class="form-control" cols="30" rows="10"><?php echo $p;?></textarea></th>
      <th><textarea name="e" class="form-control" cols="30" rows="10"><?php echo $e;?></textarea></th>
      <th><textarea name="s" class="form-control" cols="30" rows="10"><?php echo $s;?></textarea></th>
      <th><textarea name="t" class="form-control" cols="30" rows="10"><?php echo $t;?></textarea></th>
      <th><textarea name="ec" class="form-control" cols="30" rows="10"><?php echo $ec;?></textarea></th>
      <th><textarea name="l" class="form-control" cols="30" rows="10"><?php echo $l;?></textarea></th>
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

