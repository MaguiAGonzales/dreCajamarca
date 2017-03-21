function modalNewCA() {

  $('#modalNew').modal('show');
  $('#titulo_lt').text("Crear");

  $("#id_otros").val('');
  $("#id_otros").attr('readonly',false);
  $("#nombre").val('');

  $('#editar').hide();
  $('#enviar').show();



}

function modalEditCA(id) {

	$('#editar').show();
  $('#enviar').hide();

  var url = "getCamposAdicionalesById.php";

	$.post( url, { id: id })
  	.done(function( data ) {

      var result = jQuery.parseJSON(data);

      $("#id_otros_txt").val(result.id_otros);
      
      $("#nombre").val(result.nombre);

      console.log(result.id_otros);

    }).error(function(dt){
       console.log(dt);
    });

	$('#modalNew').modal('show');

	$('#titulo_lt').text("Editar"); 

}

function EliminarCA(id){

  var url = "EliminarCamposAdicionalesById.php";
  $.post( url, { id: id })
  .done(function(data){

    if(data == 1){

      alert('Se elimino');

      window.location = 'CamposAdicionales.php';

    }else{
      alert('Ocurrio un error al eliminar , comuníquse con el área de sistemas');
    }

    console.log(data);
  });

}