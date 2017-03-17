<?php include('../Dre-Presentacion/template_cabecera.php') ?>

  <!--contenido va aqui -->
  <div class="content-wrapper">
    <section class="content">  

    <!-- Filtro  -->

    <div class="row"> 
      <?php include 'LBuscarUsuario.php'; ?> 
    </div>

    <!-- ./  filtro -->

    <!-- tabla   -->

    <div class="row" >
      <?php  include('LMostrarUsuario.php'); ?>
    </div>

    <!-- ./  tabla -->

     
    </section>
  </div>
  <!-- fin de contenido -->


  <?php
    $script_module='modUsuario.js';
   ?>

<?php include('../Dre-Presentacion/template_footer.php') ?>