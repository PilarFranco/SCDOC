<?php

session_start();
error_reporting(0);



include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];


if (isset($_POST['save_task'])) {
  $id = $_POST ['id'];
  $descc = $_POST ['descc'];
  $ana = $_POST ['ana'];
  $acc = $_POST ['acc'];
  $accii = $_POST ['accii'];
  $res = $_POST ['res'];
  $fe_i = $_POST ['fe_i'];
  $abi = $_POST ['abi'];
  $imp = $_POST ['imp'];
  $cie = $_POST ['cie'];
  $fe_c = $_POST ['fe_c'];
  $resu = $_POST ['resu'];
  $ver = $_POST ['ver'];
  $fe_v = $_POST ['fe_v'];

  $query = "INSERT INTO mejora (descc,ana,acc,accii,res,fe_i,abi,imp,cie,fe_c,resu,ver,fe_v,id_empresa) VALUES ('$descc','$ana','$acc','$accii','$res','$fe_i','$abi','$imp','$cie','$fe_c','$resu','$ver','$fe_v','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';

  header('Location: index.php');

}

?>
