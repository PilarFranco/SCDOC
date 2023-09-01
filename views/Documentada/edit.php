<?php
include("db.php");

$n= '';
$r= '';
$f= '';
$pu= '';
$e= '';
$p= '';
$pe= '';
$d= '';



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM documentada WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $n = $row['n'];
    $r = $row['r'];
    $f = $row['f'];
    $pu = $row['pu'];
    $e = $row['e'];
    $p = $row['p'];
    $pe = $row['pe'];
    $d = $row['d'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $n = $_POST['n'];
  $r = $_POST['r'];
  $f = $_POST['f'];
  $pu = $_POST['pu'];
  $e = $_POST['e'];
  $p = $_POST['p'];
  $pe= $_POST['pe'];
  $d = $_POST['d'];

  $query = "UPDATE documentada set n= '$n', r= '$r', f= '$f', pu= '$pu', e= '$e', p= '$p', pe= '$pe', d= '$d' WHERE id=$id";
  mysqli_query($conexion, $query);
  

  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - PARTES INTERESADAS</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>LISTA MAESTRA DE REGISTRO</h1>

<thead>
                            <tr>
            
        <tr>
            <td colspan="8">Registros</td>
        </tr>
        <tr>
            <td rowspan="2">Nombre del formato</td>
            <td rowspan="2">No. Revisión (formato)</td>
            <td rowspan="2">Fecha de revisión</td>
            <td rowspan="2">Puesto que lo mantiene</td>
            <td colspan="2">Tipo de archivo</td>
            <td rowspan="2">Periodo de retención</td>
            <td rowspan="2">Disposicion Oficial</td>

        </tr>
                            
                                </thead>
        <tbody>


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="n" class="informe" cols="20" rows="4"><?php echo $n;?></textarea></th>
      <th><textarea name="r" class="informe" cols="3" rows="4"><?php echo $r;?></textarea></th>
      <th><textarea name="f" class="informe" cols="3" rows="4"><?php echo $f;?></textarea></th>
      <th><textarea name="pu" class="informe" cols="30" rows="4"><?php echo $pu;?></textarea></th>
      <th><textarea name="e" class="informe" cols="30" rows="4"><?php echo $e;?></textarea></th>  
      <th><textarea name="p" class="informe" cols="20" rows="4"><?php echo $p;?></textarea></th>
      <th><textarea name="pe" class="informe" cols="10" rows="4"><?php echo $pe;?></textarea></th>
      <th><textarea name="d" class="informe" cols="20" rows="4"><?php echo $d;?></textarea></th>

       
        <button class="forma" name="update">
          ¡Actualizar!
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>