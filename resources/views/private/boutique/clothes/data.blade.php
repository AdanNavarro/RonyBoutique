<div class="table-responsive" style="max-height: 500px">
    <table class="table table-hover " >
        <thead class="">
            <th>
                #
            </th>
            <th>
                Marca {{-- trademark_id -> name --}}
            </th>
            <th>
                Tipo de producto {{-- type_clothes_id -> type --}}
            </th>
            <th>
                Categoría {{-- type_costumer_clothe --}}
            </th>
            <th>
                Nombre {{-- name --}}
            </th>
            <th>
                Descripción {{-- description --}}
            </th>
            <th>
                Imagen {{-- img --}}
            </th>
            <th>
                Talla {{-- size --}}
            </th>
            <th>
                Cantidad {{-- stock --}}
            </th>

            <th colspan="2">
                Acciones
            </th>
        </thead>
        <tbody>


            @foreach ($productos as $pro)
                <tr>
                    <td>
                        {{ $pro->id }}
                    </td>
                    <td>
                        @foreach ($trademarks as $trade)
                            @if ($trade->id == $pro->trademark_id)
                                {{ $trade->name }}
                            @endif
                        @endforeach {{-- trademark_id -> name --}}
                    </td>
                    <td>
                        @foreach ($typeclothes as $type)
                            @if ($type->id == $pro->type_clothes_id)
                                {{ $type->type }}
                            @endif
                        @endforeach {{-- trademark_id -> name --}}
                    </td>
                    <td>
                        {{ $pro->type_costumer_clothe }} {{-- type_costumer_clothe --}}
                    </td>
                    <td>
                        {{ $pro->name }} {{-- name --}}
                    </td>
                    <td>
                        {{ $pro->description }} {{-- description --}}
                    </td>
                    <td>
                        <img style="max-width: 100px" src="{{ $pro->img }}" alt=""> {{-- img --}}
                    </td>
                    <td>
                        {{ $pro->size }} {{-- size --}}
                    </td>
                    <td>
                        {{ $pro->stock }} {{-- stock --}}
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
