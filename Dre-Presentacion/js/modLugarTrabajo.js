function modalNewLT() {

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Crear");

    $("#id_lugar_usu").val('');
    $("#id_lugar_usu").attr('readonly',false);
    
    $("#lugar_usu").attr('readonly',false);
	$("#lugar_usu").val('');

    $('#editar').hide();
    $('#enviar').show();
}

function modalDetailsLT(id){

	$('#editar').hide();
    $('#enviar').hide();

		var url = "getLugarTrabajadorById.php";

		$.post( url, { id: id })
	  .done(function( data ) {
	    

	  	var result = jQuery.parseJSON(data);

	  	$("#id_lugar_usu").val(result.id_lugar_usu);
	  	$("#id_lugar_usu").attr('readonly',true);
	  	
	  	$("#lugar_usu").val(result.lugar_usu);
	  	$("#lugar_usu").attr('readonly',true);

	  	console.log(result.id_lugar_usu);

	  }).error(function(dt){
	  	 console.log(dt);
	  });

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Datos del");
}

function modalEditLT(id) {

		$('#editar').show();
        $('#enviar').hide();
        $("#lugar_usu").attr('readonly',false);

		var url = "getLugarTrabajadorById.php";

		$.post( url, { id: id })
	  .done(function( data ) {
	    

	  	var result = jQuery.parseJSON(data);

	  	$("#id_lugar_usu").val(result.id_lugar_usu);
	  	$("#id_lugar_usu").attr('readonly',true);
	  	
	  	$("#lugar_usu").val(result.lugar_usu);

	  	console.log(result.id_lugar_usu);

	  }).error(function(dt){
	  	 console.log(dt);
	  });
    $('#modalNew').modal('show');

    $('#titulo_lt').text("Editar");

}

function EliminarLT(id){

	var url = "EliminarLugarTrabajadorById.php";
	$.post( url, { id: id })
	.done(function(data){

		if(data == 1){

			alert('Se elimino');

			window.location = 'LugardeTrabajo.php';

		}else{
			alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
		}

		console.log(data);
	});

}

