<!doctype html>
<html lang="en">

<head>

    @include('template/dashboard/elements/head')

    <title>@yield('titulo_pestaña')</title>

</head>

<body id="body-pd">

    @include('template/dashboard/elements/header')

    @include('template/dashboard/elements/navbar')

    <!--Container Main start-->
    <div class="height-100 ">
        <h2>@yield('titulo')</h2>
        <p>@yield('descripcion')</p>

        @yield('contenido')
    </div>
    <!--Container Main end-->

    @include('template/dashboard/elements/scripts')

</body>

</html>
