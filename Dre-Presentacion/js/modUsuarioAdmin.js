function modalNewUsuAdmin() {

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
  	$("#direc_usu").attr('readonly',false);

  	$("#telef_usu").val('');
  	$("#telef_usu").attr('readonly',false);

  	$("#e_mail").val('');
  	$("#e_mail").attr('readonly',false);

  	$("#id_tipo").val('');
  	$("#id_tipo").attr('disabled', false);

  	$("#id_lugar").val('')
  	$("#id_lugar").attr('disabled',false);

    $('#editar').hide();
    $('#enviar').show();

    $('#input_contrasenia').hide();
}

function modalDetailsLTAdmin(id){

	$('#editar').hide();
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
	  	$("#direc_usu").attr('readonly',true);

	  	$("#telef_usu").val(result.telef_usu);
	  	$("#telef_usu").attr('readonly',true);

	  	$("#e_mail").val(result.e_mail);
	  	$("#e_mail").attr('readonly',true);

	  	$("#pass_usu").val(result.pass_usu);
	  	$("#pass_usu").attr('readonly',true);

	  	$("#id_tipo").val(result.id_tipo_usu);
	  	$("#id_tipo").attr('disabled', 'disabled');

	  	$("#id_lugar").val(result.id_lugar_usu);
	  	$("#id_lugar").attr('disabled', 'disabled');

	  	console.log(result);

	}).error(function(dt){
	  	console.log(dt);
	});
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Datos del");
}

function modalEditUsuAdmin(id) {

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
  		$("#direc_usu").attr('readonly',false);


	  	$("#telef_usu").val(result.telef_usu);
  		$("#telef_usu").attr('readonly',false);

	  	$("#e_mail").val(result.e_mail);
  		$("#e_mail").attr('readonly',false);

  		$("#pass_usu").val(result.pass_usu);
	  	$("#pass_usu").attr('readonly',false);

	  	$("#id_tipo").val(result.id_tipo_usu);
	  	$("#id_tipo").attr('disabled', 'false');

	  	$("#id_lugar").val(result.id_lugar_usu);
	  	$("#id_lugar").attr('disabled', false);

	  	console.log(result);

	}).error(function(dt){
	  	console.log(dt);
	});
    
    $('#modalNew').modal('show');
    $('#titulo_lt').text("Editar");

}

function EliminarUsuAdmin(id){

	var url = "EliminarUsuarioById.php";
	$.post( url, { id: id })
	.done(function(data){

		if(data == 1){

			alert('Se elimino');

			window.location = 'UsuarioAdmin.php';

		}else{
			alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
		}

		console.log(data);
	});
}