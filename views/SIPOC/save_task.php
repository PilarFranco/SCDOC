<?php

session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $pro= $_POST['pro'];
  $en= $_POST['en'];
  $sos= $_POST['sos'];
  $sal= $_POST['sal'];
  $cli= $_POST['cli'];

  $query = "INSERT INTO sipoc (pro,en,sos,sal,cli,id_empresa) VALUES ('$pro', '$en', '$sos', '$sal', '$cli','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: index.php');

}

?>
