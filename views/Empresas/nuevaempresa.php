<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

    header("Location: ./includes/login.php");
    die();



}




?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

    <link rel="stylesheet" href="../../css/es.css">
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body id="page-top">

<div class="m-0 row justify-content-center mt-3" >
            <form action="insertar.php" method="post" enctype="multipart/form-data" class="col-auto w-50">
                <label for="Nombre">Nombre la empresa</label>
                <input type="text" name="emp_nombre" id="emp_nombre" class="form-control">
                <label for="archivo">Sube un archivo</label>
                <input type="file" name="logo" id="logo" class="form-control">
                <button type="submit" class="btn btn-primary mt-2">Subir archivo</button>
            </form>
        </div>
</body>

</html>