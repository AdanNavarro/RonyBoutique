<div class="table-responsive">
    <table class="table table-hover ">
        <thead class="">
            <th>
                #
            </th>
            <th>
                Nombre de la categoría {{-- type --}}
            </th>
            <th>
                Descripción del producto {{-- description --}}
            </th>

            <th colspan="2">
                Acciones
            </th>
        </thead>
        <tbody>


            @foreach ($typeclothes as $type)
                <tr>
                    <td>
                        {{ $type->id }}
                    </td>
                    <td>
                        {{ $type->type }} {{-- type --}}
                    </td>
                    <td>
                        {{ $type->description }} {{-- description --}}
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
