<div class="row">
    <div class="col-lg-12">
        <h2>Datos del negocio </h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <tbody>
                <tr>
                  <th>Nombre</th>
                  <td>{{$deal->nombre}}</td>
                </tr>
                <tr>
                  <th>Dirección</th>
                  <td>{{$deal->direccion}}</td>
                </tr>
                <tr>
                  <th>Telefono</th>
                  <td>{{$deal->telefono}}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>{{$deal->email}}</td>
                </tr>
                <tr>
                  <th>Opciones</th>
                  <td><a class="btn btn-warning btn-xs" href="{{action('Deal\DealController@edit', $deal)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                  <a class="btn btn-danger btn-xs" href="{{action('Deal\DealController@delete', $deal)}}" ><span class="glyphicon glyphicon-trash"></span></a>
                  <a class="btn btn-success btn-xs" href="{{route( ('deal.show') , $deal)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
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
