<?php

include("../../includes/_db.php");


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM proveedores WHERE id = $id";
  $result = mysqli_query($conexion, $query);

  if(!$result) {
    die("Query Failed.");
  }

  
  header('Location: index.php');
}

?>
