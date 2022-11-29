<div class="table-responsive">
    <table class="table table-hover ">
        <thead class="">
            <th>
                #
            </th>
            <th>
                Nombre {{-- name --}}
            </th>
            <th>
                Correo Electrónico {{-- email --}}
            </th>
            <th>
                Número de Teléfono {{-- number_phone --}}
            </th>
            <th colspan="2">
                Acciones
            </th>
        </thead>
        <tbody>
            @foreach ($usuarios->users as $user)
                @foreach ($usuarios->admins as $admin)
                    @if ($admin->user_id == $user->id)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $user->name }} {{-- name --}}
                            </td>
                            <td>
                                {{ $user->email }} {{-- email --}}
                            </td>
                            <td>
                                {{ $admin->number_phone }} {{-- number_phone --}}
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="#" role="button">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="#" role="button">Dar de Baja</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach

        </tbody>
    </table>
</div>
