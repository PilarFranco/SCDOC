<?php

session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $n = $_POST['n'];
  $r = $_POST['r'];
  $f = $_POST['f'];
  $pu = $_POST['pu'];
  $e = $_POST['e'];
  $p = $_POST['p'];
  $pe = $_POST['pe'];
  $d = $_POST['d'];

  $query = "INSERT INTO documentada (n,r,f,pu,e,p,pe,d,id_empresa) VALUES ('$n','$r','$f','$pu','$e','$p','$pe','$d','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
