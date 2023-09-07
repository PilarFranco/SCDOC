<?php

session_start();
error_reporting(0);

include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $p = $_POST['p'];
  $o = $_POST['o'];
  $r = $_POST['r'];
  $i = $_POST['i'];
  $m = $_POST['m'];
  $f = $_POST['f'];
  $en = $_POST['en'];
  $fe = $_POST['fe'];
  $ma = $_POST['ma'];
  $ab = $_POST['ab'];
  $may = $_POST['may'];
  $ju = $_POST['ju'];
  $jul = $_POST['jul'];
  $ag = $_POST['ag'];
  $se = $_POST['se'];
  $oc = $_POST['oc'];
  $nov = $_POST['no'];
  $di = $_POST['di'];


  $query = "INSERT INTO desempeño (p,o,r,i,m,f,en,fe,ma,ab,may,ju,jul,ag,se,oc,no,di,id_empresa) VALUES ('$p','$o','$r','$i','$m','$f','$en','$fe','$ma','$ab','$may','$ju','$jul','$ag','$se','$oc','$no','$di','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
