<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Turistas</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Descripción</th>
                      <th>Itinerario</th>
                      <th>Precio</th>
                      <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                     @forelse ($packageTourists as $packageTourist)
                     <td>{{$packageTourist->descripcion}}</td>
                     <td> <a href="{{route('packageTourist.downloadItinerary',$packageTourist)}}"> {{$packageTourist->itinerario}} </a></td>

                     <td>{{$packageTourist->price}}</td>
                     <td><a class="btn btn-warning btn-xs" href="{{action('Service\PackageTouristController@edit', $packageTourist)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                     <a class="btn btn-danger btn-xs" href="{{action('Service\PackageTouristController@delete', $packageTourist)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                     <a class="btn btn-success btn-xs" href="{{route( ('packageTourist.show') , $packageTourist)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
                   </tr>

                     @empty
                       <p>No existen Registros</p>
                     @endforelse

                </tbody>
            </table>
            {{ $packageTourists->links() }}
        </div>
    </div>
</div>
