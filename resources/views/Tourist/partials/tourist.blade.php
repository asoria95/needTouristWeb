<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Personas</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Idioma</th>
                      <th>Residencia</th>
                      <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>

                        <td>{{$tourist->person->nombre}}</td>
                        <td>{{$tourist->person->email}}</td>
                        <td>{{$tourist->idioma}}</td>
                        <td>{{$tourist->residencia}}</td>
                        <td colspan="2"><a class="btn btn-primary btn-xs" href="{{action('Persons\TuristController@edit', $tourist->id_turista)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger btn-xs" href="{{action('Persons\TuristController@destroy', $tourist->id_turista)}}" ><span class="glyphicon glyphicon-trash"></span></a></td>
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
