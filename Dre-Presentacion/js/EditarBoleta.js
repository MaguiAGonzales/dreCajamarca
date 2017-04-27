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
        this.calcularTotal()
       },

      sendData : function (){        
        var url = 'saveEditBoleta.php';
        var id = $("#id").val();
        var detalle = this.adicionales;

        $.post( url, {

          id: $("#id").val(),  

          numBoleta: $("#numeroBo").val(),
          fecha: $("#fecha").val(),

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

      deleteAdicional:function (index){


          //alert(index);
          //array.splice(1,1);
          var res = confirm('Está seguro que desea eliminar este elemento');
          if(res){
            this.adicionales.splice(index,1);
            this.calcularTotal();

          }else{
              
          }

      },

    },
      
    mounted:function () {

      var ruta = "getBoletaById.php";
      var id = $("#id").val();
      var v = this;

      $.post( ruta, { id: id })
      .done(function( data ) {

        var result = jQuery.parseJSON(data);

        result.detalles.forEach(function(item,index){
          v.adicionales.push(item);
        });

        // parte superior

        $("#filDNI").val(result.dni_usuario);
        $("#nomb_completo").val(result.nomb_usu);
        $("#fecha").val(result.fecha);
        $("#numeroBo").val(result.numeroBo);

        //datos de la boleta

        $("#rem_bas").val(result.rem_bas);
        $("#r_t_homol").val(result.r_t_homol);
        $("#b_ref_mov").val(result.b_ref_mov);
        $("#c_v_contra").val(result.c_v_contra);
        $("#bcp_espec").val(result.bcp_espec);
        $("#c_t_serv").val(result.c_t_serv);
        $("#g_t_serv").val(result.g_t_serv);
        $("#d_u_090_96").val(result.d_u_090_96);
        $("#d_l_20530").val(result.d_l_20530);
        $("#pre_salud").val(result.pre_salud);
        $("#judiciales").val(result.judiciales);
        $("#sesdis").val(result.sesdis);

        $("#cimpi").val(result.cimpi);
        $("#s_tra_adm").val(result.s_tra_adm);
        $("#sutep").val(result.sutep);
        $("#bon_per").val(result.bon_per);
        $("#f_dif_z_r").val(result.f_dif_z_r);
        $("#dse_021").val(result.dse_021);
        $("#ds_077").val(result.ds_077);
        $("#reunificada").val(result.reunificada);
        $("#propinas").val(result.propinas);
        $("#d_u_80_94").val(result.d_u_80_94);
        $("#d_l_19990").val(result.d_l_19990);
        $("#derrama").val(result.derrama);

        $("#responsabilidad").val(result.responsabilidad);
        $("#inter_trab").val(result.inter_trab);
        $("#ad_fo_pen").val(result.ad_fo_pen);
        $("#dsct_var").val(result.dsct_var);
        $("#d_l_25671").val(result.d_l_25671);
        $("#bon_familiar").val(result.bon_familiar);
        $("#igv").val(result.igv);
        $("#contrato").val(result.contrato);
        $("#aguinaldo").val(result.aguinaldo);
        $("#sepelio_luto").val(result.sepelio_luto);
        $("#ds_081").val(result.ds_081);
        $("#pmag_art18").val(result.pmag_art18);

        $("#rein_0_rem").val(result.rein_o_rem);
        $("#ipss_vida").val(result.ipss_vida);
        $("#s_cafae").val(result.s_cafae);
        $("#ed_sevilla").val(result.ed_sevilla);
        $("#pe_p_falla").val(result.pe_p_falla);
        $("#funeraria").val(result.funeraria);
        $("#lic_sg_rem").val(result.lic_sg_rem);

        $("#total").val(result.total);

        v.calcularTotal();
        v.traerPersona();

      })
      .fail(function(data){
        console.log(data);
      });
    },
    signos: function (elemento,signo) {
         

         var valor = Math.abs($('#'+elemento).val());

         if (signo=='-') {

            valor *= -1; 

         }

         $('#'+elemento).val(valor);

         this.calcularTotal();

        
       }


})