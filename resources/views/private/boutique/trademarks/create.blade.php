<form action="" method="post" class="needs-validation" novalidate>
    @csrf

    <input type="hidden" name="id">

    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <label for="name" class="form-label">Nombre de la Marca</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Marca..." required>
            <div class="invalid-feedback">
                Ingrese un nombre
            </div>
            <div class="valid-feedback">
                Nombre válido
            </div>
        </div> 
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <label for="description" class="form-label">Descripción de la marca (opcional)</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3" placeholder="Descripción de la marca..."></textarea>
            <div class="invalid-feedback">
                Ingrese un nombre
            </div>
            <div class="valid-feedback">
                La descripción es opcional
            </div>
        </div>
    </div>


    <button class="btn btn-outline-dark mt-3 mr-3" type="submit">Guardar</button>
    <button class="btn btn-outline-dark mt-3" type="reset">Limpiar</button>

</form>


{{-- 
<div class="row g-3 mb-3">
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
</div>
--}}
