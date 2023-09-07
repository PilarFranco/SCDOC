<?php
include("../../includes/_db.php");

$id= '';
$descc= ''; 
$ana= '';
$acc= ''; 
$accii= '';
$res= '';
$fe_i= '';
$abi= '';
$imp= '';
$cie= '';
$fe_c= '';
$resu= '';
$ver= '';
$fe_v= '';



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM mejora WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $descc = $row['descc'];
    $ana = $row['ana'];
    $acc = $row['acc'];
    $accii = $row['accii'];
    $res = $row['res'];
    $fe_i = $row['fe_i'];
    $abi = $row['abi'];
    $imp = $row['imp'];
    $cie = $row['cie'];
    $fe_c = $row['fe_c'];
    $resu = $row['resu'];
    $ver = $row['ver'];
    $fe_v = $row['fe_v'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $descc = $_POST ['descc'];
  $ana = $_POST ['ana'];
  $acc = $_POST ['acc'];
  $accii = $_POST ['accii'];
  $res = $_POST ['res'];
  $fe_i = $_POST ['fe_i'];
  $abi = $_POST ['abi'];
  $imp = $_POST ['imp'];
  $cie = $_POST ['cie'];
  $fe_c = $_POST ['fe_c'];
  $resu = $_POST ['resu'];
  $ver = $_POST ['ver'];
  $fe_v = $_POST ['fe_v'];
  $query = "UPDATE mejora set id= '$id', descc= '$descc', ana= '$ana', acc= '$acc', accii= '$accii', res= '$res', fe_i= '$fe_i', abi= '$abi', imp= '$imp', cie= '$cie', fe_c= '$fe_c', resu= '$resu', ver= '$ver', fe_v= '$fe_v' WHERE id=$id";
  mysqli_query($conexion, $query);
  
  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - MEJORA</title>
 
 <h1>CONTROL DE ACCIONES CORRECTIVAS - MEJORA</h1>

<thead>
                            <tr>
            
                            <tr>
            <td colspan="14">MEJORA</td>
        </tr>
        <tr>
            <td rowspan="2">Descripción del problema o no conformidad</td>
            <td rowspan="2">Análisis de la causa raíz </td>
            <td rowspan="2">Acción de contención o corrección </td>
            <td rowspan="2">Acciones correctivas y/o preventivas a implementar</td>
            <td rowspan="2">Responsable de implementar la acción</td>
            <td rowspan="2">Fecha de inicio</td>
            <td colspan="3">Estado de la acción </td>
            <td rowspan="2">Fecha de cierre</td>
            <td rowspan="2">Resultado de la verificación</td>
            <td rowspan="2">Verificado por</td>
            <td rowspan="2">Fecha de verificación</td>

            </tr>
  
            <tr>
              <td>Abierta</td>
              <td>Implementada</td>
              <td>Cerrada</td>

            </tr>                          
                            
                                </thead>
        <tbody>


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="id" class="informe" cols="20" rows="4"><?php echo $id;?></textarea></th>
      <th><textarea name="descc" class="informe" cols="20" rows="4"><?php echo $descc;?></textarea></th>
      <th><textarea name="acc" class="informe" cols="3" rows="4"><?php echo $acc;?></textarea></th>
      <th><textarea name="accii" class="informe" cols="3" rows="4"><?php echo $accii;?></textarea></th>
      <th><textarea name="res" class="informe" cols="30" rows="4"><?php echo $res;?></textarea></th>
      <th><textarea name="fe_i" class="informe" cols="30" rows="4"><?php echo $fe_i;?></textarea></th>  
      <th><textarea name="abi" class="informe" cols="20" rows="4"><?php echo $abi;?></textarea></th>
      <th><textarea name="imp" class="informe" cols="10" rows="4"><?php echo $imp;?></textarea></th>
      <th><textarea name="cie" class="informe" cols="20" rows="4"><?php echo $cie;?></textarea></th>
      <th><textarea name="fe_c" class="informe" cols="20" rows="4"><?php echo $fe_c;?></textarea></th>
      <th><textarea name="resu" class="informe" cols="10" rows="4"><?php echo $resu;?></textarea></th>
      <th><textarea name="ver" class="informe" cols="20" rows="4"><?php echo $ver;?></textarea></th>
      <th><textarea name="fe_v" class="informe" cols="10" rows="4"><?php echo $fe_v;?></textarea></th>
          
        <button class="forma" name="update">
          ¡Actualizar!
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>