<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['logo']) ){

    $nombre = trim($_POST['nombre']);
    $logo = trim($_FILES['logo']);


    $consulta= "INSERT INTO empresas (nombre, logo)
    VALUES ('$nombre', '$logo')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../../views/empresaAdm.php');
  }
}









?>