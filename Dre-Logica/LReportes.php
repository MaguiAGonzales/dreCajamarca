<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title">Reportes</h3>
        </div>
        
        <form  id="agregar_lugar_trabajo"  method="post" >
            <div class="box-body">
            	
                <input type="hidden" name="buscar" value="buscar">

                <div class="row">
                    <div class="col-sm-2">
                        <input class="form-control" type="text" name="filtroDescripcion">
                    </div>
                    <div class="col-sm-1">
                        <button class="btn btn-success" >Buscar</button>
                    </div>
                    <div class="col-sm-2">
                       <select id="id_tipo" name="id_tipo_slc" class="form-control" required>
                            <option value="">Año</option>
                            <!--
                            <?php include("SeleccionarTipoUsuario.php");?>
                            -->
                        </select>
                    </div>
                    <div class="col-sm-2">
                       <select id="id_tipo" name="id_tipo_slc" class="form-control" required>
                            <option value="">Mes</option>
                            <!--
                            <?php include("SeleccionarTipoUsuario.php");?>
                            -->
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <button class="btn btn-success" >Generar</button>
                    </div>

                </div>
        </form>
  	</div>
</div>
