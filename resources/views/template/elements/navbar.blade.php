<!-- ***** Logo Start ***** -->
<a href="index.html" class="logo">
    <img src="{{ asset('assets/images/Resources Logo/LogoHorizontal.png') }}">
</a>
<!-- ***** Logo End ***** -->
<!-- ***** Menu Start ***** -->
<ul class="nav">
    <li class="scroll-to-section"><a href="{{ route('inicio') }}" class="@yield('inicio')">Inicio</a></li>

    {{-- Submenu --}}
    <li class="submenu">
        <a href="{{ route('catalogo.index') }}" class="@yield('catalogo')">Catálogo</a>
        <ul>
            <li><a href="{{ route('catalogo.hombre') }}" class="@yield('hombres')">Hombres</a></li>
            <li><a href="{{ route('catalogo.mujer') }}" class="@yield('mujeres')">Mujeres</a></li>
            <li><a href="{{ route('catalogo.nino') }}" class="@yield('niños')">Niños y Niñas</a></li>
            <li><a href="{{ route('catalogo.accesorio') }}" class="@yield('accesorios')">Accesorios</a></li>
        </ul>
    </li>

    <li class="scroll-to-section"><a href="{{ route('sobre.nosotros') }}" class="@yield('sobrenosotros')">Sobre Nosotros</a>
    </li>

    <li><a href="#">|</a></li>

    <li><a href="{{route('miusuario')}}" class="@yield('usuario')">Mis Pedidos</a></li>
    <li><a href="{{ route('cart.list') }}" class="@yield('carrito')">Carrito
            ({{ Cart::getContent()->count() }})</a></li>

            <li><a href="{{route('inicioempleado')}}" class="">Cerrar Sesión</a></li>


    {{-- En caso de que no haya iniciado sesión --}}
    {{-- <li><a href="{{ route('') }}" class="@yield("iniciarsesion")">Iniciar Sesión</a></li>
    <li><a href="{{ route('') }}" class="@yield("registrarse")">Registrarse</a></li> --}}

    {{-- Dashboard --}}
    {{-- <li class="scroll-to-section"><a href="{{ route('tablero.dashboard') }}" class="@yield("tablero")">Tablero</a></li> --}}

    {{-- Cuando haya iniciado sesión --}}

    {{-- <li><a href="{{-- route('') " class="@yield("usuario")">Usuario</a></li> --}}

    {{-- <li><a href="{{ route('cart.list') }}" class="@yield("carrito")">Carrito ({{ Cart::getContent()->count() }})</a></li> --}}

</ul>
<a class='menu-trigger'>
    <span>Menu</span>
</a>
<!-- ***** Menu End ***** -->
