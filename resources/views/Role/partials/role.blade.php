<div class="row">
    <div class="col-lg-12">
        <h2>Rol </h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <th>Nombre</th>
                  <td>{{$role->nombre}}</td>
                </tr>
                <tr>
                  <th>Descripción</th>
                  <td>{{$role->descripcion}}</td>
                </tr>
                  <th>Opciones</th>
                  <td colspan="2"><a class="btn btn-primary btn-xs" href="{{action('Persons\RoleController@edit', $role)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                  <a class="btn btn-danger btn-xs" href="{{action('Persons\RoleController@destroy', $role)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                  <a class="btn btn-success btn-xs" href="{{route( ('role.show') , $role)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>

                </tbody>
            </table>
            <!-- Adjustment -->
             @include('Tourist.partials.adjustment')
             <!-- Adjustment -->
              @include('Tourist.partials.adjustment')
        </div>
    </div>
</div>
