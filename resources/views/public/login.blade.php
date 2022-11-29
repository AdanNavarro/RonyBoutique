<!DOCTYPE html>
<html lang="en">

<head>

    @include('template/elements/head')

    <title>Rony Boutique - Iniciar Sesión</title>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/images/Resources Logo/LogoHorizontal.png') }}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('inicio') }}" class="active">Inicio</a></li>

                            {{-- Submenu --}}
                            <li class="submenu">
                                <a href="{{ route('catalogo.index') }}" class="">Catálogo</a>
                                <ul>
                                    <li><a href="{{ route('catalogo.hombre') }}" class="">Hombres</a></li>
                                    <li><a href="{{ route('catalogo.mujer') }}" class="">Mujeres</a>
                                    </li>
                                    <li><a href="{{ route('catalogo.nino') }}" class="">Niños y
                                            Niñas</a></li>
                                    <li><a href="{{ route('catalogo.accesorio') }}" class="">Accesorios</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="{{ route('sobre.nosotros') }}" class="">Sobre
                                    Nosotros</a>
                            </li>

                            <li><a href="#">|</a></li>

                            <li><a href="{{ route('login') }}" class="">Iniciar Sesión</a></li>

                            <li><a href="{{-- route('') --}}" class="">Registrarse</a></li>



                            {{-- En caso de que no haya iniciado sesión --}}
                            {{-- <li><a href="{{ route('') }}" class="">Iniciar Sesión</a></li>
    <li><a href="{{ route('') }}" class="">Registrarse</a></li> --}}

                            {{-- Dashboard --}}
                            {{-- <li class="scroll-to-section"><a href="{{ route('tablero.dashboard') }}" class="">Tablero</a></li> --}}

                            {{-- Cuando haya iniciado sesión --}}

                            {{-- <li><a href="{{-- route('') " class="">Usuario</a></li> --}}

                            {{-- <li><a href="{{ route('cart.list') }}" class="">Carrito ({{ Cart::getContent()->count() }})</a></li> --}}

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <br>
    <br>
    <br>
    <br>
    <br>

    <style>
        .body-b {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

    <div class="body-b text-center">
        <main class="form-signin">
            <form method="post" action="{{ route('inicio') }}">
                @csrf
                <input type="hidden" name="inicio" value="inicio">

                <img class="mb-5" src="{{ asset('assets/images/Resources Logo/LogoHorizontal.png') }}" alt=""
                    style="max-height: 75px">
                <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Correo Electronico</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <button class="w-100 mt-5 btn btn-lg btn-dark" type="submit">Iniciar Sesión</button>
            </form>

        </main>
    </div>


    <!-- ***** Footer Start ***** -->
    <footer>
        @include('template/elements/footer')
    </footer>

    @include('template/elements/scripts')

</body>

</html>
