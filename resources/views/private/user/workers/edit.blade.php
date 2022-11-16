<form action="" method="post" class="needs-validation" novalidate>
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="">

    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <label for="type" class="form-label">Tipo de Usuario</label>
            <input class="form-control" type="text" name="type" id="type" readonly value="Empleado">

        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <label for="name" class="form-label">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre del usuario..."
                required value="">
            <div class="invalid-feedback">
                Ingrese un nombre correcto
            </div>
            <div class="valid-feedback">
                Nombre correcto
            </div>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="ejemplo@gmail.com"
                required value="">
            <div class="invalid-feedback">
                Ingrese un correo electrónico válido
            </div>
            <div class="valid-feedback">
                Correo electrónico válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="RFC" class="form-label">RFC</label>
            <input class="form-control" type="text" name="RFC" id="RFC" placeholder="Ingrese el RFC"
                required value="">
            <div class="invalid-feedback">
                Ingrese un RFC válido
            </div>
            <div class="valid-feedback">
                RFC válido
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-6">
            <label for="password" class="form-label">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="8 a 25 caracteres"
                minlength="8" maxlength="25" required value="">
            <div class="invalid-feedback">
                Ingrese una contraseña válida - 8 a 25 caracteres
            </div>
            <div class="valid-feedback">
                Contraseña válida
            </div>
        </div>

        <div class="col-md-6">
            <label for="number_phone" class="form-label">Número de Teléfono</label>
            <input class="form-control" type="text" name="number_phone" id="number_phone" placeholder="1234567890"
                pattern="[1-9]{1}[0-9]{9}" required value="">
            <div class="invalid-feedback">
                Ingrese un número de teléfono válido
            </div>
            <div class="valid-feedback">
                Número de teléfono válido
            </div>
        </div>

    </div>

    <button class="btn btn-outline-dark mt-3 mr-3" type="submit">Guardar</button>
    <button class="btn btn-outline-dark mt-3" type="reset">Limpiar</button>

</form>

{{-- <div class="col-md-">
    <label for="" class="form-label"></label>
    <input class="form-control" type="" name="" id="" placeholder="" required>
    <div class="invalid-feedback">
        Ingrese un correo electrónico válido
    </div>
    <div class="valid-feedback">
        Correo electrónico válido
    </div>
</div> --}}
