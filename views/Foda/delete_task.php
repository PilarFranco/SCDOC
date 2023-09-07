<?php

include("../../includes/_db.php");
session_start();
error_reporting(0);


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM foda WHERE id = $id";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminacion Correcta';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>
