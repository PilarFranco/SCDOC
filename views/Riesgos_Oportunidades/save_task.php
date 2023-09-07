<?php

session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $id= $_POST['id']; 
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

  $query = "INSERT INTO riesgos (id,fecha,tipo,irespon,idesc,iorig,i_i_e,icausa,ocuAR,conseAR,valAR,nivAR,
  resAR,ocuAO,conseAO,valAO,nivAO,controlTRA,estraTRA,accionesSEG,fechaSEG,evidSEG,freSEG,resSEG,cumVER,fechaVER,
  efecVER,obseVER,respVER,id_empresa) 
  VALUES ('$id','$fecha','$tipo','$irespon','$idesc','$iorig','$i_i_e','$icausa','$ocuAR','$conseAR','$valAR',
  '$nivAR','$resAR','$ocuAO','$conseAO','$valAO', '$nivAO','$controlTRA','$estraTRA','$accionesSEG','$fechaSEG',
  '$evidSEG','$freSEG','$resSEG','$cumVER','$fechaVER','$efecVER','$obseVER', '$respVER','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

 
  header('Location: index.php');

}

?>
