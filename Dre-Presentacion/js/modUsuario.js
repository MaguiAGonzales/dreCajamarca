function modalNewUsu() {

    $('#modalNew').modal('show');
    $('#titulo_lt').text("Crear");

    $("#dni_usuario").val('');
  	$("#dni_usuario").attr('readonly',false);

  	$("#nomb_usu").val('');
  	$("#nomb_usu").attr('readonly',false);

  	$("#ap_pusu").val('');
  	$("#ap_pusu").attr('readonly',false);

  	$("#ap_musu").val('');
  	$("#ap_musu").attr('readonly',false);

  	$("#fech_nac").val('');
  	$("#fech_nac").attr('readonly',false);

  	$("#direc_usu").val('');

  	$("#telef_usu").val('');

  	$("#e_mail").val('');

  	$("#id_tipo").val('');
  	$("#id_tipo").attr('disabled', false);


  	$("#id_lugar").val('')

    $('#editar').hide();
    $('#enviar').show();
    $('#input_contrasenia').hide();
}

function modalEditUsu(id) {

	$('#editar').show();
    $('#enviar').hide();
    $('#input_contrasenia').show();

	var url = "getUsuarioById.php";

	$.post( url, { id: id })
		.done(function( data ) {

		var result = jQuery.parseJSON(data);

	  	$("#dni_usuario").val(result.dni_usuario);
	  	$("#dni_usuario").attr('readonly',true);

	  	$("#nomb_usu").val(result.nomb_usu);
	  	$("#nomb_usu").attr('readonly',true);

	  	$("#ap_pusu").val(result.ap_pusu);
	  	$("#ap_pusu").attr('readonly',true);

	  	$("#ap_musu").val(result.ap_musu);
	  	$("#ap_musu").attr('readonly',true);

	  	$("#fech_nac").val(result.fech_nac);
	  	$("#fech_nac").attr('readonly',true);

	  	$("#direc_usu").val(result.direc_usu);

	  	$("#tel_usu").val(result.telef_usu);

	  	$("#e_mail").val(result.e_mail);

	  	$("#id_tipo").val(result.id_tipo);
	  	$("#id_tipo").attr('disabled', 'disabled');

	  	$("#id_lugar").val(result.id_lugar_usu);

	  	console.log(result);

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
}