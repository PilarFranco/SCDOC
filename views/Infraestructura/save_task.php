<?php


session_start();
error_reporting(0);


include('../../includes/_db.php');
$id_empresa = $_SESSION['id_empresa'];

if (isset($_POST['save_task'])) {
  $r = $_POST['r'];
  $t = $_POST['t'];
  $p = $_POST['p'];
  $re = $_POST['re'];
  $u = $_POST['u'];
  $d = $_POST['d'];
  $m = $_POST['m'];
  $a = $_POST['a'];
  $c = $_POST['c'];
  $di = $_POST['di'];
  $ve = $_POST['ve'];
  $un = $_POST['un'];
  $do = $_POST['do'];
  $dr = $_POST['dr'];

  $query = "INSERT INTO infraestructura (r,t,p,re,u,d,m,a,c,di,ve,un,do,dr,id_empresa) VALUES ('$r','$t','$p','$re','$u','$d','$m','$a','$c','$di','$ve','$un','$do','$dr','$id_empresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>
