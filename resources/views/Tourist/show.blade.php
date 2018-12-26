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
       <li class="active">
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
