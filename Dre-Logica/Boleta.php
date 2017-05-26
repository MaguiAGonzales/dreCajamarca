<?php
session_start();
if ((!isset($_SESSION["administrador"])) && (!isset($_SESSION["registrador"]))){
  header("location:salir.php");
}else{
?>
<?php include('../Dre-Presentacion/template_cabecera.php') ?>

  <!--contenido va aqui -->
  <div class="content-wrapper">
    <section class="content">  

    <!-- Filtro  -->

    <div class="row"> 
      <?php include 'LBuscarBoleta.php'; ?> 
    </div>

    <!-- ./  filtro -->

    <!-- tabla   -->

    <div class="row" >
      <?php  include 'LMostrarBoleta.php'; ?>
    </div>

    <!-- ./  tabla -->

     
    </section>
  </div>
  <!-- fin de contenido -->


  <?php
    $script_module='modBoleta.js';
   ?>

<?php include('../Dre-Presentacion/template_footer.php') ?>
<?php } ?>