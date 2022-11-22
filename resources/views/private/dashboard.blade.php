@extends('template/dashboard/layout')

@section('titulo_pestaña')
    Rony Boutique - tablero
@endsection

@section('header')
    Tablero
@endsection

@section('titulo')
    Tablero Principal
@endsection

@section('descripcion')
    Bienvenido al tablero principal, desde aqui puedes tener un control acerca de las diferentes secciones de la aplicación.
    Prueba a seleccionar una opción del menu de la izquierda para comenzar

    <br><br>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-body text-dark">
                    <h5 class="card-title">Ventas</h5>
                    <p class="card-text">Aqui tienes una descripción de las ventas que ha tenido la tienda en línea en diferentes tiempos y secciones</p>
                    <a href="{{ route('tablero.sales') }}" class="btn btn-dark">Ver Ventas</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-body text-dark">
                    <h5 class="card-title">Boutique</h5>
                    <p class="card-text">Desde aqui podras agregar nuevos productos, ver existencias, editar productos y mucho mas.</p>
                    <a href="{{ route('tablero.boutique') }}" class="btn btn-dark">Ver Boutique</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-dark mb-3">
        <div class="card-body text-dark">
            <h5 class="card-title">Usuarios</h5>
            <p class="card-text">Desde aqui puedes ver, agregar, modificar o dar de baja a los usuarios disponibles.</p>
            <a href="{{ route('tablero.usuarios') }}" class="btn btn-dark">Ver Usuarios</a>
        </div>
    </div>
@endsection
