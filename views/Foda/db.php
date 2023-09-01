<?php
session_start();

$conexion = mysqli_connect(
  'localhost',
  'root',
  '',
  'r_user'
) or die(mysqli_error($mysqli));

?>
