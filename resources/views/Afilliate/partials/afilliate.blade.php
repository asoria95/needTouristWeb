<div class="row">
    <div class="col-lg-12">
        <h2>Datos del afiliado {{$afilliate->person->nombre}}</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
              <tbody>
                <tr>
                  <th>Nombre</th>
                  <td>{{$afilliate->person->nombre}}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>{{$afilliate->person->email}}</td>
                </tr>
                <tr>
                  <th>Dirección</th>
                  <td>{{$afilliate->direccion}}</td>
                </tr>
                <tr>
                  <th>Edad</th>
                  <td>{{$afilliate->edad}}</td>
                </tr>
                <tr>
                  <th>Curriculum</th>
                  <td>{{$afilliate->curriculum}}</td>
                </tr>
                <tr>
                  <th>Opciones</th>
                  <td><a class="btn btn-warning btn-xs" href="{{action('Persons\AfilliateController@edit', $afilliate)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                  <a class="btn btn-danger btn-xs" href="{{action('Persons\AfilliateController@delete', $afilliate)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                  <a class="btn btn-success btn-xs" href="{{route( ('afilliate.show') , $afilliate)}}" ><span class="glyphicon glyphicon-eye-open"></span></td>

                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
