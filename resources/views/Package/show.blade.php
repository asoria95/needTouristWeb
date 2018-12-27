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
           <a href="{{route('packageTourist.index')}}"><i class="fas fa-address-book"></i> Sección Paquete Turístico</a>
       </li>
       <!-- Menu deal Section -->
       <li>
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
                  Sección Paquetes Turísticos
                  <small>Datos del Paquete Turistico</small>
              </h1>
              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="{{route('packageTourist.index')}}">Paquetes Turísticos</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-file"></i> Paquete Turistico
                  </li>
              </ol>

      </div>

    <!-- /.row -->
          @include('Package.partials.package')
</div>
<!-- /.container-fluid -->
        <!-- Adjustment -->
        @include('Package.partials.adjustment')
          <!-- Adjustment -->
          @include('Package.partials.adjustment')
</div>
<!-- /#page-wrapper -->
  </div>
<!-- /#wrapper -->
