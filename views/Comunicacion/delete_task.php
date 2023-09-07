<?php

include("../../includes/_db.php");


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM comunicacion WHERE id = $id";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminacion Correcta';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>
