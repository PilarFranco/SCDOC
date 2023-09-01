<?php 
    $id=$_GET['id'];
    include 'config/bd.php';
    $conexion=conexion();
    $datos=datos($conexion,$id);
    $nombre=$datos['nombre'];
    $categoria=$datos['categoria'];
    $titulo=$nombre.'.'.$categoria;
    $tipo=$datos['tipo'];
    $archivo=$datos['archivo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACIÓN - EDITAR</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>

    <div class="container">
            <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/editar.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h1 class="text-center"><?php echo $titulo; ?></h1>
                <div class="mb-2">
                    <label class="titulo">Nombre del archivo</label>
                    <input class='form-control form-control-sm' type="text" name="nombreArchivo" value="<?php echo $nombre ;?>">
                </div>
                <div>
                    <label class="titulo">Selecciona un archivo</label>
                    <input class='form-control form-control-sm' type="file" name="archivo">
                </div>
                <button class="forma">Actualizar archivo</button>
                <a class="btn btn-warning btn-sm" href="index.php">Regresar</a>
            </form>
            <div >
                <?php 
                    $valor="";
                    if($categoria=='pdf'){
                        $valor="<iframe class='w-100' height='500' src='data:".$tipo.";base64,".base64_encode($archivo)."' frameborder='0'></iframe>";
                    }
                    if($categoria=='png' || $categoria=='jpg'){
                        $valor="<img src='data:".$tipo.";base64,".base64_encode($archivo)."' >";
                    }
                    if($categoria=='mp4' || $categoria=='mp3'){
                        $valor="<video class='m-auto' controls='true' src='data:".$tipo.";base64,".base64_encode($archivo)."'></video>";
                    }
                    
                    echo $valor;
                
                ?>
            </div>

    </div>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>