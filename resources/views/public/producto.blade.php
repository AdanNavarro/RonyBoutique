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

                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating">
                                <select class="form-select" name="size" id="size" aria-label="Floating label select example" required>
                                    <option value="" selected disabled>Elige una opción</option>
                                    @foreach ($productos as $pro)
                                        <option value="{{ $pro->size }}">{{ $pro->size }} - disponibles:
                                            {{ $pro->stock }}</option>
                                    @endforeach
                                </select>
                                <label for="size">Talla</label>
                            </div>
                            <br><br>

                            <div class="total w-100 text-center">

                                {{-- 'id' => $request->id,
                                'type_clothes_id' => $request->type_clothes_id,
                                'type_costumer_clothe' => $request->type_costumer_clothe,
                                'name' => $request->name,
                                'size' => $request->size,
                                'description' => $request->description,
                                'price' => $request->price,
                                'stock' => $request->stock,
                                'img' => $request->img,
                                'quantity' => $request->quantity --}}

                                <input type="hidden" name="id" value="{{ $productos[0]->id }}">
                                <input type="hidden" name="type_clothes_id" value="{{ $productos[0]->type_clothes_id }}">
                                <input type="hidden" name="type_costumer_clothe" value="{{ $productos[0]->type_costumer_clothe }}">
                                <input type="hidden" name="name" value="{{ $productos[0]->name }}">
                                {{-- <input type="hidden" name="size" valu$productos[0]="{{ $pro->size }}"> --}}
                                <input type="hidden" name="description" value="{{ $productos[0]->description }}">
                                <input type="hidden" name="price" value="{{ $productos[0]->price }}">
                                <input type="hidden" name="stock" value="{{ $productos[0]->stock }}">
                                <input type="hidden" name="img" value="{{ $productos[0]->img }}">
                                <input type="hidden" name="quantity" value="1">


                                <div class="main-border-button w-100 text-center">
                                    <button class="btn btn-dark" type="submit">Añadir al carrito</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
@endsection
