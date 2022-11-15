@extends('template/dashboard/layout')

@section('titulo_pestaña')
    Rony Boutique - Usuarios
@endsection

@section('usuarios')
    active-nav
@endsection

@section('header')
    Usuarios
    &nbsp;
@endsection

@section('titulo')
    Usuarios
@endsection

@section('descripcion')
    Desde aqui puedes ver, agregar, modificar o dar de baja a los usuarios disponibles.
@endsection

@section('contenido')
    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">

        {{-- Para la vista empleado --}}

        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link active" id="cliente-tab" data-bs-toggle="tab" data-bs-target="#cliente" type="button"
                role="tab" aria-controls="cliente" aria-selected="true">Clientes</button>
        </li>
        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link " id="empleados-tab" data-bs-toggle="tab" data-bs-target="#empleados" type="button"
                role="tab" aria-controls="empleados" aria-selected="false">Empleados</button>
        </li>

        {{-- Unicamente para la vista de administrador --}}
        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link " id="administradores-tab" data-bs-toggle="tab" data-bs-target="#administradores"
                type="button" role="tab" aria-controls="administradores" aria-selected="false">Administradores</button>
        </li>
    </ul>

    <div class="tab-content mt-5" id="myTabContent">
        <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
            @include('private/user/clients/data')

            <div class="text-center">
                <a class="btn btn-outline-dark  mx-auto" data-bs-toggle="collapse" href="#form_clients" role="button"
                    aria-expanded="false" aria-controls="form_clients">
                    Agregar Cliente
                </a>
            </div>
            <div class="{{-- collapse --}}  mt-3" id="form_clients">
                <div class="card card-body">
                    {{--  --}}
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="empleados" role="tabpanel" aria-labelledby="empleados-tab">
            @include('private/user/workers/data')

            <div class="text-center">
                <a class="btn btn-outline-dark  mx-auto" data-bs-toggle="collapse" href="#form_workers" role="button"
                    aria-expanded="false" aria-controls="form_workers">
                    Agregar Empleado
                </a>
            </div>
            <div class="{{-- collapse --}} mt-3" id="form_workers">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when
                    the user
                    activates the relevant trigger.
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="administradores" role="tabpanel" aria-labelledby="administradores-tab">
            @include('private/user/admins/data')

            <div class="text-center">
                <a class="btn btn-outline-dark  mx-auto" data-bs-toggle="collapse" href="#form_admins" role="button"
                    aria-expanded="false" aria-controls="form_admins">
                    Agregar Administrador
                </a>
            </div>
            <div class="{{-- collapse --}} mt-3" id="form_admins">
                <div class="card card-body">
                    @include('private/user/admins/create')
                </div>
            </div>
        </div>
    </div>
@endsection
