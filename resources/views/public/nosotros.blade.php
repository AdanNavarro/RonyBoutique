@extends('template.main-layout')

@section('titulo_pestaña', 'Sobre Nosotros')

@section('contenido')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Sobre nuestro Boutique</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>Sobre nosotros</h4>
                        <span> Somos una tienda boutique que vende ropa a la moda, tanto para niños y niñas, mujeres y hombres, así como tambien vendemos accesorios para que siempre estes a la moda. </span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Nuestro objetivo es que nuestros clientes siempre que entren salgan con un producto de nuestra tienda, y no por insistencia, si no por gusto de ellos al ver la ropa o accesorios que ofrecemos</p>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Nuestro Grandioso Equipo</h2>
                        <span>Encargados del boutique, productos, distribución y marketing</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-01.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Susana Torres</h4>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-02.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ronaldo Ismael</h4>
                            <span>Director general</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-03.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Juan Carlos Villareal</h4>
                            <span>Encargado de productos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Misión, Visión y Objetivos</h2>
                        <span>Con esto compartimos nuestra visión a futuro para que te conozcas mas sobre nosotros y lo que hacemos</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Misón</h4>
                        <p>Ofrecer a nuestros clientes productos de calidad, a precios cómodos que cumplan con sus necesidades y exigencias, abarcando sus gustos de acuerdo a su estilo de ver y vivir la vida.</p>
                        <img src="assets/images/service-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Visión</h4>
                        <p>Ser una empresa  líder y reconocida en la venta de ropa Rony Boutique, lograr también extendernos y crear  nuestras cadenas de almacenes, proporcionando cada día más un servicio de excelencia a nuestros clientes y que al mismo tiempo nos permitan competir en el mercado nacional con los mejores precios del mercado</p>
                        <img src="assets/images/service-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Objetivo</h4>
                        <p>Ofrecer ropa de mejor calidad satisfaga las  necesidades y gustos del mercado potencial, vender ropa a la moda que cumpla con los requerimientos de estilo en el segmento  del mercado.</p>
                        <img src="assets/images/explore-image-01.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->


@endsection
