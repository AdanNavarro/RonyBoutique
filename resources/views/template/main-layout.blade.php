<!DOCTYPE html>
<html lang="en">

<head>

    @include('template/elements/head')

    <title>Rony Boutique - @yield('titulo_pestaña')</title>

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
                        @include('template/elements/navbar')
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('contenido')

    <!-- ***** Footer Start ***** -->
    <footer>
        @include('template/elements/footer')
    </footer>

    @include('template/elements/scripts')

</body>

</html>
