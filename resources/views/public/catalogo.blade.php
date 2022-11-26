@extends('template.main-layout')

@section('titulo_pestaña', 'Catalogo')

@section('contenido')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Catálogo</h2>
                        <h3 class="text-white">Echa un vistazo a los últimos productos agregados de nuestro catálogo</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Últimos productos agregados</h2>
                        <span>Echa un vistazo, se que alguno te agradará</span>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container">

            <div class="row">

                @php
                    $aux = '';
                @endphp

                @foreach ($productos as $pro)
                    @if ($pro->name != $aux)
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{ route('catalogo.producto', $pro->id) }}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ $pro->img }}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ $pro->name }}</h4>
                                    <span>${{ $pro->price }}</span>
                                    {{-- {{ $pro->id }} --}}
                                </div>
                            </div>
                        </div>
                    @endif
                    @php
                        $aux = $pro->name;
                    @endphp
                @endforeach




                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/men-02.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Air Force 1 X</h4>
                            <span>$90.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/men-03.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Love Nana ‘20</h4>
                            <span>$150.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/women-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>New Green Jacket</h4>
                            <span>$75.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/women-02.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Dress</h4>
                            <span>$45.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/women-03.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Spring Collection</h4>
                            <span>$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/kid-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>School Collection</h4>
                            <span>$80.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/kid-02.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Summer Cap</h4>
                            <span>$12.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="assets/images/kid-03.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Kid</h4>
                            <span>$30.00</span>

                        </div>
                    </div>
                </div>



                {{-- <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@endsection
