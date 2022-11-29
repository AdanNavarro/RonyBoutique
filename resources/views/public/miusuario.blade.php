@extends('template.main-layout')

@section('titulo_pestaña', 'Inicio')

@section('usuario', 'active')

@section('contenido')

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <br><br>

        <h1 class="text-center">Mis pedidos</h1>

        <br><br>

        @foreach ($ventas as $venta)
            <div class="card text-left mb-3">
                <div class="card-header">
                    Número de Folio: {{ $venta->folio_number }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Fecha en que se pidió: {{ $venta->date }}</h5>
                    <p class="card-text">
                        Subtotal: ${{$venta->subtotal}}
                        <br>
                        IVA: ${{$venta->tax}}
                        <br>
                        Total: ${{$venta->total}}
                    </p>
                </div>
            </div>
        @endforeach


    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
