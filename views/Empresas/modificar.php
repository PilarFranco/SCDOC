<?php 
#optener el id
$id=$_GET['id'];
#sacar el nombre del archivo y la extensión
include "../../includes/_functions.php";
$conexion=conexion();
$datos=seleccionarCampo($conexion,$id);
$nombre=$datos['emp_nombre'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/es.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Document</title>
    <!--esilos bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- nuestros estilos -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
            <div class="m-0 row justify-content-center mt-3" >
                <form action="../../includes/modificar.php" method="post" enctype="multipart/form-data" class="col-auto w-50">
                    <div class="alert alert-warning text-center">
                        
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <label for="Nombre">Nombre del Archivo</label>
                    <input type="text" name="emp_nombre" id="emp_nombre" class="form-control" value="<?php echo $nombre;?>">
                    <label for="archivo">Actualizar Archivo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    <button type="submit" class="btn btn-primary mt-2">Actualizar</button> <a href="../empresas.php"><button type="button" class="btn btn-secondary mt-2">Retornar</button></a>
                </form>
            </div>
    </div>
    <!--js bootstrap -->
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>