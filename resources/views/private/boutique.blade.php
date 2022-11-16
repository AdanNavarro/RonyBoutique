@extends('template/dashboard/layout')

@section('titulo_pestaña')
    Rony Boutique - Boutique
@endsection

@section('boutique')
    active-nav
@endsection

@section('header')
    Boutique
    &nbsp;
@endsection

@section('titulo')
    Boutique
@endsection

@section('descripcion')
    Desde aqui podras agregar nuevos productos, ver existencias, editar productos y mucho mas.
@endsection

@section('contenido')
    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">

        {{-- Para ambas vistas --}}

        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link active" id="producto-tab" data-bs-toggle="tab" data-bs-target="#producto" type="button"
                role="tab" aria-controls="producto" aria-selected="true">Productos</button>
        </li>

        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link " id="marca-tab" data-bs-toggle="tab" data-bs-target="#marca" type="button"
                role="tab" aria-controls="marca" aria-selected="false">Marcas</button>
        </li>
        
        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link " id="tipoproducto-tab" data-bs-toggle="tab" data-bs-target="#tipoproducto"
                type="button" role="tab" aria-controls="tipoproducto" aria-selected="false">Tipo de productos</button>
        </li>
    </ul>

    <div class="tab-content mt-5" style="margin-bottom: 3rem !important;" id="myTabContent">
        <div class="tab-pane fade show active" id="producto" role="tabpanel" aria-labelledby="producto-tab">
            @include('private/boutique/clothes/data')

            <div class="text-center">
                <a class="btn btn-outline-dark my-2 mx-auto" data-bs-toggle="collapse" href="#form_clients" role="button"
                    aria-expanded="false" aria-controls="form_clients">
                    Agregar Producto
                </a>
            </div>
            <div class="collapse  mt-3" id="form_clients">
                <div class="card card-body">
                    @include('private/user/clients/create')
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="marca" role="tabpanel" aria-labelledby="marca-tab">
            @include('private/boutique/trademarks/data')

            <div class="text-center">
                <a class="btn btn-outline-dark my-2 mx-auto" data-bs-toggle="collapse" href="#form_workers" role="button"
                    aria-expanded="false" aria-controls="form_workers">
                    Agregar Marca
                </a>
            </div>
            <div class="collapse mt-3" id="form_workers">
                <div class="card card-body">
                    @include('private/user/workers/create')
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tipoproducto" role="tabpanel" aria-labelledby="tipoproducto-tab">
            @include('private/boutique/type_clothes/data')

            <div class="text-center">
                <a class="btn btn-outline-dark my-2 mx-auto" data-bs-toggle="collapse" href="#form_admins" role="button"
                    aria-expanded="false" aria-controls="form_admins">
                    Agregar Tipo
                </a>
            </div>
            <div class="collapse mt-3" id="form_admins">
                <div class="card card-body">
                    @include('private/user/admins/create')
                </div>
            </div>
        </div>
    </div>

    <br>

@endsection
