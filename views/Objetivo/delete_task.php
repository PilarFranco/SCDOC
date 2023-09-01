<?php

include("db.php");



if(isset($_GET['id_obj'])) {
  $id = $_GET['id_obj'];
  $query = "DELETE FROM objetivos WHERE id_obj = $id";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  header('Location: index.php');
}

?>
