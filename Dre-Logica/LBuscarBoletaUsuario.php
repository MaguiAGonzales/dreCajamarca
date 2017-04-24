<div class="col-md-12">
    <div class="box box-danger">
        <div class="box-header with-border">
	        <h3 class="box-title">Buscar Boleta</h3>
        </div>
        
        <form  id="agregar_lugar_trabajo"  method="post" >
            <div class="box-body">
            	
                <input type="hidden" name="buscar" value="buscar">

                <div class="row">
                    
                    <div class="col-sm-2">
                       <select id="id_mes" name="id_mes_slc" class="form-control" required>
                            <option value="">Mes</option>
                            <?php include("SeleccionarTipoUsuario.php");?>
                        </select>
                    </div>

                    <div class="col-sm-2">
                       <select id="id_anio" name="id_anio_slc" class="form-control" required>
                            <option value="">Anio</option>
                            <?php include("SeleccionarTipoUsuario.php");?>
                        </select>
                    </div>

                    <div class="col-sm-1">
                        <button class="btn btn-success" >Buscar</button>
                    </div>
                </div>
        </form>
  	</div>
</div>