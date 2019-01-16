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
      <!-- Menu packageTourist Section -->
      <li>
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
