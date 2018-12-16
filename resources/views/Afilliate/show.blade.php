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
                <small>Datos del afiliado</small>
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
        @include('Afilliate.partials.afilliate')
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
  </div>
<!-- /#wrapper -->
