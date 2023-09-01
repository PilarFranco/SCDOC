<?php

session_start();
error_reporting(0);

include("db.php");
$id_empresa = $_SESSION['id_empresa'];


$tipo= '';
$me= '';
$em= '';
$re= '';
$cuando= '';
$co= '';
$ind= '';
$ele= '';
$mai= '';
$im= '';
$res= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM comunicacion WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $tipo= $row['tipo'];
    $me= $row['me'];
    $em= $row['em'];
    $re= $row['re'];
    $cuando= $row['cuando'];
    $co= $row['co'];
    $ind= $row['ind'];
    $ele= $row['ele'];
    $mai= $row['mai'];
    $im= $row['im'];
    $res= $row['res'];
  
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $tipo= $_POST['tipo'];
  $me= $_POST['me'];
  $em= $_POST['em'];
  $re= $_POST['re'];
  $cuando= $_POST['cuando'];
  $co= $_POST['co'];
  $ind= $_POST['ind'];
  $ele= $_POST['ele'];
  $mai= $_POST['mai'];
  $im= $_POST['im'];
  $res= $_POST['res'];

  $query = "UPDATE comunicacion set tipo= '$tipo', me= '$me', em= '$em', re= '$em', cuando= '$cuando', co= '$co', ind= '$ind', ele= '$ele', mai= '$mai', im= '$im', res= '$res' WHERE id=$id";
  mysqli_query($conexion, $query);
  

  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - TABLA DE COMUNICACIÓN</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

 
        <h1>TABLA DE COMUNICACIÓN</h1>

<thead>
<tr>
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


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="tipo" class="form-control" cols="20" rows="4"><?php echo $tipo;?></textarea></th>
      <th><textarea name="me" class="form-control" cols="20" rows="4"><?php echo $me;?></textarea></th>
      <th><textarea name="em" class="form-control" cols="3" rows="4"><?php echo $em;?></textarea></th>
      <th><textarea name="re" class="form-control" cols="3" rows="4"><?php echo $re;?></textarea></th>
      <th><textarea name="cuando" class="form-control" cols="30" rows="4"><?php echo $cuando;?></textarea></th>
      <th><textarea name="co" class="form-control" cols="20" rows="4"><?php echo $co;?></textarea></th>
      <th><textarea name="ind" class="form-control" cols="10" rows="4"><?php echo $ind;?></textarea></th>
      <th><textarea name="ele" class="form-control" cols="20" rows="4"><?php echo $ele;?></textarea></th>
      <th><textarea name="mai" class="form-control" cols="20" rows="4"><?php echo $mai;?></textarea></th>
      <th><textarea name="im" class="form-control" cols="20" rows="4"><?php echo $im;?></textarea></th>
      <th><textarea name="res" class="form-control" cols="20" rows="4"><?php echo $res;?></textarea></th>

      
        <button class="forma" name="update">
          ¡Actualizar!
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

