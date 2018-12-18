<div class="row">
    <div class="col-lg-12">

        <h2>Listado de Afiliados</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Dirección</th>
                      <th>Edad</th>
                      <th>Curriculum</th>
                      <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                     @forelse ($afilliates as $afilliate)
                        <td>{{$afilliate->person->nombre}}</td>
                        <td>{{$afilliate->person->email}}</td>
                        <td>{{$afilliate->direccion}}</td>
                        <td>{{$afilliate->edad}}</td>
                        <td>{{$afilliate->curriculum}}</td>

                        <td colspan="2"><a class="btn btn-warning btn-xs" href="{{action('Persons\AfilliateController@edit', $afilliate)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger btn-xs" href="{{action('Persons\AfilliateController@delete', $afilliate)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="btn btn-success btn-xs" href="{{route( ('afilliate.show') , $afilliate)}}" ><span class="glyphicon glyphicon-eye-open"></span></td>

                      </tr>

                     @empty
                       <p>No existen Registros</p>
                     @endforelse

                </tbody>
            </table>
            {{ $afilliates->links() }}
        </div>
    </div>
</div>
