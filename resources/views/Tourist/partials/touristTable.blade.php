<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Turistas</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Idioma</th>
                      <th>Residencia</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                     @forelse ($tourists as $tourist)
                        <td>{{$tourist->person->nombre}}</td>
                        <td>{{$tourist->person->email}}</td>
                        <td>{{$tourist->idioma}}</td>
                        <td>{{$tourist->residencia}}</td>


                        <td><a class="btn btn-warning btn-xs" href="{{action('Persons\TuristController@edit', $tourist->id_turista)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger btn-xs" href="{{action('Persons\TuristController@delete', $tourist)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="btn btn-success btn-xs" href="{{route( ('tourist.show') , $tourist->id_turista)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>

                      </tr>

                     @empty
                       <p>No existen Registros</p>
                     @endforelse

                </tbody>
            </table>
            {{ $tourists->links() }}
        </div>
    </div>
</div>
