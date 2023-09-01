<?php
   
require_once ("_db.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;


		}

	}
    function seleccionarUser($conexion,$id){
        $sql="SELECT * FROM user WHERE id=$id";
        $query=mysqli_query($conexion,$sql);
        $datos=mysqli_fetch_assoc($query);
        return $datos;
    }

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","r_user");
		extract($_POST);   
		$consulta="UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		password ='$password', rol = '$rol' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../views/user.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM user WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: ../views/user.php');

}

function acceso_user() {
    


    $id_empresa=$_POST['id_empresa'];
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$nombre;
    $_SESSION['id_empresa']=$id_empresa;

    $conexion=mysqli_connect("localhost","root","","r_user");
    $consulta= "SELECT * FROM user WHERE nombre='$nombre' AND password='$password' AND id_empresa='$id_empresa'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);


    if($filas['rol'] == 1){ //admin

        header('Location: ../views/user.php');

    }else if($filas['rol'] == 2){//lector
        header('Location: ../views/Interpretaciones/introduccion_2.php');

    }
    
    
    else{

        header('Location: login.php');
        session_destroy();

    }

  
}

    function conexion(){
        $conexion=mysqli_connect('localhost','root','','r_user');
        return $conexion;
    }


    function listarArchivos($conexion){
        $sql="SELECT * FROM archivo";
        $query=mysqli_query($conexion,$sql);
        return $query;
    }
    function eliminarArchivo($conexion,$id){
        $sql="DELETE FROM empresas where id_empresa=$id";
        $query=mysqli_query($conexion,$sql);
        return $query;
    }
    function insertarArchivo($conexion,$nombre,$archivoBlob){
        $sql="INSERT INTO empresas(emp_nombre,logo) VALUES('$nombre','$archivoBlob') ";
        $query=mysqli_query($conexion,$sql);
        return $query;
    }
    function seleccionarCampo($conexion,$id){
        $sql="SELECT * FROM empresas WHERE id_empresa=$id";
        $query=mysqli_query($conexion,$sql);
        $datos=mysqli_fetch_assoc($query);
        return $datos;
    }
    function modificarNombre($conexion,$id,$nombre){
        $sql="UPDATE empresas SET emp_nombre='$nombre' WHERE id_empresa=$id";
        $query=mysqli_query($conexion,$sql);
        return $query;
    }
    function modificarTodo($conexion,$id,$nombre,$archivoBlob){
        $sql="UPDATE empresas SET emp_nombre='$nombre',logo='$archivoBlob' WHERE id_empresa=$id ";
        $query=mysqli_query($conexion,$sql);
        return $query;
    }
    function modificarArchivo($conexion,$id,$archivoBlob){
        $sql="UPDATE empresas SET logo='$archivoBlob' WHERE id_empresa=$id ";
        $query=mysqli_query($conexion,$sql);
        return $query;
    }
?>




