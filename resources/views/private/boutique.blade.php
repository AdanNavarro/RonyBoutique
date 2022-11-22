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
                type="button" role="tab" aria-controls="tipoproducto" aria-selected="false">Categorías</button>
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
                    @include('private/boutique/clothes/create')
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
                    @include('private/boutique/trademarks/create')
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tipoproducto" role="tabpanel" aria-labelledby="tipoproducto-tab">
            @include('private/boutique/type_clothes/data')

            <div class="text-center">
                <a class="btn btn-outline-dark my-2 mx-auto" data-bs-toggle="collapse" href="#form_admins" role="button"
                    aria-expanded="false" aria-controls="form_admins">
                    Agregar Categoría
                </a>
            </div>
            <div class="collapse mt-3" id="form_admins">
                <div class="card card-body">
                    @include('private/boutique/type_clothes/create')
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #000">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #FFF">¡Talla repetida!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Elegiste 2 tallas repetidas, intenta escoger otra talla, o si no deseas poner ninguna mas, solo dejalo
                    vacio
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div> --}}

    <br>

    {{-- <script> ESTE ES EL MENOR DE MIS PROBLEMAS, ASI QUE CUANDO TODO ESTE LISTO, TE OCUPARAS DE ESTO
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false
        })

        // window.addEventListener("load", function(event) {
        //     myModal.show();
        // });

        //para verificar las tallas

        $("#talla1").on('change', () => {
            console.log("talla 1");

            let talla1 = $("#talla1").val();
            let talla2 = $("#talla2").val();
            let talla3 = $("#talla3").val();
            let talla4 = $("#talla4").val();
            let talla5 = $("#talla5").val();


            // alert("talla1");

            // if ($("#talla1").val() != "") {
                if (talla1 === talla2) {
                    alert("talla repetida 1");
                }
            // }
        });

            

        $("#talla2").change(function() {
            // alert("talla2");
        });

        $("#talla3").change(function() {
            // alert("talla3");
        });

        $("#talla4").change(function() {
            // alert("talla4");
        });

        $("#talla5").change(function() {
            // alert("talla5");
        });
    </script> --}}

    

@endsection
