<div class="row">
    <div class="col-lg-12">
        <h2>Listado de Personas</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>

                     @forelse ($persons as $person)
                       <tr>
                         <td> {{$person->nombre}} </td>
                         <td> {{$person->email}} </td>

                         @if ($person->affiliate != null)
                           <td> Afiliado </td>
                           @elseif ($person->administrator != null)
                             <td> Administrador </td>
                           @else
                             <td> Turista </td>
                       @endif
                       </tr>

                     @empty
                       <p>No existen Registros</p>
                     @endforelse

                </tbody>
            </table>
            {{ $persons->links() }}
        </div>
    </div>
</div>
