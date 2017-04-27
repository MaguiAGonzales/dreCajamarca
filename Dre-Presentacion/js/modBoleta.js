  var app = new Vue({
    el: '#content',
    data: {
      message: 'Hello Vue!',
      adicionales: []
    },
    methods: {

      traerPersona: function () {
        var dni = $("#filDNI").val();
        var url = 'getUsuarioById.php';

        $.post( url, { id: dni })
        .done(function( data ) {

          if(data.length>1){

            var result = jQuery.parseJSON(data);

            var nomb_completo = result.nomb_usu + ' '+result.ap_pusu+' '+result.ap_musu;

            $("#nomb_completo").val(nomb_completo);
             
          }else{
            $("#nomb_completo").val('No se encuentra el valor deseado');

          }
         
        })
        .error(function(dt){
           console.log(dt);
          });
          
       },

       loadFecha: function(){

        $('#fecha').datepicker({
           format: 'dd/mm/yyyy'
        });
       },

       addAdicional : function(){

          var adicional = {
            id:$("#id_otros").val(),
            descripcion:$("#id_otros option:selected").text(),
            monto:$('#monto').val()
          }

          var adicionales = this.adicionales;
          adicionales.push(adicional);
          this.calcularTotal();

       },
       sendData : function (){        
          var url = 'saveBoleta.php';

          var fecha = $("#fecha").val();
          fecha = fecha.split('/');
          fecha = fecha[2]+'-'+fecha[1]+'-'+fecha[0];
          var detalle = this.adicionales;

          $.post( url, { 
            
            dni: $("#filDNI").val(),
            numBoleta: $("#numeroBo").val(),
            fecha: fecha,
            rembasi: $("#rem_bas").val(),
            bonpers: $("#bon_per").val(),
            dl25671: $("#d_l_25671").val(),
            rthomol: $("#r_t_homol").val(),
            bdif: $("#f_dif_z_r").val(),
            bonfamiliar: $("#bon_familiar").val(),
            brefmov: $("#b_ref_mov").val(),
            ds021: $("#dse_021").val(),
            contrato: $("#contrato").val(),
            cvcontra: $("#c_v_contra").val(),
            ds077: $("#ds_077").val(),
            aguinaldo: $("#aguinaldo").val(),
            bcpespec: $("#bcp_espec").val(),
            reunificada: $("#reunificada").val(),
            igv: $("#igv").val(),
            ctserv: $("#c_t_serv").val(),
            sepelioluto: $("#sepelio_luto").val(),
            ds081: $("#ds_081").val(),
            gtserv: $("#g_t_serv").val(),
            propinas: $("#propinas").val(),
            pmag: $("#pmag_art18").val(),
            du090: $("#d_u_090_96").val(),
            du80: $("#d_u_80_94").val(),
            rein: $("#rein_0_rem").val(),
            dl20530: $("#d_l_20530").val(),
            dl19990: $("#d_l_19990").val(),
            presalud: $("#pre_salud").val(),
            ipssvida: $("#ipss_vida").val(),
            derrama: $("#derrama").val(),
            judiciales: $("#judiciales").val(),
            scafae: $("#s_cafae").val(),
            responsab: $("#responsabilidad").val(),
            sesdis: $("#sesdis").val(),
            edSevilla: $("#ed_sevilla").val(),
            cimpi: $("#cimpi").val(),
            pefalla: $("#pe_p_falla").val(),
            intertrab: $("#inter_trab").val(),
            straadmin: $("#s_tra_adm").val(),
            funeraria: $("#funeraria").val(),
            adfon: $("#ad_fo_pen").val(),
            sutep: $("#sutep").val(),
            licsg: $("#lic_sg_rem").val(),
            dsctvar: $("#dsct_var").val(),

            total: $("#total").val(),

            detalle:detalle

          })
          .done(function( data ) {

            console.log(data.trim());

            if(data.trim()=='correcto'){

              alert('Boleta Registrada Correctamente');
              window.location="../Dre-Logica/Boleta.php";
            }else{
              alert('A ocurrido un problema , comuníquese con el área de sistemas');
            }

          })
          .error(function(dt){
             console.log(dt);
            });
       },

       calcularTotal: function () {

            var rembasi   =Number($("#rem_bas").val());
            var bonpers   =Number($("#bon_per").val());
            var dl25671   =Number($("#d_l_25671").val());
            var rthomol   =Number($("#r_t_homol").val());
            var bdif      =Number($("#f_dif_z_r").val());
            var bonfamiliar = Number($("#bon_familiar").val());
            var brefmov   = Number($("#b_ref_mov").val());
            var ds021     = Number($("#dse_021").val());
            var contrato  = Number($("#contrato").val());
            var cvcontra  = Number($("#c_v_contra").val());
            var ds077     = Number($("#ds_077").val());
            var aguinaldo = Number($("#aguinaldo").val());
            var bcpespec  = Number($("#bcp_espec").val());
            var reunificada = Number($("#reunificada").val());
            var igv       = Number($("#igv").val());
            var ctserv    = Number($("#c_t_serv").val());
            var sepelioluto  = Number($("#sepelio_luto").val());
            var ds081     = Number($("#ds_081").val());
            var gtserv    = Number($("#g_t_serv").val());
            var propinas  = Number($("#propinas").val());
            var pmag      = Number($("#pmag_art18").val());
            var du090     = Number($("#d_u_090_96").val());
            var du80      = Number($("#d_u_80_94").val());
            var rein      = Number($("#rein_0_rem").val());
            var dl20530   = Number($("#d_l_20530").val());
            var dl19990   = Number($("#d_l_19990").val());
            var presalud  = Number($("#pre_salud").val());
            var ipssvida  = Number($("#ipss_vida").val());
            var derrama   = Number($("#derrama").val())
            var judiciales= Number($("#judiciales").val());
            var scafae    = Number($("#s_cafae").val());
            var responsab = Number($("#responsabilidad").val());
            var sesdis    = Number($("#sesdis").val());
            var edSevilla = Number($("#ed_sevilla").val());
            var cimpi     = Number($("#cimpi").val());
            var pefalla   = Number($("#pe_p_falla").val());
            var intertrab = Number($("#inter_trab").val());
            var straadmin = Number($("#s_tra_adm").val());
            var funeraria = Number($("#funeraria").val());
            var adfon     = Number($("#ad_fo_pen").val());
            var sutep     = Number($("#sutep").val());
            var licsg     = Number($("#lic_sg_rem").val());
            var dsctvar   = Number($("#dsct_var").val());

            var resultado = rembasi + bonpers + dl25671 + rthomol + bdif + bonfamiliar + brefmov + ds021 + contrato + cvcontra + ds077 + 
            aguinaldo + bcpespec + reunificada + igv + ctserv + sepelioluto + ds081 + gtserv + propinas + pmag + du090 + du80 + rein + 
            dl20530 + dl19990 + presalud + ipssvida + derrama + judiciales+ scafae + responsab + sesdis + edSevilla + cimpi + pefalla + 
            intertrab + straadmin + funeraria + adfon + sutep + licsg + dsctvar;

           
            this.adicionales.forEach(function(item,index){

              resultado += Number(item.monto);

            });
 
            $("#total").val(resultado);
            
       },

       signos: function (elemento,signo) {
         

         var valor = Math.abs($('#'+elemento).val());

         if (signo=='-') {

            valor *= -1; 

         }

         $('#'+elemento).val(valor);

         this.calcularTotal();

        
       }
    }
  })
