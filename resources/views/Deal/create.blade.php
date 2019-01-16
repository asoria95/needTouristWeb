
@include('layouts.head')

<title>Seccion de negocios </title>

@include('layouts.css')

<body>

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
       <li>
           <a href="{{route('packageTourist.index')}}"><i class="fas fa-address-book"></i> Sección Paquete Turístico</a>
       </li>
       <!-- Menu deal Section -->
       <li class="active">
           <a href="{{route('deal.index')}}"><i class="fas fa-store"></i> Sección Negocios</a>
       </li>
     </ul>
 </div>
 <!-- /.navbar-collapse  -->
 </nav>

<div id="page-wrapper">

<div class="container-fluid">

  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">
                Sección Negocios
                <small>Listado de Negocios</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('deal.index')}}">Negocios</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Crear nuevo Negocio
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

                          <h1>Nuevo Negocio</h1>

                        <form method="POST" action="{{ route('deal.store') }}"  role="form">
                            {{ csrf_field() }}
                            <!-- Name -->
                            <div class="form-group">
                              <label>Nombre </label>
                              <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre del Negocio">
                            </div>
                            <!-- Direccion -->
                              <div class="form-group">
                                  <label>Dirección </label>
                                  <textarea name="direccion" id="direccion" rows="5" cols="80" class="form-control" placeholder="Dirección del Negocio"></textarea>
                              </div>

                            <!-- Telefono -->
                                <div class="form-group">
                                    <label>Teléfono </label>
                                    <input type="text" class="form-control" name="telefono" id="telefono"  placeholder="Telefono del Negocio">
                                </div>
                            <!-- Email -->
                                  <div class="form-group">
                                      <label>Correo Electrónico </label>
                                      <input type="email" class="form-control" name="email" id="email"  placeholder="Email del Negocio">
                                  </div>

                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="reset" class="btn btn-default btn-block">Limpiar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <a href="{{ route('deal.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                  </div>

                                </div>
                            </form>

                        </div>

                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Adjustment -->
                     @include('Tourist.partials.adjustment')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('layouts.final')

