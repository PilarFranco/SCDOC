<?php 
    #capturamos los datos del formulario
    $nombre=$_POST['emp_nombre'];
    $archivo=$_FILES['logo'];
    $nombreArchivo=$archivo['name'];
    
    #archivo
    $tmp=$archivo['tmp_name'];
    $contenido=file_get_contents($tmp);
    $archivoBLOB=addslashes($contenido);

    #conexion y función insertar
    include "../../includes/_functions.php";
    $conexion=conexion();
    $query=insertarArchivo($conexion,$nombre,$archivoBLOB);
    if($query){
        header('location:../empresas.php');
    }else{
        header('location:../empresas.php');
    }
    
?>
