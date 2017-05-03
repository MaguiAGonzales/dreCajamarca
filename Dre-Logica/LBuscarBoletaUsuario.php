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
                       <select id="id_mes" name="mes" class="form-control" required>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">marzo</option>
                            <option value="Abril">abril</option>
                            <option value="Mayo">mayo</option>
                            <option value="Junio">junio</option>
                            <option value="Julio">julio</option>
                            <option value="Agossto">agosto</option>
                            <option value="Septiembre">septiembre</option>
                            <option value="Octubre">octubre</option>
                            <option value="Noviembre">noviembre</option>
                            <option value="Diciembre">diciembre</option>
                            
                        </select>
                    </div>

                    <div class="col-sm-2">
                       <select id="id_anio" name="anio" class="form-control" required>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>

                    <div class="col-sm-1">
                        <button class="btn btn-success" >Buscar</button>
                    </div>
                </div>
        </form>
  	</div>
</div>