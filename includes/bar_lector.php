<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3"><ion-icon name="person-circle-outline"></ion-icon> Usuario <?php echo $_SESSION['nombre']; ?></a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          </li>
          <li><a class="dropdown-item" href="../../includes/_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark  " style="background: #008590; 
            	background: linear-gradient( #4c4c4c, #4c4c4c, #4c4c4c );" id="sidenavAccordion">
      <div class="sb-sidenav-menu">

          <div class="nav">
            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Empresa</div>

            <a class="nav-link fw-bold" style="color:#FFFFFF" href="../Interpretaciones/introduccion_2.php">
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
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/Interpretaciones/interpretacion_1.php">Sesion 1</a>
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/Interpretaciones/interpretacion_2.php">Sesion 2</a>
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/Interpretaciones/interpretacion_3.php">Sesion 3</a>
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/Interpretaciones/interpretacion_4.php">Sesion 4</a>
                  </nav>
                </div>            
                
            </div>
            

              <div class="sb-sidenav-menu-heading" style="color:#FFFF">Mapas</div>
            
                  <a class="nav-link collapsed fw-bold" style="color:#FFFFFF"href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisacion" aria-expanded="false" aria-controls="collapseOrganisacion">
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
                                  <a class="nav-link " style="color:#FFFFFF" href="../../views/Objetivo/index_2.php">Objetivos</a>
                              </nav>
                          </div>
                          <a class="nav-link collapsed fw-bold " style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                              Contexto de la organización
                              <div class="sb-sidenav-collapse-arrow" style="color:#FFFFFF"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
                          </a>
                          <div class="collapse" style="color:#FFFFFF" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                              <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" style="color:#FFFFFF" href="../../views/Pestel/index_2.php">Pestel</a>
                                  <a class="nav-link" style="color:#FFFFFF" href="../../views/Foda/index_2.php">Foda</a>
                                  <a class="nav-link" style="color:#FFFFFF" href="../../views/Partes_Interesadas/index_2.php">Partes Interesadas</a>
                              </nav>
                          </div>
                          <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/Comunicacion/index_2.php">
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
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/Tortuga/index_2.php">Diagrama de Tortuga</a>
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/SIPOC/index_2.php">Diagrama SIPOC</a>
                    <a class="nav-link" style="color:#FFFFFF" href="../../views/General/index.php">Diagrama General</a>
                    </nav>
                </div>
                        </div>
          
                 
                  
                  <a class="nav-link fw-bold" style="color:#FFFFFF" href="../Riesgos_Oportunidades/index_2.php">
                      <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="shield-half" style="color:#FFFFFF"></ion-icon></div>Riesgos & Oportunidades
                  </a>

                  <a class="nav-link collapsed fw-bold" style="color:#FFFFFF" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRecursos" aria-expanded="false" aria-controls="collapseRecursoss">
                      <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="cube" style="color:#FFFFFF"></ion-icon></div>
                      Recursos
                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#FFFFFF"></i></div>
                  </a>
                  <div class="collapse" style="color:#FFFFFF" id="collapseRecursos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav">
                          <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/CrudPersonal/index.php">Personal</a>
                          <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/Infraestructura/index_2.php">Infrestuctura</a>
                          <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/Documentada/index_2.php">Info.Documental</a>
                      </nav>
                  </div>

                  <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/CrudArchivos/index.php">
                      <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="keypad" style="color:#FFFFFF"></ion-icon></div>
                  Operación
                  </a>

                  <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/Proveedores/index_2.php">
                      <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="people-circle" style="color:#FFFFFF"></ion-icon></div>
                      Provedores
                  </a>

                  <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/Desempeño/index_2.php">
                      <div class="sb-nav-link-icon" style="color:#FFFFFF"><ion-icon name="cog" style="color:#FFFFFF"></ion-icon></div>
                      Desempeño                            </a>

                  <a class="nav-link fw-bold" style="color:#FFFFFF" href="../../views/Mejora/index_2.php">
                      <div class="sb-nav-link-icon fw-bold" style="color:#FFFFFF"><ion-icon name="star-half" style="color:#FFFFFF"></ion-icon></div>
                      Mejora
                  </a>


          </div>
        </div>
        <div class="sb-sidenav-footer fw-bold" style=" background: #008590; color:#FFFFFF" >
            <div class="small fw-bold" style="color:#FFFFFF" >SECAAC</div>
            Transforma
        </div>
    </nav>
    </div>
