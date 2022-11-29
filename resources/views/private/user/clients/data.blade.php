<div class="table-responsive">
    <table class="table table-hover ">
        <thead class="">
            <th>
                #
            </th>
            <th>
                Nombre de Usuario {{-- username --}}
            </th>
            <th>
                Correo Electrónico {{-- email --}}
            </th>
            <th colspan="2">
                Acciones
            </th>
        </thead>
        <tbody>

            @foreach ($usuarios->users as $user)
                @foreach ($usuarios->clients as $client)
                    @if ($client->user_id == $user->id)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $client->username }} {{-- username --}}
                            </td>
                            <td>
                                {{ $user->email }} {{-- email --}}
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
