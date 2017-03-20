function modalNewUsu() {

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Crear");

    $("#dni_usuario").val('');
  	$("#dni_usuario").prop('disabled', false);

  	$("#nomb_usu").val('');

  	$("#ap_pusu").val('');

  	$("#ap_musu").val('');

  	$("#fech_nac").val('');

  	$("#direc_usu").val('');

  	$("#telef_usu").val('');

  	$("#e_mail").val('');

  	$("#id_tipo_usu").val('');

  	$("#id_lugar_usu").val('')

    $('#editar').hide();
    $('#enviar').show();
}

function modalEditUsu(id) {

	$('#editar').show();
    $('#enviar').hide();

	var url = "getUsuarioById.php";

	$.post( url, { id: id })
		.done(function( data ) {

		var result = jQuery.parseJSON(data);

	  	$("#dni_usuario").val(result.dni_usuario);
	  	$("#dni_usuario").prop('disabled', true);

	  	$("#nomb_usu").val(result.nomb_usu);
	  	$("#nomb_usu").prop('disabled', true);

	  	$("#ap_pusu").val(result.ap_pusu);
	  	$("#ap_pusu").prop('disabled', true);

	  	$("#ap_musu").val(result.ap_musu);
	  	$("#ap_musu").prop('disabled', true);

	  	$("#fech_nac").val(result.fech_nac);
	  	$("#fech_nac").prop('disabled', true);

	  	$("#direc_usu").val(result.direc_usu);

	  	$("#telef_usu").val(result.telef_usu);

	  	$("#e_mail").val(result.e_mail);

	  	$("#id_tipo_usu").val(result.id_tipo_usu);

	  	$("#id_lugar_usu").val(result.id_lugar_usu);
	  	$("#id_lugar_usu").prop('disabled', true);

	  	console.log(result.dni_usuario);

	}).error(function(dt){
	  	console.log(dt);
	});
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Editar");

}

function EliminarUsu(id){

	var url = "EliminarUsuarioById.php";
	$.post( url, { id: id })
	.done(function(data){

		if(data == 1){

			alert('Se elimino');

			window.location = 'Usuario.php';

		}else{
			alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
		}

		console.log(data);
	});