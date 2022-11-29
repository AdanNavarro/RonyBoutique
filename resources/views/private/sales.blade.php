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
            @php
                $ventashechas = 0;
                $ganancias = 0;
            @endphp

            @foreach ($ventas->ventas_totales as $ven)
                @php
                    $ventashechas++;
                    $ganancias += $ven->total;
                @endphp
            @endforeach
            <h5 class="card-title">
                Ventas hechas: {{ $ventashechas }}
            </h5>
            <h5 class="card-title">
                Ganancias: ${{ $ganancias }}
            </h5>
            <p class="card-text">Ventas realizadas durante todo el año</p>
            
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas del día de hoy</div>
                <div class="card-body text-dark">
                    @php
                        $ventashechas = 0;
                        $ganancias = 0;
                    @endphp

                    @foreach ($ventas->ventas_dia as $ven)
                        @php
                            $ventashechas++;
                            $ganancias += $ven->total;
                        @endphp
                    @endforeach
                    <h5 class="card-title">
                        Ventas hechas: {{ $ventashechas }}
                    </h5>
                    <h5 class="card-title">
                        Ganancias: ${{ $ganancias }}
                    </h5>
                    <p class="card-text">Ventas realizadas el día de hoy</p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas de esta semana</div>
                <div class="card-body text-dark">
                    @php
                        $ventashechas = 0;
                        $ganancias = 0;
                    @endphp

                    @foreach ($ventas->ventas_semana as $ven)
                        @php
                            $ventashechas++;
                            $ganancias += $ven->total;
                        @endphp
                    @endforeach
                    <h5 class="card-title">
                        Ventas hechas: {{ $ventashechas }}
                    </h5>
                    <h5 class="card-title">
                        Ganancias: ${{ $ganancias }}
                    </h5>
                    <p class="card-text">Ventas realizadas durante esta semana</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas de este mes</div>
                <div class="card-body text-dark">
                    @php
                        $ventashechas = 0;
                        $ganancias = 0;
                    @endphp

                    @foreach ($ventas->ventas_mes as $ven)
                        @php
                            $ventashechas++;
                            $ganancias += $ven->total;
                        @endphp
                    @endforeach
                    <h5 class="card-title">
                        Ventas hechas: {{ $ventashechas }}
                    </h5>
                    <h5 class="card-title">
                        Ganancias: ${{ $ganancias }}
                    </h5>
                    <p class="card-text">Ventas realizadas durante este mes</p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-dark mb-3">
                <div class="card-header">Ventas de este año</div>
                <div class="card-body text-dark">
                    @php
                        $ventashechas = 0;
                        $ganancias = 0;
                    @endphp

                    @foreach ($ventas->ventas_anio as $ven)
                        @php
                            $ventashechas++;
                            $ganancias += $ven->total;
                        @endphp
                    @endforeach
                    <h5 class="card-title">
                        Ventas hechas: {{ $ventashechas }}
                    </h5>
                    <h5 class="card-title">
                        Ganancias: ${{ $ganancias }}
                    </h5>
                    <p class="card-text">Ventas realizadas durante este año</p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
