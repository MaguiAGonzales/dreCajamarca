function modalNewUsu() {

    $('#modalNew').modal('show');
   $('#titulo_lt').text("Crear");
}

function modalEditUsu(id) {

	var url = "getUsuarioById.php";

	$.post( url, { id: id })
		.done(function( data ) {
	   	console.log(data);
	}).error(function(dt){
	  	console.log(dt);
	});
    
    $('#modalNew').modal('show');

    $('#titulo_lt').text("Editar");

}