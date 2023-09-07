<?php

session_start();
error_reporting(0);

include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $p= $_POST['p'];
  $e= $_POST['e'];
  $s= $_POST['s'];
  $t= $_POST['t'];
  $ec= $_POST['ec'];
  $l= $_POST['l'];

  $query = "INSERT INTO pestel (p,e,s,t,ec,l, id_empresa) VALUES ('$p','$e','$s','$t','$ec','$l','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }


  header('Location: index.php');

}

?>
