<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Personas</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <th>Nombre</th>
                  <td>{{$tourist->person->nombre}}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>{{$tourist->person->email}}</td>
                </tr>
                <tr>
                  <th>Idioma</th>
                  <td>{{$tourist->idioma}}</td>
                </tr>
                <tr>
                  <th>Residencia</th>
                  <td>{{$tourist->residencia}}</td>
                </tr>
                <tr>
                  <th>Opciones</th>
                  <td colspan="2"><a class="btn btn-primary btn-xs" href="{{action('Persons\TuristController@edit', $tourist->id_turista)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                  <a class="btn btn-danger btn-xs" href="{{action('Persons\TuristController@destroy', $tourist->id_turista)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                  <a class="btn btn-success btn-xs" href="{{route( ('tourist.show') , $tourist->id_turista)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
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
