<?php

session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $tipo= $_POST['tipo'];
  $me= $_POST['me'];
  $em= $_POST['em'];
  $re= $_POST['re'];
  $cuando= $_POST['cuando'];
  $co= $_POST['co'];
  $ind= $_POST['ind'];
  $ele= $_POST['ele'];
  $mai= $_POST['mai'];
  $im= $_POST['im'];
  $res= $_POST['res'];


  $query = "INSERT INTO comunicacion (tipo,me,em,re,cuando,co,ind,ele,mai,im,res,id_empresa) VALUES ('$tipo','$me','$em','$re','$cuando','$co','$ind','$ele','$mai','$im','$res','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
