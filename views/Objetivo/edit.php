<?php

session_start();
error_reporting(0);

include("db.php");
$id_empresa = $_SESSION['id_empresa'];


$ob= '';
$me= '';
$ind= '';
$fu= '';
$es= '';
$re= '';
$fi= '';
$hu= '';
$eq= '';
$ti= '';
$feI= '';
$feT= '';

if  (isset($_GET['id_obj'])) {
  $id_obj = $_GET['id_obj'];
  $query = "SELECT * FROM objetivos WHERE id_obj=$id_obj";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
      $ob= $row['ob'];
      $me= $row['me'];
      $ind= $row['ind'];
      $fu= $row['fu'];
      $es= $row['es'];
      $re= $row['re'];
      $fi= $row['fi'];
      $hu= $row['hu'];
      $eq= $row['eq'];
      $ti= $row['ti'];
      $feI= $row['feI'];
      $feT= $row['feT'];
  }
}

if (isset($_POST['update'])) {
  $id_obj = $_GET['id_obj'];
  $ob= $_POST['ob'];
  $me= $_POST['me'];
  $ind= $_POST['ind'];
  $fu= $_POST['fu'];
  $es= $_POST['es'];
  $re= $_POST['re'];
  $fi= $_POST['fi'];
  $hu= $_POST['hu'];
  $eq= $_POST['eq'];
  $ti= $_POST['ti'];
  $feI= $_POST['feI'];
  $feT= $_POST['feT'];

  $query = "UPDATE objetivos set ob= '$ob', me= '$me', ind= '$ind', fu= '$fu', es= '$es', re= '$re', fi= '$fi', hu= '$hu', eq= '$eq', ti= '$ti', feI= '$feI', feT= '$feT' WHERE id_obj=$id_obj";
  mysqli_query($conexion, $query);
  

  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id_obj="tabla">
 <tbody>
 <title>Ver, Editar - OBJETIVO</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>OBJETIVO</h1>

<thead>

<tr>
<td colspan="2">Especifico</td>
<td colspan="2">Medible</td>
<td colspan="2">Alcanzable</td>
<td colspan="4">Realista</td>
<td colspan="2">Limite de tiempo</td>
<tr>
<td rowspan="2">Objetivo</td>
<td rowspan="2">Meta</td>
<td rowspan="2">Indicadores</td>
<td rowspan="2">Fuente de los datos</td>
<td rowspan="2">Estrategías para lograrlo</td>
<td rowspan="2">Responsables</td>
<td colspan="4">Recursos disponibles</td>
<td rowspan="2">Fecha de inicio</td>
<td rowspan="2">Fecha de termino</td>
</tr>

<tr>
<td>Financieros</td>
<td>Humanos</td>
<td>Equipo e infraestructura</td> 
<td>Tiempo</td>
</tr>
                            
</thead>
        <tbody>


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id_obj=<?php echo $_GET['id_obj']; ?>" method="POST">
      <tr>    <button class="forma" name="update">
          ¡Actualizar!
</button>

    <th><textarea name="ob" required size="15"><?php echo $ob;?></textarea></th>
    <th><textarea name="me" required size="15"><?php echo $me;?></textarea></th>
    <th><textarea name="ind" required size="15"><?php echo $ind;?></textarea></th>
    <th><textarea name="fu" required size="15"><?php echo $fu;?></textarea></th>
    <th><textarea name="es" required size="15"><?php echo $es;?></textarea></th>
    <th><textarea name="re" required size="15"><?php echo $re;?></textarea></th>
    <th><textarea name="fi" required size="15"><?php echo $fi;?></textarea></th>
    <th><textarea name="hu" required size="15"><?php echo $hu;?></textarea></th>
    <th><textarea name="eq" required size="15"><?php echo $eq;?></textarea></th>
    <th><textarea name="ti" required size="15"><?php echo $ti;?></textarea></th>
    <th><textarea name="feI" required size="15"><?php echo $feI;?></textarea></th>
    <th><textarea name="feT" required size="15"><?php echo $feT;?></textarea></th>

              
            
  <td>
   
    
      </form>
      </div>
    </div>
  </div>
</div>

