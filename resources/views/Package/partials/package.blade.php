<div class="row">
    <div class="col-lg-12">
        <h2>Datos del paquete turístico</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
              <tbody>
                <tr>
                  <th>Descripcion</th>
                  <td>{{$packageTourist->descripcion}}</td>
                </tr>
                <tr>
                  <th>Itinerario</th>
                  <td> <a href="{{route('packageTourist.downloadItinerary',$packageTourist)}}"> {{$packageTourist->itinerario}} </a></td>
                </tr>
                <tr>
                  <th>Precio</th>
                  <td>{{$packageTourist->price}}</td>
                </tr>
                <tr>
                  <th>Opciones</th>
                  <td><a class="btn btn-warning btn-xs" href="{{action('Service\PackageTouristController@edit', $packageTourist)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                  <a class="btn btn-danger btn-xs" href="{{action('Service\PackageTouristController@delete', $packageTourist)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                  <a class="btn btn-success btn-xs" href="{{route( ('packageTourist.show') , $packageTourist)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
