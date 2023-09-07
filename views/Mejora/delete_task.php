<?php

include("../../includes/_db.php");


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM mejora WHERE id = $id";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminación Correcta';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}
?>
