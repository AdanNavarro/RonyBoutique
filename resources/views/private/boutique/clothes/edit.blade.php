<form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="">

    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <label for="trademark_id" class="form-label">Marca</label>
            <input class="form-control" type="text" name="trademark_id" id="trademark_id" required value="">
            {{-- Esto sería un select --}}
            <div class="invalid-feedback">
                Elije una Marca
            </div>
            <div class="valid-feedback">
                Marca Correcta
            </div>
        </div>

        <div class="col-md-4">
            <label for="type_clothes_id" class="form-label">Tipo de Producto</label>
            <input class="form-control" type="text" name="type_clothes_id" id="type_clothes_id" required
                value="">
            {{-- Esto sería un select --}}
            <div class="invalid-feedback">
                Elije un tipo de producto
            </div>
            <div class="valid-feedback">
                Tipo de producto correcto
            </div>
        </div>

        <div class="col-md-4">
            <label for="type_costumer_clothe" class="form-label">Hecho para</label>
            <select class="form-select" name="type_costumer_clothe" id="type_costumer_clothe" required value="">
                <option value="" disabled selected>Elije una opción</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="Unisex">Unisex</option>
                <option value="Niños y Niñas">Niños y Niñas</option>
                <option value="Accesorio">Accesorio</option>
            </select>
            <div class="invalid-feedback">
                Elije una opción
            </div>
            <div class="valid-feedback">
                Opción válida
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">

        <div class="col-md-5">
            <label for="name" class="form-label">Nombre del Producto</label>
            <input class="form-control" type="text" name="name" id="name"
                placeholder="Titulo épico para tu producto..." maxlength="60" required value="">
            <div class="invalid-feedback">
                Escriba un Nombre adecuado
            </div>
            <div class="valid-feedback">
                Nombre de producto válido
            </div>
        </div>

        <div class="col-md-5">
            <label for="img" class="form-label">Imagen del Producto</label>
            <input class="form-control" type="file" name="img" id="img" required>
            <div class="invalid-feedback">
                Añada una imagen para su producto
            </div>
            <div class="valid-feedback">
                Imagen correcta
            </div>
        </div>

        <div class="col-md-2">
            <label for="price" class="form-label">Precio</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">$</span>
                <input type="text" class="form-control" name="price" id="price" placeholder="150.99"
                    value="">
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <label for="size" class="form-label">Tamaños y Cantidad</label>

            <div class="input-group mb-3">
                <select class="form-select" name="size1" id="size1" required>
                    <option value="" disabled selected>Elije una opción</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <input type="number" name="stock1" id="stock1" placeholder="Cantidad en inventario"
                    class="form-control" required>
            </div>

            <div class="input-group mb-3" id="talla1" style="display: none">
                <select class="form-select" name="size2" id="size2">
                    <option value="" disabled selected>Elije una opción</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <input type="number" name="stock2" id="stock2" placeholder="Cantidad en inventario"
                    class="form-control" min="1">
            </div>

            <div class="input-group mb-3" id="talla2" style="display: none">
                <select class="form-select" name="size3" id="size3">
                    <option value="" disabled selected>Elije una opción</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <input type="number" name="stock3" id="stock3" placeholder="Cantidad en inventario"
                    class="form-control" min="1">
            </div>

            <div class="input-group mb-3" id="talla3" style="display: none">
                <select class="form-select" name="size4" id="size4">
                    <option value="" disabled selected>Elije una opción</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <input type="number" name="stock4" id="stock4" placeholder="Cantidad en inventario"
                    class="form-control" min="1">
            </div>

            <div class="input-group mb-3" id="talla4" style="display: none">
                <select class="form-select" name="size5" id="size5">
                    <option value="" disabled selected>Elije una opción</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                <input type="number" name="stock5" id="stock5" placeholder="Cantidad en inventario"
                    class="form-control" min="1">
            </div>

            <button class="btn btn-outline-dark" id="buttonTalla" onclick="AgregarTallaF()">Agregar otra
                Talla</button>

            {{-- Solo poner Display None y listo --}}

            {{-- <div class="input-group">
                <input type="text" placeholder="Talla" class="form-control">
                <input type="text" placeholder="Cant. en inventario" class="form-control">
            </div> --}}

            {{-- <select class="form-select" name="size" id="size" required>
                <option value="" disabled selected>Elije una opción</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>
            <div class="invalid-feedback">
                Elija una talla válida
            </div>
            <div class="valid-feedback">
                Talla correcta
            </div> --}}
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <label for="description" class="form-label">Descripción del producto</label>
            <textarea name="description" id="description" cols="30" rows="10" required>{{-- value --}}</textarea>
            <div class="invalid-feedback">
                Ingrese una descripción válida
            </div>
            <div class="valid-feedback">
                Descripción válida
            </div>
        </div>
    </div>


    <button class="btn btn-outline-dark mt-3 mr-3" type="submit">Guardar</button>
    <button class="btn btn-outline-dark mt-3" type="reset">Limpiar</button>

</form>

<script>
    var AgregarTalla = 1;

    function AgregarTallaF() {

        switch (AgregarTalla) {
            case 1:

                $("#talla1").show();

                AgregarTalla = AgregarTalla + 1;

                break;
            case 2:

                $("#talla2").show();

                AgregarTalla = AgregarTalla + 1;

                break;
            case 3:

                $("#talla3").show();

                AgregarTalla = AgregarTalla + 1;

                break;
            case 4:

                $("#talla4").show();

                AgregarTalla = AgregarTalla + 1;

                $("#buttonTalla").hide();

                break;

        }

        // alert("asdlkjnasd");


    };
</script>

{{-- 
<div class="col-md-">
    <label for="" class="form-label"></label>
    <input class="form-control" type="" name="" id="" placeholder="" required>
    <div class="invalid-feedback">
        Ingrese un correo electrónico válido
    </div>
    <div class="valid-feedback">
        Correo electrónico válido
    </div>
</div> 
--}}
