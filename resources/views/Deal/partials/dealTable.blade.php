<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Negocios</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                      <th>Email</th>
                      <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                     @forelse ($deals as $deal)
                        <td>{{$deal->nombre}}</td>
                        <td>{{$deal->direccion}}</td>
                        <td>{{$deal->telefono}}</td>
                        <td>{{$deal->email}}</td>
                        <td><a class="btn btn-warning btn-xs" href="{{action('Deal\DealController@edit', $deal)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger btn-xs" href="{{action('Deal\DealController@delete', $deal)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="btn btn-success btn-xs" href="{{route( ('deal.show') , $deal)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
                      </tr>

                     @empty
                       <p>No existen Registros</p>
                     @endforelse

                </tbody>
            </table>
            {{ $deals->links() }}
        </div>
    </div>
</div>
