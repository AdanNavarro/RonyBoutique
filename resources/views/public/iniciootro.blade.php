<!DOCTYPE html>
<html lang="en">

<head>

    @include('template/elements/head')

    <title>Rony Boutique - Inicio</title>

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

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Nosotros somos <br> Rony Boutique
                                </h4>
                                <span>La mejor tienda de ropa que encontraras en Guadalajara</span>
                                <div class="main-border-button">
                                    <a href="{{ route('catalogo.index') }}">¡Comprar ahora!</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/left-banner-image.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Mujeres</h4>
                                            <span>La mejor ropa para mujer</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Mujeres</h4>
                                                <p>Aquí encontraras la mejor ropa y los mejores accesorios para mujeres
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('catalogo.mujer') }}">Descubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=" {{ asset('assets/images/baner-right-image-01.jpg') }} ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Hombres</h4>
                                            <span>La mejor ropa para hombre </span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Hombres</h4>
                                                <p>Aquí encontraras la mejor ropa y los mejores accesorios para Hombres
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('catalogo.hombre') }}">Descubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=" {{ asset('assets/images/baner-right-image-02.jpg') }} ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Niños</h4>
                                            <span>La mejor ropa para los niños</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Niños</h4>
                                                <p>Aquí encontraras la mejor ropa y los mejores accesorios para Niños
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('catalogo.nino') }}">Descubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=" {{ asset('assets/images/baner-right-image-03.jpg') }} ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accesorios</h4>
                                            <span>Los mejores accesorios para ti</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accesorios</h4>
                                                <p>Aquí encontraras los mejores accesorios para ti
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('catalogo.accesorio') }}">Descubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src=" {{ asset('assets/images/baner-right-image-04.jpg') }} ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Lo ultimo en Hombres</h2>
                        <span>Aquí hay ropa que se acaba de agregar para los hombres</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">

                            @php
                                $aux = '';
                            @endphp

                            @foreach ($productos as $pro)
                                @if ($pro->name != $aux)
                                    @if ($pro->type_costumer_clothe == 'Hombres' || $pro->type_costumer_clothe == 'Unisex')
                                        <div class="item p-2 card shadow-sm">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                        <li><a href="single-product.html"><i
                                                                    class="fa fa-shopping-cart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <img src="{{ $pro->img }}" alt="">
                                            </div>
                                            <hr>
                                            <div class="down-content" style="padding: 0 10px !important">
                                                <h4>{{ $pro->name }}</h4>
                                                <span>Precio: ${{ $pro->price }}</span>
                                                <span>{{ $pro->type_costumer_clothe }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @php
                                    $aux = $pro->name;
                                @endphp
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** men Area Ends ***** -->

    <!-- ***** women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Lo ultimo en Mujeres</h2>
                        <span>Aquí hay ropa que se acaba de agregar para las Mujeres</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">

                            @php
                                $aux = '';
                            @endphp

                            @foreach ($productos as $pro)
                                @if ($pro->name != $aux)
                                    @if ($pro->type_costumer_clothe == 'Mujeres' || $pro->type_costumer_clothe == 'Unisex')
                                        <div class="item p-2 card shadow-sm">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                        <li><a href="single-product.html"><i
                                                                    class="fa fa-shopping-cart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <img src="{{ $pro->img }}" alt="">
                                            </div>
                                            <hr>
                                            <div class="down-content" style="padding: 0 10px !important">
                                                <h4>{{ $pro->name }}</h4>
                                                <span>Precio: ${{ $pro->price }}</span>
                                                <span>{{ $pro->type_costumer_clothe }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @php
                                    $aux = $pro->name;
                                @endphp
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Lo ultimo en Niños</h2>
                        <span>Aquí hay ropa que se acaba de agregar para los Niños</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            @php
                                $aux = '';
                            @endphp

                            @foreach ($productos as $pro)
                                @if ($pro->name != $aux)
                                    @if ($pro->type_costumer_clothe == 'Niños y Niñas')
                                        <div class="item p-2 card shadow-sm">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                        <li><a href="single-product.html"><i
                                                                    class="fa fa-shopping-cart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <img src="{{ $pro->img }}" alt="">
                                            </div>
                                            <hr>
                                            <div class="down-content" style="padding: 0 10px !important">
                                                <h4>{{ $pro->name }}</h4>
                                                <span>Precio: ${{ $pro->price }}</span>
                                                <span>{{ $pro->type_costumer_clothe }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @php
                                    $aux = $pro->name;
                                @endphp
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->




    {{-- Aún en duda de si esta sección debería estar aqui --}}

    {{-- <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or
                            edit this layout. You can convert this template as any kind of ecommerce CMS theme as you
                            wish.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        </div>
                        <p>There are 5 pages included in this HexaShop Template and we are providing it to you for
                            absolutely free of charge at our TemplateMo website. There are web developHombrest costs for us.
                        </p>
                        <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow"
                                href="https://paypal.me/templatemo" target="_blank">support us</a> a little via
                            PayPal. Please also tell your friends about our great website. Thank you.</p>
                        <div class="main-border-button">
                            <a href="products.html">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src=" {{ asset('assets/images/explore-image-01.jpg') }}  ">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src=" {{ asset('assets/images/explore-image-02.jpg') }}  ">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src=" {{ asset('assets/images/instagram-01.jpg') }}  ">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src=" {{ asset('assets/images/instagram-02.jpg') }}  ">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src=" {{ asset('assets/images/instagram-03.jpg') }}  ">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src=" {{ asset('assets/images/instagram-04.jpg') }}  ">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src=" {{ asset('assets/images/instagram-05.jpg') }}  ">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src=" {{ asset('assets/images/instagram-06.jpg') }}  ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i
                                            class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a
                                            href="#">Instagram</a>, <a href="#">Behance</a>, <a
                                            href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** --> --}}

    <!-- ***** Footer Start ***** -->
    <footer>
        @include('template/elements/footer')
    </footer>

    @include('template/elements/scripts')

</body>

</html>
