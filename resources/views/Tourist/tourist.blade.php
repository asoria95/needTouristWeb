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
                <small>Listado de Turistas</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('tourist.index')}}">Turistas</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Listado de Turistas
                </li>
            </ol>

    </div>

    <div class="row">
      <div class="col-md-6">
          <a class="btn btn-primary btn-lg" href="{{route('tourist.create')}}" ><span class="glyphicon glyphicon-plus-sign"></span> Añadir Usuario</a>
      </div>
      <div class="col-md-6">
          <a class="btn btn-primary btn-lg" href="{{route('tourist.requestTouristPackage', Auth::user()->id)}}" ><span class="glyphicon glyphicon-plus-sign"></span> Solicitar Paquete Turistico</a>
      </div>
      <hr>
    </div>
    <!-- /.row -->
    @if(Session::has('message'))

        <div class="alert alert-success">
          <strong>{{Session::get('message')}}</strong>
        </div>

    @endif

        @include('Tourist.partials.touristTable')

        <div class="row">
          <h3>  </h3>
        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
  </div>
<!-- /#wrapper -->

@include('layouts.partials.finalTourist')
