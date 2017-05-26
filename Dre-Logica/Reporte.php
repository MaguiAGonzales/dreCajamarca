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
      <?php include 'LBuscarReportes.php'; ?> 
    </div>

    <!-- ./  filtro -->
     
    <div class="row"> 
      <?php include 'LReportesView.php'; ?> 
    </div>



    </section>



  </div>
  <!-- fin de contenido -->

<?php include('../Dre-Presentacion/template_footer.php') ?>
<?php } ?>