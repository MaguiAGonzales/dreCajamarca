<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DRE - Cajamarca | Inicio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <script type="text/javascript" src="../Dre-Presentacion/plugins/vue.js"></script>
</head>

<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../Dre-Logica/LugardeTrabajo.php" class="logo">
      <div align="center">
        <img src="../Dre-Presentacion/imagen/login.png" class="logo-lg" height="50"> 
      </div>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
          </li>
          <li>
            <a href="../Dre-Logica/salir.php"><i class="glyphicon glyphicon-log-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Menú -->
    <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MENÚ DE OPCIONES</li>
        <?php
          if ($_COOKIE["tipo"]=='adm') {
        ?>
         <li>
            <a href="../Dre-Logica/UsuarioAdmin.php">
              <i class="glyphicon glyphicon-cog"></i><span>ADMINISTRACION</span>
            </a>
          </li>
        <li>
          <a href="../Dre-Logica/LugardeTrabajo.php">
            <i class="glyphicon glyphicon-home"></i><span>LUGAR DE TRABAJO</span>
          </a>
        </li>
        <?php
          }
        ?>

        <?php if($_COOKIE["tipo"]=='adm' || $_COOKIE["tipo"]=='reg' ){
          //estas opciones son para el adminsitrador y el registrador
          ?>
           
            <li>
              <a href="../Dre-Logica/Usuario.php">
                <i class="glyphicon glyphicon-user"></i><span>USUARIO</span>
              </a>
            </li>
            <li>
              <a href="../Dre-Logica/CamposAdicionales.php">
                <i class="glyphicon glyphicon-check"></i><span>CAMPOS ADICIONALES</span>
              </a>
            </li>
            <li>
              <a href="../Dre-Logica/Boleta.php">
                <i class="glyphicon glyphicon-list-alt" id="b"></i><span>BOLETAS</span>
              </a>
            </li>
            <li>
              <a href="../Dre-Logica/Reporte.php">
                <i class="glyphicon glyphicon-file"></i><span>REPORTE DE BOLETAS</span>
              </a>
            </li>
          <?php
          }?>


        <?php if($_COOKIE["tipo"]=='doc'){  
        //estas opciones es netamente del docente ?>
          <li>
            <a href="../Dre-Logica/Datos.php">
              <i class="glyphicon glyphicon-user"></i><span>PERFIL</span>
            </a>
          </li>
           <li>
            <a href="../Dre-Logica/BoletaUsuario.php">
              <i class="glyphicon glyphicon-list-alt" id="b"></i><span>BOLETAS</span>
            </a>
          </li>
        <?php }?>

      </ul>
    </section>
  </aside>