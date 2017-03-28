  var app = new Vue({
    el: '#content',
    data: {
      message: 'Hello Vue!',
      adicionales: []
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
       },

       addAdicional : function(){

          var adicional = {
            descripcion:$("#id_otros option:selected").text(),
            monto:$('#monto').val()
          }

          var adicionales = this.adicionales;
          adicionales.push(adicional);

       },
       sendData : function (){

          var url = 'getUsuarioById.php';

          $.post( url, { 
            
            dni: $("dni_usuario").val();
            numBoleta: $("#id_boleta").val();


            fecha: $("fecha").val();
            rembasi: $("rem_bas").val();
            bonpers: $("bon_per").val();
            dl25671: $("d_l_25671").val();
            rthomol: $("r_t_homol").val();
            bdif: $("f_dif_z_r").val();
            bonfamiliar: $("bon_familiar").val();
            brefmov: $("b_ref_mov").val();
            ds021: $("dse_021").val();
            contrato: $("contrato").val();
            cvcontra: $("c_v_contra").val();
            ds077: $("ds_077").val();
            aguinaldo: $("aguinaldo").val();
            bcpespec: $("bcp_espec").val();
            reunificada: $("reunificada").val();
            igv: $("igv").val();
            ctserv: $("c_t_serv").val();
            sepelioluto: $("sepelio_luto").val();
            ds081: $("ds_081").val();
            gtserv: $("g_t_serv").val();
            propinas: $("propinas").val();
            pmag: $("pmag_art18").val();
            du090: $("d_u_090_96").val();
            du80: $("d_u_80_94").val();
            rein: $("rein_0_rem").val();
            dl20530: $("d_l_20530").val();
            dl19990: $("d_l_19990").val();
            presalud: $("pre_salud").val();
            ipssvida: $("ipss_vida").val();
            derrama: $("derrama").val();
            judiciales: $("judiciales").val();
            scafae: $("s_cafae").val();
            responsab: $("responsabilidad").val();
            sesdis: $("sesdis").val();
            edSevilla: $("ed_sevilla").val();
            cimpi: $("cimpi").val();
            pefalla: $("pe_p_falla").val();
            $intertrab: $("inter_trab").val();
            $straadmin: $("s_tra_adm").val();
            $funeraria: $("funeraria").val();
            $adfon: $("ad_fo_pen").val();
            $sutep: $("sutep").val();
            $licsg: $("lic_sg_rem").val();
            $dsctvar: $("dsct_var").val();
          })
          .done(function( data ) {

            console.log(result);

          })
          .error(function(dt){
             console.log(dt);
            });


       }



    }
  })
