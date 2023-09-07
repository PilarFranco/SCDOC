<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if ($validar == null || $validar = '') {

    header("Location: ../includes/login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrador</title>
    <link rel="icon" type="image/png" href="../../includes/img/icono.png"/>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark" style="  background: #008590;">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="user.php"><ion-icon name="person-circle-outline"></ion-icon> Admin <?php echo $_SESSION['nombre']; ?></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../includes/_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark  " style="background: #323232; 
            	background: linear-gradient( #4c4c4c, #4c4c4c, #4c4c4c );" id="sidenavAccordion">
        <div class="sb-sidenav-menu">

          <div class="nav">
            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Administrador</div>


            <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseRecursoss" style="color: #0000;">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="shield-checkmark"></ion-icon></div>
              Administación
              <div class="sb-sidenav-collapse-arrow"><ion-icon name="key" style="color:#FFFFFF"></ion-icon></div>
            </a>
            <div class="collapse" style="color:#FFFFFF" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link fw-bold" style="color:#FFFFFF" href="user.php">Usuarios</a>
                <a class="nav-link fw-bold" style="color:#FFFFFF" href="empresas.php">Empresa</a>
              </nav>
            </div>

          </div>
          <div class="nav">
            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Empresa</div>

            <a class="nav-link fw-bold" style="color:#FFFFFF" href="Interpretaciones/introduccion.php">
              <div class="sb-nav-link-icon"><ion-icon name="clipboard" style="color:#FFFFFF"></ion-icon></div>
              Introducción
            </a>

            <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCapacitacion" aria-expanded="false" aria-controls="collapseCapacitacion">
              <div class="sb-nav-link-icon"><ion-icon name="easel" style="color:#FFFFFF"></ion-icon></i></div>
              Capacitación
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
            </a>
            <div class="collapse" id="collapseCapacitacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold"  style="color:#FFFFFF"href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Interpretación ISO 9001
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" style="color:#FFFFFF" href="Interpretaciones/interpretacion_1_2.php">Sesion 1</a>
                    <a class="nav-link" style="color:#FFFFFF" href="Interpretaciones/interpretacion_2_2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#FFFFFF" href="Interpretaciones/interpretacion_3_2.php">Sesion 3</a>
                    <a class="nav-link" style="color:#FFFFFF" href="Interpretaciones/interpretacion_4_2.php">Sesion 4</a>
                  </nav>
                </div>            
                
            </div>

          <div class="nav">
            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Mapas</div>


            <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisacion" aria-expanded="false" aria-controls="collapseOrganisacion">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="library" style="color:#FFFFFF"></ion-icon></div>
              Organización
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
            </a>
            <div class="collapse" style="color:#FFFFFF" id="collapseOrganisacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Liderazgo
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
                </a>
                <div class="collapse" style="color:#FFFFFF" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="Objetivo/index.php">Objetivos</a>
                  </nav>
                </div>
                <a class="nav-link collapsed fw-bold " style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                  Contexto de la Organización
                  <div class="sb-sidenav-collapse-arrow" style="color:#FFFFFF"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
                </a>
                <div class="collapse" style="color:#FFFFFF" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="Pestel/index.php">Pestel</a>
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="Foda/index.php">Foda</a>
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="Partes_Interesadas/index.php">Partes intersadas</a>
                  </nav>
                </div>
                <a class="nav-link fw-bold" style="color:#FFFFFF" href="Comunicacion/index.php">
                  <div class="sb-nav-link-icon" style="color:#FFFFFF"></div>
                  Comunicación
                </a>
              </nav>
            </div>


            <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProceso" aria-expanded="false" aria-controls="collapseProceso">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="bar-chart" style="color:#FFFFFF"></ion-icon></div>
              Proceso
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
            </a>
            <div class="collapse" style="color:#FFFFFF" id="collapseProceso" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Mapeo
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
                </a>
                <div class="collapse" style="color:#FFFFFF" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="Tortuga/index.php">Diagrama de Tortuga</a>
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="SIPOC/index.php">Diagrama SIPOC</a>
                    <a class="nav-link fw-bold" style="color:#FFFFFF" href="General/user.php">Diagrama General</a>
                  </nav>
                </div>
            </div>



            <a class="nav-link fw-bold" style="color:#FFFFFF" href="Riesgos_Oportunidades/index.php">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="shield-half" style="color:#FFFFFF"></ion-icon></div>Riesgos & Oportunidades
            </a>

            <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRecursos" aria-expanded="false" aria-controls="collapseRecursoss">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="cube" style="color:#FFFFFF"></ion-icon></div>
              Recursos
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
            </a>
            <div class="collapse" style="color:#FFFFFF" id="collapseRecursos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link fw-bold" style="color:#FFFFFF" href="CrudPersonal/user.php">Personal</a>
                <a class="nav-link fw-bold" style="color:#FFFFFF" href="Infraestructura/index.php">Infrestuctura</a>
                <a class="nav-link fw-bold" style="color:#FFFFFF" href="Documentada/index.php">Info.Documental</a>
              </nav>
            </div>

            <a class="nav-link fw-bold" style="color:#FFFFFF" href="CrudArchivos/user.php">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="keypad" style="color:#FFFFFF"></ion-icon></div>
              Operación
            </a>

            <a class="nav-link fw-bold" style="color:#FFFFFF" href="Proveedores/index.php">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="people-circle" style="color:#FFFFFF"></ion-icon></div>
              Provedores
            </a>

            <a class="nav-link fw-bold" style="color:#FFFFFF" href="Desempeño/index.php">
              <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="cog" style="color:#FFFFFF"></ion-icon></div>
              Desempeño
            </a>

            <a class="nav-link fw-bold" style="color:#FFFFFF" href="Mejora/index.php">
              <div class="sb-nav-link-icon fw-bold" style="color:#FFFFFF"><ion-icon name="star-half" style="color:#FFFFFF"></ion-icon></div>
              Mejora
            </a>

          </div>
        </div>
        <div class="sb-sidenav-footer fw-bold" style=" background: #008590; color:#FFFFFF">
          <div class="small fw-bold" style="color:#FFFFFF">SECAAC</div>
          Transforma
        </div>
      </nav>

    </div>

    <div id="layoutSidenav_content">
    <main>

                <div class="container is-fluid">
                    <div class="col-xs-12">
                        <center>
                            <h1>Administrador de Empresas</h1>
                        </center><br>
                        <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>  
                  <div>
                    <a class="btn btn-primary" href="../views/Empresas/nuevaempresa.php">Nueva Empresa
                        <i class="fa fa-plus"></i> </a>
                    <a class="btn btn-success" href="../includes/excel.php">Reporte Excel
                        <i class="fa fa-table" aria-hidden="true"></i>
                    </a>
                </div>
                  <?php
                  } else{

                  }
                  ?>
                        <br>
                        </form>



                        <table class="table table-striped  " id="table_id">


                            <thead>
                                <tr>
                                    <th>ID Empresa</th>
                                    <th>Nombre</th>
                                    <th>Logo</th>
                                    <?php
                  include('../../includes/_db.php');
                  $id_empresa = $_SESSION['id_empresa'];
                  if ( $id_empresa == 1) { //admin
                  ?>
                                    <th>Acciones</th>
                  <?php
                  } else{

                  }
                  ?>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                include('../includes/_db.php');
                                $id_empresa = $_SESSION['id_empresa'];

                                if ( $id_empresa == 1) { //admin
                                  $SQL = "SELECT * FROM empresas ";
                                  $dato = mysqli_query($conexion, $SQL);
  
                                  while ($fila = mysqli_fetch_array($dato)) {

                                    ?>
                                            <tr>
                                                <td><?php echo $fila['id_empresa']; ?></td>
                                                <td><?php echo $fila['emp_nombre']; ?></td>
                                             <td>
                                        <img width="100" src="data:<?php echo $fila['tipo']; ?>;base64,<?php echo  base64_encode($fila['logo']); ?>">
    
                                    </td>
    
    
    
                                                <td>
    
    
                                                    <a class="btn btn-warning" href="./Empresas/modificar.php?id=<?php echo $fila['id_empresa'] ?> ">
                                                        <i class="fa fa-edit"></i> </a>
    
                                                    <a class="btn btn-danger" href="./Empresas/eliminar.php?id=<?php echo $fila['id_empresa'] ?>">
                                                        <i class="fa fa-trash"></i></a>
    
                                                </td>
                                            </tr>
    
    
                                        <?php
                                        }
    
                                }else{
                                  $SQLL = "SELECT * FROM empresas where id_empresa='$id_empresa'";
                                  $dato = mysqli_query($conexion, $SQLL);
                                    while ($fila = mysqli_fetch_array($dato)) {

                                ?>
                                        <tr>
                                            <td><?php echo $fila['id_empresa']; ?></td>
                                            <td><?php echo $fila['emp_nombre']; ?></td>

                                         <td>
                                    <img width="100" src="data:<?php echo $fila['tipo']; ?>;base64,<?php echo  base64_encode($fila['logo']); ?>">

                                </td>

                                        </tr>

                                  <?php
  
                                  }
                                }
                                
                                  ?>
  

</body>
</table>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Iconos ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Scrips para el bar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="../js/user.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>

</html>