<?php

session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $n = $_POST['n'];
  $r = $_POST['r'];
  $d = $_POST['d'];
  $t = $_POST['t'];
  $e = $_POST['e'];
  $a = $_POST['a'];
  $f = $_POST['f'];
  $c= $_POST['c'];
  $fe = $_POST['fe'];
  $cl = $_POST['cl'];

  $query = "INSERT INTO proveedores (n,r,d,t,e,a,f,c,fe,cl,id_empresa)
   VALUES ('$n','$r','$d','$t','$e','$a','$f','$c','$fe','$cl','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: index.php');

}

?>
