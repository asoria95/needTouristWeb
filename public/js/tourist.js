
function requestSolicitarPaquete(idServicio,idPaquete,idTurista) {
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//alert("Id Servicio: " + idServicio+", IdPaquete: "+idPaquete+", idTurista: "+idTurista);
  $.ajax({
     type:'POST',
     url:'/ajaxRequest',
     data:{_token: CSRF_TOKEN,idServicio:idServicio},
     dataType:'JSON',
     success:function(data){
       //console.log(data);
       datosSolicitarPaqueteModal(data.paquete,idServicio,idTurista);
        //alert(data);
     }
  });
}

function datosSolicitarPaqueteModal(paquete,idServicio,idTurista) {
  var datosdescripcion = "<h2> Paquete Turístico </h2> <div class=\"col-lg-6\"><h5> Descripción:  </h5> <p>"+paquete.descripcion+"</p> </div>";
    var datosPrecio =  "<div class=\"col-lg-6\"><h5> Precio:  </h5><p> "+paquete.price+" </p>  </div>";
    $('#datosAddPaqueteModal').html(datosdescripcion+datosPrecio);
    $('#modalAddPackage').modal();
    $('#addSolicitudPaquete').attr("onclick","solicitarPaquete('"+idTurista+"','"+idServicio+"',event)");
}

function solicitarPaquete(idTurista,idServicio,event) {

  event.preventDefault();
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

  var fecha = $('#fecha').val();
  var numero = $('#cantidad').val();
  $.ajax({
     type:'POST',
     url:'/solicitarPaqueteTurista',
     data:{ _token: CSRF_TOKEN,
            idServicio:idServicio,
            numero:numero,
            fecha:fecha,
            idTurista:idTurista
          },
     dataType:'JSON',
     success:function(data){
       console.log(data);
       //$('#modalAddPackage').hide();
       mensajes(data);
    },
    error: function (xhr, textStatus, errorMessage) {

                console.log("ERROR" + errorMessage + textStatus + xhr);

            }
  });

}

  function mensajes(data) {
    $('#modalAddPackage').modal('hide');
    var html = "<div class=\"alert alert-success alert-dismissable\"><button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button><i class=\"glyphicon glyphicon-ok\"></i>  "+data.message+"</div>";
    if(data.messageType == 'error'){
      html = "<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button><i class=\"glyphicon glyphicon-exclamation-sign\"></i>  "+data.message+"</div>";
    }
    $('#mensajes').html(html);

  }

  function serviciosDeUnTurista(idTurista){
  

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       type:'POST',
       url:'/serviciosDeUnTurista',
       data:{ _token: CSRF_TOKEN,
              idTurista:idTurista
            },
       dataType:'JSON',
       success:function(data){
         console.log(data);

         //alert(data[0].cantidad);
         estilosServiciosTurista(data);
         //$('#modalAddPackage').hide();
      },
      error: function (xhr, textStatus, errorMessage) {

                  console.log("ERROR" + errorMessage + textStatus + xhr);

              }
    });
  }

  function estilosServiciosTurista(servicios){
    var html = "<div class=\"col-md-12\"><h3>Mis Paquetes</h3></div>";

    $.each( servicios, function( key, servicio ) {
      html = html+ "<div class=\"col-md-4\"><div class=\"col-md-12\"><strong>Descripción: </strong>"+servicio.paquete.descripcion+"</div>"
      +"<div class=\"col-md-12\"><strong>Precio: </strong>"+servicio.paquete.price+"</div>"
      //+"<div class=\"col-md-12\"><strong>Itinerario: </strong>"+servicio.paquete.itinerario+"</div>"
      +"<div class=\"col-md-12\"><strong>Fecha: </strong>"+servicio.servicioTurista.fecha+"</div>"
      +"<div class=\"col-md-12\"><strong>Número de Personas: </strong>"+servicio.servicioTurista.cantidad+"</div>"
      +"</div>";
    });
    $('#Paquetes').html(html);
  }
