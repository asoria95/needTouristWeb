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
        <div class="col-lg-12">
            <h1 class="page-header">
                Sección Turistas
                <small>Listado de Turistas</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('indexPersons')}}">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Listado de Turistas
                </li>
            </ol>

        </div>
    </div>
    <!-- /.row -->
        @include('Tourist.partials.tourist')
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
  </div>
<!-- /#wrapper -->
@include('layouts.partials.finalTourist')
