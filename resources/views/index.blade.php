@extends('layouts.principal')

{{-- <script src="/public/js/efectos.js"></script>
<script src="js/img_zoom.js"></script>

<script type="text/javascript" src="/public/js/auto_complete.js"></script>
<script type="text/javascript" src="/public/js/jquery-ui.js"></script>
<script type="text/javascript" src="/public/js/acordeon.js"></script>

<script type="text/javascript" src="/public/js_pagination/responsive-paginate.js"></script> --}}

@section('title', 'Articulos')

@section('content')

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ6GPZD"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-caption texto_banner slide">

                        <div class="fondo_banner">
                            <h1 style="font-size: 22px">SOMOS EXPERTOS EN MARKETING PROMOCIONAL</h1>
                            <hr class="hr_imagen">
                            <p>Con un conocimiento profundo y una visión global del mercado</p>
                        </div>
                    </div>
                    <img src="{{ asset('img/banners/estrategias.jpg') }}" alt="expertos" title="expertos" class="img-responsive" >
                </div>

                <div class="item">
                    <div class="carousel-caption texto_banner slide">
                        <div class="fondo_banner">
                            <h1 style="font-size: 22px">CREAMOS ESTRATEGIAS COMERCIALES</h1>
                            <hr class="hr_imagen">
                            <p>De alta efectividad traducidas en una experiencia de marca exitosa</p>
                        </div>
                    </div>
                    <img src="{{ asset('img/banners/expertos.jpg') }}" alt="estrategias" title="estrategias" class="img-responsive">
                </div>

                <div class="item">
                    <div class="carousel-caption texto_banner slide">
                        <div class="fondo_banner">
                            <h1 style="font-size: 22px">CONOCE NUESTROS PRODUCTOS</h1>

                            <hr class="hr_imagen">
                            <a style="color: #3c3c3c; cursor: pointer;" href="/Cotizacion"><h4>Generar cotización aquí</h4></a>

                        </div>
                    </div>
                    <img src="{{ asset('img/banners/catalogo.jpg') }}" alt="ban" title="conoce" class="img-responsive">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div  class="container-fluid text-center bg-grey">
            <h3>3A BRANDING GROUP.</h3><br>
            <div class="row text-center ">
                {{--en class slideanim --}}
                <div class="col-sm-4">

                    <img src="{{ asset('img/img_3a/productos.png') }}" alt="variedad" title="variedad" height="120px">
                    <p>Variedad e innovación en nuestros productos.</p>

                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('img/img_3a/mexico.png') }}" height="120px" alt="servicio" title="servicio">
                    <p>Servicio en toda la República.</p>

                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('img/img_3a/atencion.png') }}" height="120px" title="atencion" alt="atencion">
                    <p>Atención personalizada.</p>
                </div>
            </div>
        </div>
        <div id="about" class="container-fluid ">
            <div class="row ">
                <div class="col-xs-12">
                  Contenido de productos  {{-- <?php include './php/productos_consulta.php'; ?> --}}
                </div>
            </div>
        </div>

        <a href="/productos"><img src="{{ asset('img/banners/ban.png') }}" class="img-responsive slide" alt="banner" title="banner"></a>

    </body>

    @endsection



