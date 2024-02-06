<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="index.php" id="dashboard">
                <i class='bi bi-columns-gap bx-sm'></i>
                <span>Inicio</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" id='moduloIAA' data-bs-target="#moduloIAA-nav" data-bs-toggle="collapse" href="#">
                <i class='bi bi-archive bx-sm'></i></i>
                <span>Módulo IAA</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="moduloIAA-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('actividad_paso_1/create') }}" id="nuevaActividad">
                        <i class="bi bi-circle"></i><span>Nueva Actividad</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('actividad') }}" id='misActividades'>
                        <i class="bi bi-circle"></i><span>Mis Actividades</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" id="moduloBAA" data-bs-target="#moduloBAA-nav" data-bs-toggle="collapse"
               href="modulo-baa.php">
                <i class='bi bi-archive bx-sm'></i>
                <span>Módulo BAA</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="moduloBAA-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url("catalogo") }}" id="consultarActividad">
                        <i class="bi bi-circle"></i><span>Consultar Actividad</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Profile Page Nav -->
    </ul>
</aside><!-- End Sidebar-->
