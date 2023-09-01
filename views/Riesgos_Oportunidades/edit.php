<?php

session_start();
error_reporting(0);

include("db.php");
$id_empresa = $_SESSION['id_empresa'];

$id= '';
$fecha= '';
$tipo= '';
$irespon= '';
$idesc= '';
$iorig= '';
$i_i_e= '';
$icausa= '';
$ocuAR= '';
$conseAR= '';
$valAR= '';
$nivAR= '';
$resAR= '';
$ocuAO= '';
$conseAO= '';
$valAO= '';
$nivAO= '';
$controlTRA= '';
$estraTRA= '';
$accionesSEG= '';
$fechaSEG= '';
$evidSEG= '';
$freSEG= '';
$resSEG= '';
$cumVER= '';
$fechaVER= '';
$efecVER= '';
$obseVER= '';
$respVER= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM riesgos WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id= $row['id']; 
    $fecha= $row['fecha'];
    $tipo= $row['tipo'];
    $irespon= $row['irespon'];
    $idesc= $row['idesc'];
    $iorig= $row['iorig'];
    $i_i_e= $row['i_i_e'];
    $icausa= $row['icausa'];
    $ocuAR= $row['ocuAR'];
    $conseAR= $row['conseAR'];
    $valAR= $row['valAR'];
    $nivAR= $row['nivAR'];
    $resAR= $row['resAR'];
    $ocuAO= $row['ocuAO'];
    $conseAO= $row['conseAO'];
    $valAO= $row['valAO'];
    $nivAO= $row['nivAO'];
    $controlTRA= $row['controlTRA'];
    $estraTRA= $row['estraTRA'];
    $accionesSEG= $row['accionesSEG'];
    $fechaSEG= $row['fechaSEG'];
    $evidSEG= $row['evidSEG'];
    $freSEG= $row['freSEG'];
    $resSEG= $row['resSEG'];
    $cumVER= $row['cumVER'];
    $fechaVER= $row['fechaVER'];
    $efecVER= $row['efecVER'];
    $obseVER= $row['obseVER'];
    $respVER= $row['respVER'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $fecha= $_POST['fecha'];
  $tipo= $_POST['tipo'];
  $irespon= $_POST['irespon'];
  $idesc= $_POST['idesc'];
  $iorig= $_POST['iorig'];
  $i_i_e= $_POST['i_i_e'];
  $icausa= $_POST['icausa'];
  $ocuAR= $_POST['ocuAR'];
  $conseAR= $_POST['conseAR'];
  $valAR= $_POST['valAR'];
  $nivAR= $_POST['nivAR'];
  $resAR= $_POST['resAR'];
  $ocuAO= $_POST['ocuAO'];
  $conseAO= $_POST['conseAO'];
  $valAO= $_POST['valAO'];
  $nivAO= $_POST['nivAO'];
  $controlTRA= $_POST['controlTRA'];
  $estraTRA= $_POST['estraTRA'];
  $accionesSEG= $_POST['accionesSEG'];
  $fechaSEG= $_POST['fechaSEG'];
  $evidSEG= $_POST['evidSEG'];
  $freSEG= $_POST['freSEG'];
  $resSEG= $_POST['resSEG'];
  $cumVER= $_POST['cumVER'];
  $fechaVER= $_POST['fechaVER'];
  $efecVER= $_POST['efecVER'];
  $obseVER= $_POST['obseVER'];
  $respVER= $_POST['respVER'];

  $query = "UPDATE riesgos set   id= '$id', fecha= '$fecha',tipo= '$tipo',irespon= '$irespon',idesc= '$idesc',iorig= '$iorig',i_i_e= '$i_i_e',icausa= '$icausa',ocuAR= '$ocuAR',conseAR= '$conseAR',valAR= '$valAR',nivAR= '$nivAR',resAR= '$resAR',ocuAO= '$ocuAO',conseAO= '$conseAO',valAO= '$valAO',nivAO= '$nivAO',controlTRA= '$controlTRA',estraTRA= '$estraTRA',accionesSEG= '$accionesSEG',fechaSEG= '$fechaSEG',evidSEG= '$evidSEG',freSEG= '$freSEG',resSEG= '$resSEG',cumVER= '$cumVER',fechaVER= '$fechaVER',efecVER= '$efecVER',obseVER= '$obseVER',respVER= '$respVER' WHERE id=$id";
  mysqli_query($conexion, $query);
  

  header('Location: index.php');
}

?>
 <link rel="stylesheet" href="style.css">
 <table class="default" id="tabla">
 <tbody>
 <title>Ver, Editar - RIESGOS Y OPORTUNIDADES</title>
 <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>

        <h1>RIESGOS Y OPORTUNIDADES</h1>

      <thead>
        <tr>
            <td colspan="8">IDENTIFICACIÓN DEL RIESGOS/OPORTUNIDAD</td>
            <td colspan="5">ANÁLISIS Y EVALUACIÓN DEL RIESGO</td>
            <td colspan="4">ANÁLISIS Y EVALUACIÓN DE LA OPORTUNIDAD</td>
            <td colspan="2">TRATAMIENTO DEL RIESGO/ OPORTUNIDAD</td>
            <td colspan="5">SEGUIMIENTO DEL RIESGO/OPORTUNIDAD</td>
            <td colspan="5">VERIFICACIÓN DEL RIESGO/OPORTUNIDAD</td> 
          </tr>

          <tr>
            <td>No.</td>
            <td>Fecha de identificación</td>
            <td>Tipo R/O</td>
            <td>Responsable de riesgo/oportunidad</td>
            <td>Riesgo/ Oportunidad (Descripción)</td>
            <td>Origen del  del riesgo/ oportunidad</td>
            <td>Interno/Externo</td>
            <td> Posibles causas que lo originan</td>

            <td>Probabilidad de ocurrencia</td>
            <td>Consecuencia</td>
            <td>Valoración del riesgo</td>
            <td>Nivel del Riesgo</td>
            <td>Responsable de aprobación del riesgo</td>

            <td>Probabilidad de ocurrencia de la oportunidad</td>
            <td>Consecuencia de la oportunidad</td>
            <td>Valoración de la oportunidad</td>
            <td>Nivel de beneficio</td>
            
            
            <td>Control</td>
            <td>Estrategia para la administración del riesgo</td>

            <td>Acciones para el seguimiento del riesgo/oportunidad</td>
            <td>Fecha de implementación de las acciones</td>
            <td>Evidencia documental</td>
            <td>Frecuencia de revisión</td>
            <td>Responsable de la implementación de las acciones</td>

            <td>Cumplimiento de las acciones (si/no)</td>
            <td>Fecha de verificación</td>
            <td>Efectividad de las acciones</td>
            <td>Observaciones</td>
            <td>Responsable de la verificación</td>
      </tr>

      </thead>
      </tbody>

<link rel="stylesheet" href="style.css">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <tr>

      <th><textarea name="id" class="informe"><?php echo $id;?></textarea></th>
      <th><textarea name="fecha" class="informe"><?php echo $fecha;?></textarea></th>
      <th><textarea name="irespon" class="informe"><?php echo $irespon;?></textarea></th>
      <th><textarea name="idesc	" class="informe"><?php echo $idesc	;?></textarea></th>
      <th><textarea name="iorig" class="informe"><?php echo $iorig;?></textarea></th>
      <th><textarea name="i_i_e" class="informe"><?php echo $i_i_e;?></textarea></th>
      <th><textarea name="icausa" class="informe"><?php echo $icausa;?></textarea></th>
      <th><textarea name="ocuAR	" class="informe"><?php echo $ocuAR	;?></textarea></th>
      <th><textarea name="conseAR	" class="informe"><?php echo $conseAR	;?></textarea></th>
      <th><textarea name="valAR" class="informe"><?php echo $valAR;?></textarea></th>
      <th><textarea name="nivAR" class="informe"><?php echo $nivAR;?></textarea></th>
      <th><textarea name="resAR" class="informe"><?php echo $resAR;?></textarea></th>
      <th><textarea name="ocuAO" class="informe"><?php echo $ocuAO;?></textarea></th>
      <th><textarea name="conseAO	" class="informe"><?php echo $conseAO	;?></textarea></th>
      <th><textarea name="valAO" class="informe"><?php echo $valAO;?></textarea></th>
      <th><textarea name="nivAO" class="informe"><?php echo $nivAO;?></textarea></th>
      <th><textarea name="controlTRA" class="informe"><?php echo $controlTRA;?></textarea></th>
      <th><textarea name="estraTRA	" class="informe"><?php echo $estraTRA	;?></textarea></th>
      <th><textarea name="accionesSEG	" class="informe"><?php echo $accionesSEG	;?></textarea></th>
      <th><textarea name="fechaSEG" class="informe"><?php echo $fechaSEG;?></textarea></th>
      <th><textarea name="evidSEG" class="informe"><?php echo $evidSEG;?></textarea></th>
      <th><textarea name="freSEG	" class="informe"><?php echo $freSEG	;?></textarea></th>
      <th><textarea name="resSEG" class="informe"><?php echo $resSEG;?></textarea></th>
      <th><textarea name="cumVER" class="informe"><?php echo $cumVER;?></textarea></th>
      <th><textarea name="fechaVER" class="informe"><?php echo $fechaVER;?></textarea></th>
      <th><textarea name="efecVER	" class="informe"><?php echo $efecVER	;?></textarea></th>
      <th><textarea name="obseVER	" class="informe"><?php echo $obseVER	;?></textarea></th>
      <th><textarea name="respVER" class="informe"><?php echo $respVER;?></textarea></th>

      <button class="forma" name="update">
        ¡ACTUALIZAR!
</button>
            
          
    
      </form>
      </div>
    </div>
  </div>
</div>

