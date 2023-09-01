<?php

include('db.php');
$id_empresa = $_SESSION['id_empresa'];


if (isset($_POST['save_task'])) {
  $f= $_POST['f'];
  $o= $_POST['o'];
  $d= $_POST['d'];
  $a= $_POST['a'];

  
  $query = "INSERT INTO foda (f,o,d,a, id_empresa) VALUES ('$f','$o','$d','$a','$id_empresa')";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
