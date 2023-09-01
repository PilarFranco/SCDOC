<?php

include("db.php");


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM infraestructura WHERE id = $id";

  if(!$result) {
    die("Query Failed.");
  }


  header('Location: index.php');
}

?>
