  var app = new Vue({
    el: '#content',
    data: {
      message: 'Hello Vue!'
    },
    methods: {

      traerPersona: function () {

       
        // body...
        var dni = $("#filDNI").val();
        var url = 'getUsuarioById.php';

        $.post( url, { id: dni })
        .done(function( data ) {
         

          if(data.length<5){

            var result = jQuery.parseJSON(data);

            var nomb_completo = result.nomb_usu + ' '+result.ap_pusu+' '+result.ap_musu;

            $("#nomb_completo").val(nomb_completo);
             
          }else{
            $("#nomb_completo").val('No se encuentra el valor deseado');

          }

          
         
          console.log(result);

        })
        .error(function(dt){
           console.log(dt);
          });
          
       },
       loadFecha: function(){

        $('#fecha').datepicker();
       }


    }
  })
