<?php

session_start();
error_reporting(0);


include('db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $i= $_POST['i'];
  $n= $_POST['n'];
  $t= $_POST['t'];
  $e= $_POST['e'];
  $r= $_POST['r'];
  $es= $_POST['es'];
  $a= $_POST['a'];
  $d= $_POST['d'];
  $ass= $_POST['ass'];
  

  $query = "INSERT INTO interesadas (i,n,t,e,r,es,a,d,ass,id_empresa) 
  VALUES ('$i','$n','$t','$e','$r','$es','$a','$d','$ass','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }


  header('Location: index.php');

}

?>
