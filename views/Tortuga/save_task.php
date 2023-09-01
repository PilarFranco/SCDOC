<?php

session_start();
error_reporting(0);


include('db.php');
$id = $_SESSION['id'];

if (isset($_POST['save_task'])) {
  $pro= $_POST['pro'];
  $c= $_POST['c'];
  $e= $_POST['e'];
  $m= $_POST['m'];
  $co= $_POST['co'];
  $s= $_POST['s'];
  $com= $_POST['com'];

  $query = "INSERT INTO tortuga (pro,c,e,m,co,s,com,id)
                  VALUES ('$pro','$c','$e','$m','$co','$s','$com','$id')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: index.php');

}

?>
