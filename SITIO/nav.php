<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Menu de SISTEMAS -->
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" onclick="javascript:<?php echo $misDatos;?>document.getElementById('frm').action='usuarios.php';document.getElementById('frm').submit();" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>
            Usuarios
            <span class="float-right text-muted text-sm">&nbsp;</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>
            Catalogos
            <span class="float-right text-muted text-sm">&nbsp;</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="javascript:DelHistory();">
            <i class="fas fa-file mr-2"></i>
            Salir
            <span class="float-right text-muted text-sm">&nbsp;</span>
          </a>
        </div>
      </li>

    </ul>
  </nav>