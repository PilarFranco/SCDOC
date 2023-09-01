<?php
include("db.php");

$r= '';
$t= '';
$p= '';
$re= '';
$u= '';
$d= '';
$m= '';
$a= '';
$c= '';
$di= '';
$ve= '';
$un= '';
$do= '';
$dr= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM infraestructura WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $r = $row['r'];
    $t = $row['t'];
    $p = $row['p'];
    $re = $row['re'];
    $u = $row['u'];
    $d = $row['d'];
    $m = $row['m'];
    $a = $row['a'];
    $c = $row['c'];
    $di = $row['di'];
    $ve = $row['ve'];
    $un = $row['un'];
    $do = $row['do'];
    $dr = $row['dr'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $r = $_POST['r'];
  $t = $_POST['t'];
  $p = $_POST['p'];
  $re = $_POST['re'];
  $u = $_POST['u'];
  $d = $_POST['d'];
  $m = $_POST['m'];
  $a= $_POST['a'];
  $c = $_POST['c'];
  $di = $_POST['di'];
  $ve = $_POST['ve'];
  $un = $_POST['un'];
  $do = $_POST['do'];
  $dr = $_POST['dr'];

  $query = "UPDATE infraestructura set r= '$r', t= '$t', p= '$p', re= '$re', u= '$u', d= '$d', m= '$m', a= '$a', c= '$c', di= '$di', ve= '$ve', un= '$un', do= '$do', dr= '$dr' WHERE id=$id";
  mysqli_query($conexion, $query);
 
  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - PARTES INTERESADAS</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>RECURSOS-INFRAESTRUCTURA</h1>

<thead>
                            <tr>
            
                            <tr>
              <td colspan="5">INVENTARIO DE INFRAESTRUCTURA</td>
              <td colspan="3">FECHA DE ADQUISICIÓN O PUESTA EN SERVICIO</td>
              <td colspan="3">VIDA ÚTIL (AÑOS)</td>
              <td colspan="3">ESTADO ACTUAL</td>

            </tr>
  
            <tr>
              <td>Responsable</td>
              <td>Tipo de mantenimiento</td>
              <td>Periodo/frecuencia de mantenimiento</td>
              <td>Responsable del Mantenimiento</td>
              <td>Ubicación física</td>
              <td>D</td>
              <td>M</td>
              <td>A</td>
              <td>5</td>
              <td>10</td>
              <td>20</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              
        </tr>
                            
                                </thead>
        <tbody>


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="r" class="informe"><?php echo $r;?></textarea></th>
      <th><textarea name="t" class="informe"><?php echo $t;?></textarea></th>
      <th><textarea name="p" class="informe"><?php echo $p;?></textarea></th>
      <th><textarea name="re" class="informe"><?php echo $re;?></textarea></th>
      <th><textarea name="u" class="informe"><?php echo $u;?></textarea></th>
      <th><textarea name="d" class="informe"><?php echo $d;?></textarea></th>  
      <th><textarea name="m" class="informe"><?php echo $m;?></textarea></th>
      <th><textarea name="a" class="informe"><?php echo $a;?></textarea></th>
      <th><textarea name="c" class="informe"><?php echo $c;?></textarea></th>
      <th><textarea name="di" class="informe"><?php echo $di;?></textarea></th>
      <th><textarea name="ve" class="informe"><?php echo $ve;?></textarea></th>
      <th><textarea name="un" class="informe"><?php echo $un;?></textarea></th>
      <th><textarea name="do" class="informe"><?php echo $do;?></textarea></th>
      <th><textarea name="dr" class="informe"><?php echo $dr;?></textarea></th>  

            
  
        <button class="forma" name="update">
          ¡ACTUALIZAR!
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
