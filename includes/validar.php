<?php
include '_db.php';


if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 && strlen($_POST['rol']) >= 1 && strlen($_POST['empresa']) >= 1 ){

    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $password = trim($_POST['password']);
    $rol = trim($_POST['rol']);
    $empresa = trim($_POST['empresa']);
    
    
    $consulta= "INSERT INTO user (nombre, correo, telefono, password, rol, id_empresa)
    VALUES ('$nombre', '$correo','$telefono','$password', '$rol', $empresa )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/user.php');
  }
}



