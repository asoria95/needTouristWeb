@extends('layouts.master')
@section('content')
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

 @include('layouts.banner')

 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

 <div class="collapse navbar-collapse navbar-ex1-collapse">
     <ul class="nav navbar-nav side-nav">
       <!-- Menu tourist Section -->
       <li>
           <a href="{{route('tourist.index')}}"><i class="fa fa-fw fa-users"></i> Sección Usuarios</a>
       </li>
       <!-- Menu afilliate Section -->
       <li>
           <a href="{{route('afilliate.index')}}"><i class="fas fa-user-tie"></i> Listado de Afiliados</a>
       </li>
       <!-- Menu role Section -->
       <li>
           <a href="{{route('role.index')}}"><i class="fab fa-creative-commons-nd"></i> Sección Roles</a>
       </li>
       <!-- Menu packageTourist Section -->
       <li class="active">
           <a href="{{route('packageTourist.index')}}"><i class="fab fa-creative-commons-nd"></i> Sección Paquete Turístico</a>
       </li>

     </ul>
 </div>
 <!-- /.navbar-collapse  -->
 </nav>


<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Sección Afiliados
                <small>Añadir un nuevo paquete turístico</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('indexPersons')}}">Paquete Turístico</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Añadir un paquete turístico
                </li>
            </ol>

        </div>
    </div>
    <!-- /.row -->
            <div class="col-md-8 col-md-offset-2">
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

            </div>

            @if(Session::has('success'))
              <div class="alert alert-info">
                {{Session::get('success')}}
              </div>
            @endif




    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                          <h1>Nuevo Paquete Turístico</h1>

                          <form method="POST" action="{{ route('packageTourist.store') }}"  accept-charset="UTF-8" enctype="multipart/form-data" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <!-- descripcion -->
                                <div class="form-group">
                                    <label>Descripción </label>
                                    <textarea class="form-control" name="descripcion" id="descripcion"  placeholder="Descripción del Paquete Turístico" rows="8" cols="80"></textarea>
                                </div>
                              <!-- Itinerario -->
                                <div class="form-group">
                                    <label>Itinerario </label>
                                    <input type="file" class="" name="itinerario" id="itinerario"  >
                                  </br>
                                    <p class="help-block">Adjuntar el archivo del itinerario del paquete turístico en formato pdf</p>
                                </div>
                                <!-- Precio -->
                                  <div class="form-group">
                                      <label>Precio </label>
                                      <input type="text" class="form-control" name="price" id="price"  placeholder="Precio del Paquete Turístico">
                                  </div>


                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="reset" class="btn btn-default btn-block">Limpiar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <a href="{{ route('packageTourist.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                  </div>

                                </div>
                            </form>

                        </div>

                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
