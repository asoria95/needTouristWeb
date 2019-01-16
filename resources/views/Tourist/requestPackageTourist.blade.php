@include('layouts.head')

<title>Seccion de turistas </title>

@include('layouts.css')

<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

 @include('layouts.banner')

 @include('Tourist.partials.menuTourist')
<div id="page-wrapper">



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">
                Sección Turistas
                <small>Listado de Paquetes Turisticos</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('tourist.index')}}">Turistas</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Listado de Paquetes Turisticos
                </li>
            </ol>

    </div>

    <div class="row">
      <div class="col-md-6">
          <a class="btn btn-primary btn-lg" href="{{route('tourist.create')}}" ><span class="glyphicon glyphicon-plus-sign"></span> Añadir Usuario</a>
      </div>
      <hr>
    </div>
    <!-- /.row -->
    @if(Session::has('message'))

        <div class="alert alert-success">
          <strong>{{Session::get('message')}}</strong>
        </div>

    @endif

    <div class="row" id="mensajes" >

    </div>


    <div class="row">
        <div class="col-lg-12">
            <h2>Listado de Paquetes Turisticos a contratar</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>Descripción</th>
                          <th>Itinerario</th>
                          <th>Precio</th>
                          <th>Solicitar</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @forelse ($services as $service)

                        @if($service->estado == "No asignado")
                          <td>{{$service->package->descripcion}}</td>
                          <td> <a href="{{route('packageTourist.downloadItinerary',$service->package)}}"> {{$service->package->itinerario}} </a></td>
                          <td>{{$service->package->price}}</td>
                          <td>

                            <!--<a  href="#modalAddPackage" class="btn btn-success btn-xs" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>-->
                            <?php $service->package->descripcion;
                            echo ("<a  href=\"#\" id=\"\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\"
                            onclick=\"requestSolicitarPaquete('".$service->id_servicio."','".$service->package->id_paquete."','".$tourist->id_turista."')\" ><span class=\"glyphicon glyphicon-pencil\"></span></a>");
                            ?>


                          </td>
                        @endif

                     </tr>
                         @empty
                           <p>No existen Registros</p>
                         @endforelse

                    </tbody>
                </table>

                  {{ $services->links() }}
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
  </div>
<!-- /#wrapper -->

<div class="modal" id="modalAddPackage">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" name="button" data-dismiss="modal" aria-hiden="true">&times; </button>
        <h3 class="modal-title">Solicitar paquete turístico</h3>
      </div>

      <div class="modal-body">

         <div class="row" id="datosAddPaqueteModal">

         </div>
         <hr>
         <div class="row">

             <form method="POST" action=""  role="form">
                 {{ csrf_field() }}
                 <div class="col-md-12">
                 <!-- Fecha -->
                   <div class="form-group">

                     <div class="col-md-6">
                       <label>Fecha </label>
                       <input type="date" class="form-control" name="fecha" id="fecha"  placeholder="">
                     </div>

                 <!-- Email -->
                      <div class="col-md-6">
                       <label>Cantidad </label>
                       <input type="number" class="form-control" name="cantidad" id="cantidad"  placeholder="3">
                    </div>
                   </div>
               </form>
           </div>
         </div>
      </div>

      <div class="modal-footer">
        <button type="submit" id="addSolicitudPaquete" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-info" name="button" data-dismiss="modal"> Cerrar </button>
      </div>

    </div>
  </div>
</div>
@include('layouts.partials.finalTourist')
