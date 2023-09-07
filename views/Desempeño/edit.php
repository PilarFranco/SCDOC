<?php
include("../../includes/_db.php");

$p = '';
$o= '';
$r= '';
$i= '';
$m= '';
$f= '';
$en= '';
$fe = '';
$ma= '';
$ab= '';
$may= '';
$ju= '';
$jul= '';
$ag= '';
$se= '';
$oc= '';
$no= '';
$di= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM desempeño WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $p = $row['p'];
    $o = $row['o'];
    $r = $row['r'];
    $i = $row['i'];
    $m = $row['m'];
    $f = $row['f'];
    $en = $row['en'];
    $fe = $row['fe'];
    $ma = $row['ma'];
    $ab = $row['ab'];
    $may = $row['may'];
    $ju = $row['ju'];
    $jul = $row['jul'];
    $ag = $row['ag'];
    $se = $row['se'];
    $oc = $row['oc'];
    $no = $row['no'];
    $di = $row['di'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $p = $_POST['p'];
  $o = $_POST['o'];
  $r = $_POST['r'];
  $i = $_POST['i'];
  $m = $_POST['m'];
  $f = $_POST['f'];
  $en = $_POST['en'];
  $fe= $_POST['fe'];
  $ma = $_POST['ma'];
  $ab = $_POST['ab'];
  $may = $_POST['may'];
  $ju = $_POST['ju'];
  $jul = $_POST['jul'];
  $ag = $_POST['ag'];
  $se = $_POST['se'];
  $oc = $_POST['oc'];
  $no = $_POST['no'];
  $di = $_POST['di'];

  $query = "UPDATE desempeño set p= '$p', o= '$o', r= '$r', i= '$i', m= '$m', f= '$f', en= '$en', fe= '$fe', ma= '$ma', ab= '$ab', may= '$may', ju= '$ju', jul= '$jul', ag= '$ag', se= '$se', oc= '$oc', no= '$no', di= '$di' WHERE id=$id";
  mysqli_query($conexion, $query);

  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - PARTES INTERESADAS</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>DESEMPEÑO</h1>

<thead>
                            <tr>
            
                            <td colspan="3"></td>
              <td colspan="3">INDICADOR Y META</td>
              <td colspan="12">DESEMPEÑO (AÑO)</td>
          </tr>

          <tr>
              <td>Proceso</td>
              <td>Objetivo</td>
              <td>Responsable</td>
              <td>Indicador</td>
              <td>Meta</td>
              <td>frecuencia</td>
              <td>Enero</td>
              <td>Febrero</td>
              <td>Marzo</td>
              <td>Abril</td>
              <td>Mayo</td>
              <td>Junio</td>
              <td>Julio</td>
              <td>Agosto</td>
              <td>Septiembre</td>
              <td>Octubre</td>
              <td>Noviembre</td>
              <td>Diciembre</td>

              
        </tr>          
                            
                                </thead>
        <tbody>


<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="p" class="informe" cols="20" rows="4"><?php echo $p;?></textarea></th>
      <th><textarea name="o" class="informe" cols="20" rows="4"><?php echo $o;?></textarea></th>
      <th><textarea name="r" class="informe" cols="3" rows="4"><?php echo $r;?></textarea></th>
      <th><textarea name="i" class="informe" cols="3" rows="4"><?php echo $i;?></textarea></th>
      <th><textarea name="m" class="informe" cols="30" rows="4"><?php echo $m;?></textarea></th>
      <th><textarea name="f" class="informe" cols="30" rows="4"><?php echo $f;?></textarea></th>  
      <th><textarea name="en" class="informedos" cols="20" rows="4"><?php echo $en;?></textarea></th>
      <th><textarea name="fe" class="informedos" cols="10" rows="4"><?php echo $fe;?></textarea></th>
      <th><textarea name="ma" class="informedos" cols="20" rows="4"><?php echo $ma;?></textarea></th>
      <th><textarea name="ab" class="informedos" cols="20" rows="4"><?php echo $ab;?></textarea></th>
      <th><textarea name="may" class="informedos" cols="3" rows="4"><?php echo $may;?></textarea></th>
      <th><textarea name="ju" class="informedos" cols="3" rows="4"><?php echo $ju;?></textarea></th>
      <th><textarea name="jul" class="informedos" cols="30" rows="4"><?php echo $jul;?></textarea></th>
      <th><textarea name="ag" class="informedos" cols="30" rows="4"><?php echo $ag;?></textarea></th>  
      <th><textarea name="se" class="informedos" cols="20" rows="4"><?php echo $se;?></textarea></th>
      <th><textarea name="oc" class="informedos" cols="10" rows="4"><?php echo $oc;?></textarea></th>
      <th><textarea name="no" class="informedos" cols="20" rows="4"><?php echo $no;?></textarea></th>
      <th><textarea name="di" class="informedos" cols="20" rows="4"><?php echo $di;?></textarea></th>

        
        <button class="forma" name="update">
          ¡Actualizar!
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>