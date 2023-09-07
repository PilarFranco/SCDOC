<?php

session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $ob= $_POST['ob'];
  $me= $_POST['me'];
  $ind= $_POST['ind'];
  $fu= $_POST['fu'];
  $es= $_POST['es'];
  $re= $_POST['re'];
  $fi= $_POST['fi'];
  $hu= $_POST['hu'];
  $eq= $_POST['eq'];
  $ti= $_POST['ti'];
  $feI= $_POST['feI'];
  $feT= $_POST['feT'];


  $query = "INSERT INTO objetivos (ob,me,ind,fu,es,re,fi,hu,eq,ti,feI,feT, id_empresa) 
  VALUES ('$ob','$me','$ind','$fu','$re','$es','$fi','$hu','$eq','$ti','$feI','$feT','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}
?>