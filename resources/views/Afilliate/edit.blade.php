@extends('layouts.master')
@section('content')
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

 @include('layouts.banner')

 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

 <div class="collapse navbar-collapse navbar-ex1-collapse">
     <ul class="nav navbar-nav side-nav">
       <li >
           <a href=""><i class="fa fa-fw fa-dashboard"></i> Listado de usuarios</a>
       </li>
         <li class="active">
             <a href="{{route('afilliate.index')}}"><i class="fa fa-fw fa-bar-chart-o" ></i> Listado de afiliados</a>
         </li>
         <li>
             <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
         </li>
         <li>
             <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
         </li>
         <li>
             <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
         </li>
         <li>
             <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
         </li>
         <li>
             <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
             <ul id="demo" class="collapse">
                 <li>
                     <a href="#">Dropdown Item</a>
                 </li>
                 <li>
                     <a href="#">Dropdown Item</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
         </li>
         <li>
             <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
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
              <small>Editar datos del afiliado</small>
          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="{{route('afilliate.index')}}">Sección Afiliados</a>
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> Datos del afiliado
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

                          <h2>Editar Datos del afiliado {{$afilliate->person->nombre}}</h2>

                          <form method="POST" action="{{ route('afilliate.update',$afilliate) }}" role="form" >
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group">
                                    <label>Nombre </label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre del Afiliado" value="{{$afilliate->person->nombre}}">
                                </div>
                              <!-- Email -->
                                <div class="form-group">
                                    <label>Correo Electrónico </label>
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Email del Afiliado" value="{{$afilliate->person->email}}">
                                </div>
                                <!-- Direccion -->
                                  <div class="form-group">
                                      <label>Dirección </label>
                                      <input type="textarea" class="form-control" name="direccion" id="direccion"  placeholder="Direccion del Afiliado" value="{{$afilliate->direccion}}">
                                  </div>

                                  <!-- Ages -->
                                  <div class="form-group">
                                        <select name="edad" id="edad" class="form-control" value="{{$afilliate->edad}}">
                                          @for ($edad = 18; $edad <= 95; $edad++)
                                             <option value="{{$edad}}">{{$edad}}</option>
                                          @endfor
                                        </select>
                                  </div>


                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="reset" class="btn btn-default btn-block">Limpiar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <a href="{{ route('afilliate.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                  </div>

                                </div>
                            </form>

                        </div>

                        </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <h1> Archivo de su curriculum</h1>
                        <a href="{{ route('afilliate.downloadCurriculum',$afilliate) }}" class="" >Curriculum</a>
                      </div>
                    </div>

                    @include('Afilliate.editCurriculum')
                    <!-- /.row -->
                    <!-- Adjustment -->
                     @include('Afilliate.partials.adjustment')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
