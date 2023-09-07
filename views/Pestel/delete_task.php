<?php

include("../../includes/_db.php");


if(isset($_GET['id_pestel'])) {
  $id_pestel = $_GET['id_pestel'];
  $query = "DELETE FROM pestel WHERE id_pestel = $id_pestel";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  header('Location: index.php');
}

?>
