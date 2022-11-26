@extends('template.main-layout')

@section('titulo_pestaña', 'Producto')

@section('contenido')
    <!-- ***** Main Banner Area Start ***** -->
    {{-- <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ***** Main Banner Area End ***** -->

    <br><br><br>

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="left-images">
                        <img src="{{ $productos[0]->img }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right-content">
                        <h4>{{ $productos[0]->name }}</h4>
                        <span class="price">${{ $productos[0]->price }}</span>
                        <br>
                        <span>{{ $productos[0]->description }}</span>
                        <span>
                            Marca:

                            @foreach ($trademarks as $tra)
                                @if ($productos[0]->trademark_id == $tra->id)
                                    {{ $tra->name }}
                                @endif
                            @endforeach

                        </span>
                        <span>
                            Tipo:

                            @foreach ($typeclothes as $clo)
                                @if ($productos[0]->type_clothes_id == $clo->id)
                                    {{ $clo->type }}
                                @endif
                            @endforeach

                        </span>
                        <span>Categoría: {{ $productos[0]->type_costumer_clothe }}</span>
                        <br>


                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option value="" selected disabled>Elige una opción</option>
                                @foreach ($productos as $pro)
                                    <option value="{{ $pro->size }}">{{ $pro->size }} - disponibles:
                                        {{ $pro->stock }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Talla</label>
                        </div>
                        <br><br>
{{-- 
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>Cantidad</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" step="1" min="1" max="" name="quantity"
                                        value="1" title="Qty" class="input-text qty text" size="4"
                                        pattern="" inputmode="">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                        </div> --}}
                        <div class="total w-100 text-center">
                            <div class="main-border-button w-100 text-center"><a href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
@endsection
