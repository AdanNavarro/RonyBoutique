@extends('template.main-layout')

@section('titulo_pestaña', 'Carrito')

@section('contenido')

    <br>
    <br>

    <section class="pt-5 pb-5 mt-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Carrito de compras</h3>
                    <a href="catalog.html" style="color: black">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i> &nbsp; Continuar viendo
                    </a>
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-green-400 rounded">
                            <p class="text-green-800">{{ $message }}</p>
                        </div>
                    @endif
                    <br><br>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th style="width:50%">Producto</th>
                                <th style="width:15%">Precio Unitario</th>
                                <th style="width:15%">Precio</th>
                                <th style="width:20%" colspan="2">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- 'id' => $request->id,
                                'name' => $request->name,
                                'price' => $request->price,
                                'quantity' => $request->quantity,
                                'attributes' => array(
                                    'type_clothes_id' => $request->type_clothes_id,
                                    'type_costumer_clothe' => $request->type_costumer_clothe,
                                    'size' => $request->size,
                                    'description' => $request->description,
                                    'stock' => $request->stock,
                                    'img' => $request->img,
                                ), --}}

                            @php
                                $general_subtotal = 0;
                            @endphp

                            @foreach ($cartItems as $item)
                                @php
                                    $general_subtotal = $general_subtotal + ($item->price * $item->quantity);
                                @endphp

                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-md-3 text-left">
                                                <img src="{{ $item->attributes->img }}" alt=""
                                                    class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                            </div>
                                            <div class="col-md-9 text-left mt-sm-2">
                                                <h4>{{ $item->name }}</h4>
                                                <p class="font-weight-light">Descripción:
                                                    {{ $item->attributes->description }}</p>
                                                <p class="font-weight-light">Talla: {{ $item->attributes->size }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price_u">${{ $item->price }}</td>
                                    
                                    <td data-th="Price">${{ $item->price * $item->quantity }}</td>

                                    <td data-th="Quantity">
                                        <form action="{{ route('cart.update') }}" class="row" method="POST">
                                            @csrf
                                            <div class="col-xl-5 mb-2">
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="number" name="quantity" class="form-control text-center w-100"
                                                    value="{{ $item->quantity }}">
                                            </div>
                                            <div class="col-xl mb-2">
                                                <button type="submit"
                                                    class="btn btn-outline-dark border-secondary  w-100 btn-md mb-2">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="col-xl mb-2">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="btn btn-outline-dark border-secondary  w-100 btn-md mb-2">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
{{-- 
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt=""
                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>Product Name</h4>
                                            <p class="font-weight-light">Brand &amp; Name</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">$49.00</td>
                                <td data-th="Quantity">
                                    <form action="#" method="POST" class="row">
                                        @csrf
                                        <div class="col-xl-5 mb-2">
                                            <input type="number" class="form-control text-center w-100" value="1">
                                        </div>
                                        <div class="col-xl mb-2">
                                            <button type="submit"
                                                class="btn btn-outline-dark border-secondary  w-100 btn-md mb-2">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="col-xl mb-2">
                                        <form action="#" method="POST">
                                            @csrf
                                            <input type="hidden" value="1" name="id">
                                            <button class="btn btn-outline-dark border-secondary  w-100 btn-md mb-2">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                             --}}

                        </tbody>
                    </table>

                    <br><br>

                    @php
                        $iva = $general_subtotal * 0.16;
                        $total = $general_subtotal + $iva;
                    @endphp

                    <div class="row ">
                        <div class="col-md-4 text-center">
                            <h4>Subtotal:</h4>
                            <h1>${{ number_format((float)$general_subtotal, 2, '.', ''); }}</h1>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>IVA:</h4>
                            <h1>${{ number_format((float)$iva, 2, '.', ''); }}</h1>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>Total:</h4>
                            <h1>${{ number_format((float)$total, 2, '.', ''); }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-12 order-md-2 text-center">
                    <a href="{{ route('cart.create.sale') }}" class="btn btn-dark mb-4 btn-lg pl-5 pr-5">Confirmar Compra</a>
                </div>
                <div class="col-sm-12 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="catalog.html" style="color: black">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i> &nbsp; Continuar viendo
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
