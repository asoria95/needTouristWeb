<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Afiliados</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                     @forelse ($roles as $role)
                        <td>{{$role->nombre}}</td>
                        <td>{{$role->descripcion}}</td>
                        <td colspan="2"><a class="btn btn-warning btn-xs" href="{{action('Persons\RoleController@edit', $role)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger btn-xs" href="{{action('Persons\RoleController@delete', $role)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="btn btn-success btn-xs" href="{{route( ('role.show') , $role)}}" ><span class="glyphicon glyphicon-eye-open"></span></td>
                      </tr>

                     @empty
                       <p>No existen Registros</p>
                     @endforelse

                </tbody>
            </table>
            {{ $roles->links() }}
        </div>
    </div>
</div>
