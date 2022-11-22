@extends('template/dashboard/layout')

@section('titulo_pestaña')
    Rony Boutique - Ventas
@endsection

@section('ventas')
    active-nav
@endsection

@section('header')
    Ventas
    &nbsp;
@endsection

@section('titulo')
    Ventas Generales
@endsection

@section('descripcion')
    Aqui tienes una descripción de las ventas que ha tenido la tienda en línea en diferentes tiempos y secciones
@endsection

@section('contenido')
    <div class="card border-dark mb-3">
        <div class="card-header">Ventas en Total</div>
        <div class="card-body text-dark">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
            <a href="#" class="btn btn-dark">Go somewhere</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas del día de hoy</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas de esta semana</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas de este mes</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas de este año</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
