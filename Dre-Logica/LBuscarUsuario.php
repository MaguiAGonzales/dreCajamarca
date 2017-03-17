<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title">Buscar Usuario</h3>
        </div>
        
        <form  id="agregar_usuario"  method="post" >
            <div class="box-body">
            	
                <input type="hidden" name="buscar" value="buscar">

                <div class="row">
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="filtroDescripcion">
                    </div>
                    <div class="col-sm-1">
                        <button class="btn btn-success" >Buscar</button>
                    </div>
                     <div class="col-sm-1">
                        <a class="btn btn-primary" onclick="modalNewUsu()" > Nuevo </a>
                    </div>

                </div>
        </form>
  	</div>
</div>



<div class="modal fade" tabindex="-1" role="dialog" id="modalNew">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
        <div class="row">
          <?php include 'LCrearUsuario.php'; ?>
        </div>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
