<?php 
    #capturar los datos
    $id=$_POST['id'];
    $Nnombre=$_POST['emp_nombre'];
    $archivo=$_FILES['logo'];

    #si solo modifica el emp_nombre el archivo estará vacio
    if($archivo['size']==0){
        #verificar si el emp_nombre lo a cambiado
        include "_functions.php";
        $conexion=conexion();
        $datos=seleccionarCampo($conexion,$id);
        $Anombre=$datos['emp_nombre'];
        if($Nnombre==$Anombre || $Nnombre==''){
            #no paso nada
            header('location:../');
        }else{
            $query=modificarNombre($conexion,$id,$Nnombre);
            if($query){
                header('location:../views/empresas.php');
            }else{
                header('location:../views/empresas.php');
            }
        }
    }else{
        #verificar si cambio el emp_nombre

        include '_functions.php';
        $conexion=conexion();
        $datos=seleccionarCampo($conexion,$id);
        $Anombre=$datos['emp_nombre'];
        #capturamos categoria,tipo,nueva fecha,archivo blob
        
        $archivoBlob=addslashes(file_get_contents($archivo['tmp_name']));
        if($Nnombre==$Anombre || $Nnombre==''){
            #tenemos que modificar todo menos el emp_nombre todo lo relacionado al archivo
            $query=modificarArchivo($conexion,$id,$archivoBlob);
            if($query){
                header('location:../views/empresas.php');
            }else{
                header('location:../views/empresas.php');
            }

        }else{
            #modificar todo
            $query=modificarTodo($conexion,$id,$Nnombre,$categoria);
            if($query){
                header('location:../views/empresas.php');
            }else{
                header('location:../views/empresas.php');
            }

        }

    }


?>
<html>
    <link rel="stylesheet" href="">
</html>