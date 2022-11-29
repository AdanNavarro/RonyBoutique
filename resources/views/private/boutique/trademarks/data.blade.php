<div class="table-responsive">
    <table class="table table-hover ">
        <thead class="">
            <th>
                #
            </th>
            <th>
                Nombre de la Marca {{-- name --}}
            </th>
            <th>
                Descripción de la Marca {{-- description --}}
            </th>

            <th colspan="2">
                Acciones
            </th>
        </thead>
        <tbody>
            @foreach ($trademarks as $trade)
                <tr>
                    <td>
                        {{ $trade->id }}
                    </td>
                    <td>
                        {{ $trade->name }} {{-- name --}}
                    </td>
                    <td>
                        {{ $trade->description }} {{-- description --}}
                    </td>
                    <td>
                        <a class="btn btn-outline-dark" href="#" role="button">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-dark" href="#" role="button">Eliminar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
