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
                    </tr>
                </thead>
                <tbody>
                     <tr>
                     @forelse ($tourists as $tourist)
                        <td>{{$tourist->id_turista}}</td>
                        <td>{{$tourist->person->nombre}}</td>
                        <td>{{$tourist->person->email}}</td>
                        <td>{{$tourist->idioma}}</td>
                        <td>{{$tourist->residencia}}</td>

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
