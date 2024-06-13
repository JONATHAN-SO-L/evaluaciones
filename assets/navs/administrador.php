<link rel="stylesheet" href="../../css/navbar_estandar.css">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <img src="../../assets/img/veco_logo_blanco.png" alt="Logo VECO">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link fw-bold"><i class="bi bi-house-gear"></i> Panel de Administración</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="index.php"><i class="bi bi-house-door-fill"></i> Inicio</a></li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-info-circle-fill"></i> Información complementaria</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../../config/permissions/add/alta_area.php"><i class="bi bi-building-add"></i> Alta de Áreas</a></li>
        <li><a class="dropdown-item" href="../../config/permissions/add/alta_puestos.php"><i class="bi bi-person-vcard"></i> Alta de Puestos</a></li>
        <li><a class="dropdown-item" href="../../config/permissions/view/areas.php"><i class="bi bi-building-fill-gear"></i> Listado de Áreas</a></li>
        <li><a class="dropdown-item" href="../../config/permissions/view/puestos.php"><i class="bi bi-diagram-3-fill"></i> Listado de de Puestos</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Gestión de Usuario</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="alta_usuarios.php"><i class="bi bi-person-plus"></i> Nuevo Usuario</a></li>
        <li><a class="dropdown-item" href="usuarios.php"><i class="bi bi-person-lines-fill"></i> Lista de Usuarios</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-clipboard-check"></i> Aprobaciones</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../../config/permissions/view/metas_colab.php"><i class="bi bi-person-check-fill"></i> Objetivos SMART Colaboradores</a></li>
        <li><a class="dropdown-item" href="../../config/permissions/view/objetivos_nextyear.php"><i class="bi bi-person-check"></i> Objetivos año siguiente colaboradores</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-journal-text"></i> Evaluaciones</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill-check"></i> Colaboradores</a></li>
        <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill-gear"></i> Jefes Inmediatos</a></li>
        </ul>
        </li>
        
        <li class="nav-item"><a class="nav-link fw-bold text-danger" href="#"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</a></li>

        </ul>
    </div>
  </div>
</nav>