@extends('template.main-layout')

@section('titulo_pestaña', 'Confirmación')

@section('contenido')

    <br>
    <br>

    <section class="pt-5 pb-5 mt-5">
        <div class="container">

            <h3 class="display-5 mb-5 text-center">Confirmación de compra</h3>

            <div class="row mt-5 d-flex align-items-center">
                <div class="col-sm-12 order-md-2 text-center">
                    <a href="{{ route('cart.list') }}" class="btn btn-outline-dark mb-4 btn-lg pl-5 pr-5">Volver</a>
                </div>
            </div>

            <div class="row w-100">

                <br><br><br><br>
                <div class="col-lg-8">


                    <h4>Método de Pago</h4>
                    <br>
                    <label class="form-label" for="">Seleccione una opción</label>
                    <select class="form-select mb-3" name="MetodoPago" id="MetodoPago">
                        <option selected disabled value="">Escoga uno</option>
                        <option value="tarjeta">Tarjeta crédito/débito</option>
                        <option value="efectivo">Efectivo</option>
                    </select>



                    <div id="tarjeta" style="display: none">



                        <label for="" class="form-label">Número de Tarjeta</label>
                        <input type="text" class="form-control " placeholder="0000 0000 0000 0000">


                        <div class="row mt-3 mb-3">

                            <div class="col-md-6 mb-3">

                                <label class="form-label">Fecha de expiración</label>

                                <input type="text" class="form-control" placeholder="MM/YY" maxlength="5">


                            </div>

                            <div class="col-md-6 mb-3">

                                <label class="form-label">CVC/CVV</label>

                                <input type="password" class="form-control" placeholder="000" maxlength="3">
                            </div>


                        </div>

                    </div>

                    <script>
                        // $(document).ready(function() {
                        //     $("#MostrarEfectivo").show();
                        // });

                        // $("#MetodoPago").change(function() {
                        //     var MetodoPago = $("#MetodoPago").val()

                        //     switch (MetodoPago) {
                        //         case "efectivo":
                        //             // alert("efecitvo");
                        //             $("#tarjeta").hide();
                        //             break;
                        //         case "tarjeta":
                        //             // alert("puto");
                        //             $("#tarjeta").show();
                        //             break;
                        //     }
                        // });

                        const selectElement = document.querySelector('#MetodoPago');

                        selectElement.addEventListener('change', (event) => {
                            var valor = event.target.value;

                            switch (valor) {
                                case "efectivo":
                                    // alert("efecitvo");
                                    document.getElementById("tarjeta").style.display = "none";
                                    break;
                                case "tarjeta":
                                    // alert("puto");
                                    document.getElementById("tarjeta").style.display = "block";
                                    break;
                            }
                        });
                    </script>

                    <br>
                    <h6>Escriba su dirección para enviarle sus productos (en caso de seleccionar efectivo se le cobrará al
                        llegar a su domicilio)</h6>
                    <br>

                    <div class="form-group mb-3">
                        <label class="form-label" for="">Calle</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Código Postal</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Número Exterior</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Número interior (opcional)</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>


                    <br><br>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th style="width:50%">Producto</th>
                                <th style="width:25%">Precio Unitario</th>
                                <th style="width:15%">Precio</th>
                                <th style="width:20%">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $general_subtotal = 0;
                            @endphp

                            @foreach ($productos as $p)
                                @php
                                    $general_subtotal = $general_subtotal + $p->price * $p->quantity;
                                @endphp
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-md-3 text-left">
                                                <img src="{{ $p->attributes->img }}" alt=""
                                                    class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                            </div>
                                            <div class="col-md-9 text-left mt-sm-2">
                                                <h4>{{ $p->name }}</h4>
                                                {{-- <h4>{{ $p->id }}</h4> --}}
                                                <p class="font-weight-light">Descripción:
                                                    {{ $p->attributes->description }}</p>
                                                <p class="font-weight-light">Talla: {{ $p->attributes->size }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price_u">${{ $p->price }}</td>
                                    <td data-th="Price">${{ $p->price * $p->quantity }}</td>
                                    <td data-th="Quantity">
                                        <div class="col-xl-5 mb-2">
                                            {{ $p->quantity }}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <br><br>


                </div>

                <div class="col-lg-4">
                    <div class="card shadow ">

                        @php
                            $iva = $general_subtotal * 0.16;
                            $total = $general_subtotal + $iva;
                        @endphp

                        <div class="card-body">
                            <h5 class="card-title">Resúmen de compra</h5>
                            <hr>
                            <p class="card-text">
                                Productos: {{ Cart::getContent()->count() }}
                                <br>
                                Subtotal: ${{ number_format((float) $general_subtotal, 2, '.', '') }}
                                <br>
                                IVA: ${{ number_format((float) $iva, 2, '.', '') }}
                                <br>
                                Envío: $99
                                <br>
                                <hr>
                            <h5>
                                Total: ${{ number_format((float) $total, 2, '.', '') }}
                            </h5>

                            </p>
                            <hr>

                            <div class="w-100 text-center">
                                <a href="{{ route('cart.create.sale') }}"> 
                                    <button id="" class="btn btn-dark text-ce">
                                        Confirmar Compra
                                    </button>
                                </a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-12 order-md-2 text-center">
                    <a href="{{ route('cart.list') }}" class="btn btn-outline-dark mb-4 btn-lg pl-5 pr-5">Volver</a>
                </div>
            </div>
        </div>
    </section>

@endsection
