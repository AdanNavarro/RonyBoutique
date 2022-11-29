@extends('template.main-layout')

@section('titulo_pestaña', 'Catalogo')

@section('contenido')

    @php
        $imagen = 'assets/images/catalogo_background.jpg';
        
        if (isset($_GET['mostrar'])) {
            $catalogo_Filtro = $_GET['mostrar'];
        
            switch ($catalogo_Filtro) {
                case 'Hombre':
                    $imagen = 'assets/images/catalogo_hombre.jpg';
                    break;
        
                case 'Mujer':
                    $imagen = 'assets/images/catalogo_mujer.jpg';
                    break;
        
                case 'Niños_y_Niñas':
                    $imagen = 'assets/images/catalogo_nino.jpg';
                    break;
        
                case 'Accesorio':
                    $imagen = 'assets/images/catalogo_accesorio.jpg';
                    break;
            }
        
            if ($catalogo_Filtro == 'Niños_y_Niñas') {
                $catalogo_Filtro = 'Niños y Niñas';
            }
        }
        //assets/images/catalogo_background.jpg
    @endphp

    <!-- ***** Main Banner Area Start ***** -->
    <style>
        .page-heading {

            /*
                                    margin-top: 160px;
                        margin-bottom: 30px;
                        background-image: url(../images/products-page-heading.jpg);
                        background-position: center center;
                        background-size: cover;
                        background-repeat: no-repeat;
                                       */



            background-image: url('{{ asset($imagen) }}') !important;

            background-position: center bottom;
        }
    </style>



    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content" style="text-shadow: 0px 3px 2px rgba(0, 0, 0, 1);">
                        <h2>
                            Catálogo
                            @isset($catalogo_Filtro)
                                - {{ $catalogo_Filtro }}
                            @endisset
                        </h2>
                        <h3 class="text-white">Dale un vistazo a los últimos productos agregados de nuestro catálogo</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Últimos productos agregados</h2>
                        <span>Echa un vistazo, se que alguno te agradará</span>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container">

            <style>
                .row {
                    margin-left: 0 !important;
                    margin-right: 0 !important;
                }

                .form-check-input:checked {
                    background-color: #000;
                    border-color: #000;
                }

                input:focus {
                    border-color: #000;
                }

                .btn-check:active+.btn-outline-dark,
                .btn-check:checked+.btn-outline-dark,
                .btn-outline-dark.active,
                .btn-outline-dark.dropdown-toggle.show,
                .btn-outline-dark:active {
                    color: #fff;
                    background-color: #000;
                    border-color: #000;
                }
            </style>

            <div class="row">
                <div class="col-xl-2 mb-3">
                    <div class="card mb-3">
                        <div class="card-body ">
                            <h5 class="text-center">Categorías</h5>
                            <hr>

                            <p class="card-text text-right">
                            <form action="{{ route('filterType') }}" method="post">
                                @csrf
                                <div class="btn-group-vertical w-100" role="group"
                                    aria-label="Vertical radio toggle button group">

                                    @foreach ($typeclothes as $type)
                                        @if (isset($filtroType))
                                            @if ($filtroType == $type->type)
                                                <input type="radio" class="btn-check" name="filtro"
                                                    id="vbtn{{ $type->type }}" autocomplete="off" checked
                                                    value="{{ $type->type }}" onclick="javascript: submit()">
                                                <label class="btn btn-outline-dark" style="color: #FFF !important"
                                                    for="vbtn{{ $type->type }}">{{ $type->type }}</label>
                                            @else
                                                <input type="radio" class="btn-check" name="filtro"
                                                    id="vbtn{{ $type->type }}" autocomplete="off"
                                                    onclick="javascript: submit()" value="{{ $type->type }}">
                                                <label class="btn btn-outline-dark"
                                                    for="vbtn{{ $type->type }}">{{ $type->type }}</label>
                                            @endif
                                        @else
                                            <input type="radio" class="btn-check" name="filtro"
                                                id="vbtn{{ $type->type }}" autocomplete="off"
                                                onclick="javascript: submit()" value="{{ $type->type }}">
                                            <label class="btn btn-outline-dark"
                                                for="vbtn{{ $type->type }}">{{ $type->type }}</label>
                                        @endif
                                    @endforeach

                                </div>
                            </form>
                            </p>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body ">
                            <h5 class="text-center">Marcas</h5>
                            <hr>

                            <p class="card-text text-right">
                            <form action="{{ route('filterTrade') }}" method="post">
                                @csrf
                                <div class="btn-group-vertical w-100" role="group"
                                    aria-label="Vertical radio toggle button group">

                                    @foreach ($trademarks as $trade)
                                        @if (isset($filtroTrade))
                                            @if ($filtroTrade == $trade->name)
                                                <input type="radio" class="btn-check" name="filtro"
                                                    id="vbtn{{ $trade->name }}" autocomplete="off" checked
                                                    value="{{ $trade->name }}" onclick="javascript: submit()">
                                                <label class="btn btn-outline-dark" style="color: #FFF !important"
                                                    for="vbtn{{ $trade->name }}">{{ $trade->name }}</label>
                                            @else
                                                <input type="radio" class="btn-check" name="filtro"
                                                    id="vbtn{{ $trade->name }}" autocomplete="off"
                                                    onclick="javascript: submit()" value="{{ $trade->name }}">
                                                <label class="btn btn-outline-dark"
                                                    for="vbtn{{ $trade->name }}">{{ $trade->name }}</label>
                                            @endif
                                        @else
                                            <input type="radio" class="btn-check" name="filtro"
                                                id="vbtn{{ $trade->name }}" autocomplete="off"
                                                onclick="javascript: submit()" value="{{ $trade->name }}">
                                            <label class="btn btn-outline-dark"
                                                for="vbtn{{ $trade->name }}">{{ $trade->name }}</label>
                                        @endif
                                    @endforeach

                                </div>
                            </form>
                            </p>

                        </div>
                    </div>
                </div>


                <div class="col-xl-10 row ml-3 mb-3">

                    @php
                        $aux = '';
                    @endphp

                    @foreach ($productos as $pro)
                        @if (isset($filtroType) || isset($filtroTrade))

                            @if (isset($filtroType))
                                @php
                                    
                                    foreach ($typeclothes as $type) {
                                        if ($type->id == $pro->type_clothes_id) {
                                            $filtrogeneral = $type->type;
                                        }
                                    }
                                    
                                @endphp


                                @if ($filtrogeneral == $filtroType)
                                    @if ($pro->name != $aux)
                                        @if (isset($catalogo_Filtro))
                                            @if ($pro->type_costumer_clothe == $catalogo_Filtro)
                                                <div class="col-lg-4 ">
                                                    <div class="item p-2 card shadow-sm">
                                                        <div class="thumb">
                                                            <div class="hover-content">
                                                                <ul>
                                                                    <li><a
                                                                            href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                    <li><a href="single-product.html"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ $pro->img }}" alt="">
                                                        </div>
                                                        <hr>
                                                        <div class="down-content" style="padding: 0 10px !important">
                                                            <h4>{{ $pro->name }}</h4>
                                                            <span>Precio: ${{ $pro->price }}</span>
                                                            <span>{{ $pro->type_costumer_clothe }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <div class="col-lg-4 ">
                                                <div class="item p-2 card shadow-sm">
                                                    <div class="thumb">
                                                        <div class="hover-content">
                                                            <ul>
                                                                <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                            class="fa fa-eye"></i></a></li>
                                                                <li><a href="single-product.html"><i
                                                                            class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ $pro->img }}" alt="">
                                                    </div>
                                                    <hr>
                                                    <div class="down-content" style="padding: 0 10px !important">
                                                        <h4>{{ $pro->name }}</h4>
                                                        <span>Precio: ${{ $pro->price }}</span>
                                                        <span>{{ $pro->type_costumer_clothe }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                        @php
                                            $aux = $pro->name;
                                        @endphp
                                    @endif
                                @endif
                            @endif

                            @if (isset($filtroTrade))
                                @php
                                    
                                    foreach ($trademarks as $trade) {
                                        if ($trade->id == $pro->trademark_id) {
                                            $filtrogeneral = $trade->name;
                                        }
                                    }
                                    
                                @endphp


                                @if ($filtrogeneral == $filtroTrade)
                                    @if ($pro->name != $aux)
                                        @if (isset($catalogo_Filtro))
                                            @if ($pro->type_costumer_clothe == $catalogo_Filtro)
                                                <div class="col-lg-4 ">
                                                    <div class="item p-2 card shadow-sm">
                                                        <div class="thumb">
                                                            <div class="hover-content">
                                                                <ul>
                                                                    <li><a
                                                                            href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                                class="fa fa-eye"></i></a></li>
                                                                    <li><a href="single-product.html"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ $pro->img }}" alt="">
                                                        </div>
                                                        <hr>
                                                        <div class="down-content" style="padding: 0 10px !important">
                                                            <h4>{{ $pro->name }}</h4>
                                                            <span>Precio: ${{ $pro->price }}</span>
                                                            <span>{{ $pro->type_costumer_clothe }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <div class="col-lg-4 ">
                                                <div class="item p-2 card shadow-sm">
                                                    <div class="thumb">
                                                        <div class="hover-content">
                                                            <ul>
                                                                <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                            class="fa fa-eye"></i></a></li>
                                                                <li><a href="single-product.html"><i
                                                                            class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ $pro->img }}" alt="">
                                                    </div>
                                                    <hr>
                                                    <div class="down-content" style="padding: 0 10px !important">
                                                        <h4>{{ $pro->name }}</h4>
                                                        <span>Precio: ${{ $pro->price }}</span>
                                                        <span>{{ $pro->type_costumer_clothe }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @php
                                            $aux = $pro->name;
                                        @endphp
                                    @endif
                                @endif
                            @endif
                        @else
                            @if ($pro->name != $aux)
                                @if (isset($catalogo_Filtro))
                                    @if ($pro->type_costumer_clothe == $catalogo_Filtro)
                                        <div class="col-lg-4 ">
                                            <div class="item p-2 card shadow-sm">
                                                <div class="thumb">
                                                    <div class="hover-content">
                                                        <ul>
                                                            <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                            <li><a href="single-product.html"><i
                                                                        class="fa fa-shopping-cart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <img src="{{ $pro->img }}" alt="">
                                                </div>
                                                <hr>
                                                <div class="down-content" style="padding: 0 10px !important">
                                                    <h4>{{ $pro->name }}</h4>
                                                    <span>Precio: ${{ $pro->price }}</span>
                                                    <span>{{ $pro->type_costumer_clothe }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-lg-4 ">
                                        <div class="item p-2 card shadow-sm">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                        <li><a href="single-product.html"><i
                                                                    class="fa fa-shopping-cart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <img src="{{ $pro->img }}" alt="">
                                            </div>
                                            <hr>
                                            <div class="down-content" style="padding: 0 10px !important">
                                                <h4>{{ $pro->name }}</h4>
                                                <span>Precio: ${{ $pro->price }}</span>
                                                <span>{{ $pro->type_costumer_clothe }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif

                            @php
                                $aux = $pro->name;
                            @endphp
                        @endif
                    @endforeach




                    {{-- <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
    
                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/men-01.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Classic Spring</h4>
                                <span>$120.00</span>
    
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-lg-12">
                        <div class="pagination">
                            <ul>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li class="active">
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}


                </div>
            </div>


        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@endsection
