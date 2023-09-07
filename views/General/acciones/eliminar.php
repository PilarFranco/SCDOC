<?php 
$con = new mysqli('localhost','root','','r_user');
if ($con->connect_errno) {
    die('fail');
}
$id=$_GET['id'];
include ('../upload.php');

$query=eliminar($con,$id);
if($query){
 header('location:../user.php');
}else{
    header('location:../user.php');
}
?>