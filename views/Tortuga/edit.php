<?php

session_start();
error_reporting(0);

include("db.php");
$id = $_SESSION['id'];

$pro = '';
$c = '';
$e = '';
$m = '';
$co = '';
$s = '';
$com = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tortuga WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $pro = $row['pro'];
    $c = $row['c'];
    $e = $row['e'];
    $m = $row['m'];
    $co = $row['co'];
    $s = $row['s'];
    $com = $row['com'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $pro = $_POST['pro'];
  $c = $_POST['c'];
  $e = $_POST['e'];
  $m = $_POST['m'];
  $co = $_POST['co'];
  $s = $_POST['s'];
  $com = $_POST['com'];

  $query = "UPDATE tortuga set pro= '$pro', c= '$c', e= '$e', m= '$m', co= '$co', s= '$s', com= '$com' WHERE id=$id";
  mysqli_query($conexion, $query);

  header('Location: index.php');
}

?>

<tbody>


  <link rel="stylesheet" href="style2.css">
  <table class="default" id="tabla">
    <tbody>
      <title>Ver, Editar - DIAGRAMA TORTUGA</title>


      <h1>DIAGRAMA DE TORTUGA</h1>
      <thead>
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="grid">
          <div class="conque">
            <center>¿CON QUE?</center>
            <textarea placeholder="Maquinas/equipos.
      Materiales:" id="msg" name="c"><?php echo $c; ?></textarea>
          </div>
          <div class="entradas">
            <center>ENTRADAS</center>
            <textarea placeholder="Necesidades del cliente.
Requerimientos de Entrada: Cuales son las entradas que determinan que el proceso debe iniciar.
Fuentes de entrada: procesos procedentes: proveedores (internos, externos),
 clientes, otras partes interesadas pertinentes." id="msg" name="e"><?php echo $e; ?></textarea>
          </div>
          <div class="criterios">
            <center>MEDICIÓN</center>
            <textarea placeholder="¿Con que criterios clave? Mediciones/evaluaciones
Datos tomados en cuenta:
Frecuencia de medición:
Registro:
Responsable de medición: " id="msg" name="m"><?php echo $m; ?></textarea>
          </div>
          <div class="proceso">
            <center>PROCESO</center>
            <textarea class="procesosty" placeholder="Proceso:
 Objetivo del proceso: " name="pro"><?php echo $pro; ?></textarea>
          </div>
          <div class="conquien">
            <center>¿CON QUIEN?</center>
            <textarea placeholder="Personal relacionado con el proceso:
Ligas/interfaces con las partes involucradas. " id="msg" name="co"><?php echo $co; ?></textarea>
          </div>
          <div class="salidas">
            <center>SALIDAS</center>
            <textarea placeholder="Necesidades del cliente:
Requerimientos de Salida: que criterios de salida son usados para determinar que 
las salidas cumplen los requerimientos de entrada. " id="msg" name="s"><?php echo $s; ?></textarea>
          </div>
          <div class="como">
            <center>¿COMO?</center>
            <textarea placeholder="Proceso de soporte (Quién ayuda y como)
Procedimientos/ Instrucciones de trabajo/ Control de Doc's. " id="msg" name="com"><?php echo $com; ?></textarea>
          </div>
        </div>

  </table>


  </thead>
</tbody>
<td>

  <button class="forma" name="update">
    ¡ACTUALIZAR!
  </button>
  </form>
  </div>
  </div>
  </div>
  </div>
