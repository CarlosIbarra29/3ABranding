<!DOCTYPE HTML>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="{{ asset('img/logos/logo_3a.png') }}"/>
<link rel="stylesheet" href="{!! asset('css/global.css') !!}">
<link rel="stylesheet" href="{!! asset('css/jquery-ui.css') !!}">
<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('css/css_whats.css') !!}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

<html lang= "es">
    <head>
        <meta charset="utf-8">
        <title>3A Branding DEV | @yield('title')</title>
    </head>

    <body>

        {{-- seccion del header --}}
      @section('header')
    <script>
        $('.dropdown-toggle').click(function(e) {
      if ($(document).width() > 768) {
        e.preventDefault();

        var url = $(this).attr('href');


        if (url !== '#') {

          window.location.href = url;
        }

      }
        });
    </script>

    <style>
        @media only screen and (min-width: 768px) {
      .dropdown:hover .dropdown-menu {
        display: block;
      }
     }
    </style>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('img/logos/logo_3a.png') }}" alt="logo" title="3a" height="35px"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/nosotros">Nosotros</a></li>
                    <li><a href="/productos">Productos</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a style="font-size: 11px" href="/event">Event Marketing</a></li>
                            <li><a style="font-size: 11px" href="/impresiones">Impresiones</a></li>
                            <li><a style="font-size: 11px" href="/stands">Stands</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catálogos
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a style="font-size: 11px" href="/catalogo">Productos 2019</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/carrito"><span class="glyphicon glyphicon-shopping-cart"></span> Ver cotización</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <img src="{{ asset('img/logos/logo_3a.png') }}" alt="logo" title="3a" class="logo">
        <h1 style="font-size: 12px;">La forma más rápida y fácil de comprar promocionales.</h1>
        <form method="get" action="./productos.php" class="text-center">
            <div class="col-sm-12">
                <input type="text" class="form-control" style="border-radius: 50px;" required="" name="palabra_clave" id="coding_language" placeholder="¿Qué estás buscando?">
                <span class="glyphicon glyphicon-search form-control-feedback" style="padding-right: 40px; color: #3c3c3c;"></span>
            </div>
        </form>
    </div>
    <!-- Container (About Section) -->
    <div class="container-fluid barra_menu">
        <div class="row">
            <div class="col-sm-4 text-center contenido_barra">
                <span class="glyphicon glyphicon-envelope"></span> contacto@3abranding.com
            </div>
            <div class="col-sm-4 text-center contenido_barra">
                <span class="glyphicon glyphicon-phone-alt"></span> <a style="color: #fff;"> 52 7090 8638</a> o <a style="color: white;">52 7090 8639</a>
            </div>
            <div class="col-sm-4 text-center contenido_barra">
                <a href="https://twitter.com/"><img src="{{ asset('img/redes_sociales/gorjeo.png') }}" height="27px;" alt="twi" title="twitter"> </a>
                <a href="https://www.facebook.com/"><img src="{{ asset('img/redes_sociales/facebook.png') }}" height="27px;" alt="fb" title="facebokk"> </a>
                <a href="https://www.instagram.com"><img src="{{ asset('img/redes_sociales/linkedin.png') }}" height="25px;" alt="ins" title="insta"></a>
            </div>
        </div>
    </div>
      @show


{{-- seccion del Contenido --}}
      <div>
          @yield('content')
      </div>
{{-- Fin seccion del Contenido --}}



      {{-- seccion del footer --}}

@section('footer')
<div class="container-fluid" style="background-color:#3c3c3c">
    <div class="row">
        <div class="col-sm-4">
            <h4 style="color: white">3A BRANDING GROUP</h4>
            <p style="color: white">La forma más rápida y fácil de comprar promocionales.</p>
            <p style="color: white">Conoce más de nosotros.</p>
        </div>
        <div class="col-sm-4">
            <h4 style="color: white">USUARIOS</h4>
            <p ><a href="/productos" style="color: white">Cotiza aquí.</a></p>

            <a href="" style="color:#fff" data-toggle="modal" data-target="#clau"> Cláusulas de compra.</a>
        </div>
        <div class="col-sm-4">
            <h4 style="color: white">CONTACTO</h4>
            <p style="color: white">WhatsApp:   +52 1 55 6791 9161</p>
            <p style="color: white">(55) 7090 8638 | (55) 7090 8639</p>
            <p style="color: white">contacto@3abranding.com</p>
        </div>
    </div>
</div>

<div class="modal fade" id="clau" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cláusulas de compra.</h4>
            </div>
            <div class="modal-body">
                <p><b>GARANTÍA 3A BRANDING GROUP, S.A. de C.V.</b> garantiza cualquier producto contra defecto de fabricación y de impresión por un lapso de 20 días naturales a partir de la fecha de entrega. Todo producto será repuesto por otro igual o del mismo precio. Las reclamaciones y aclaraciones se reciben por escrito vía correo electrónico en un plazo no mayor a 3 días naturales del vencimiento de la garantía.</p>
                <p>
                    <b>ENTREGA</b> El tiempo de entrega normal es de 7 a 10 días naturales a partir de la fecha de autorización de originales o diseños. No nos hacemos responsables por demoras imputables al cliente, ni por cambios hechos sobre las instrucciones iniciales.

                    Para la entrega de artículos sin impresión el tiempo será de 1 a 5 días naturales una vez confirmada la liquidación total del pedido. Los retrasos generados por el cliente afectan la fecha de entrega.

                    Para el embarque de pedidos foráneos contamos con convenios con paqueterías, ahorrando hasta el 30% en su envío. Todo envío incluye seguro de la mercancía.

                    Toda cancelación por parte del cliente será sujeta de cargo de un 25% correspondiente al valor de los artículos cancelados.

                    La entrega de los artículos estará sujeta sin responsabilidad por nuestra parte a retrasos imprevistos tales como: emergencia nacional, regulaciones gubernamentales, cambios en la legislación aduanera, restricciones comerciales, dificultad en el abastecimiento de materias primas, demoras en los medios de transporte, de caso fortuito o de fuerza mayor.
                </p>
                <p>
                    <b>CONDICIONES DE PAGO</b> Cualquier pedido requiere el 50% de anticipo incluyendo el IVA. El saldo del pedido deberá ser liquidado antes de la entrega o del embarque, en caso de tratarse de un pedido foráneo.

                    Todos los pedidos se surtirán una vez que el abono de los depósitos o transferencias efectuadas por el cliente haya sido confirmado por el banco. En caso de realizar pagos a través de un depósito o transferencia bancaria, le solicitamos atentamente hacerlo referenciado (Nombre del Cliente), y notificar a nuestro departamento de cobranza vía correo electrónico cobranza@3abranding.com

                    De acuerdo con el artículo 193 de la ley de títulos y operaciones de crédito, se cobrara el 20% sobre el valor del cheque, en caso de ser devuelto por falta de fondos.


                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>


<footer class="container-fluid text-center footer_color">
    {{-- <div id="float-cta">
        <span>Cotiza en tiempo real
            ¡Envíanos un WhatsApp!
        </span>
        <a href=" https://wa.me/5215567919161">
            <img src="./img_3a/whatsapp.png" height="55px" alt="whats" title="whatsapp">
            <i class="fab fa-whatsapp" aria-hidden="true"></i>
            <i class="fa fa-times" aria-hidden="true"></i>
        </a>
    </div> --}}

    <p>2019 © 3A Branding - <a href="" style="color:#fff" data-toggle="modal" data-target="#myModal"> Aviso de Privacidad</a></p>
    <div class="modal fade" id="myModal" role="dialog" style="padding-top: 2px; ">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: black">Aviso de Privacidad. <img src="{{ asset('img//logos/logo_3a.png') }}" height="50px" alt="logo" title="logo"></h4>
                </div>
                <div class="modal-body text-left" style="color: black">
                    <p>
                        De acuerdo a lo Previsto en la “Ley Federal de Protección de Datos Personales”,
                        declara 3A BRANDING GROUP S.A. de C.V., ser una empresa legalmente constituida de conformidad con las
                        leyes mexicanas, con domicilio en "DOMICILIO"; y como responsable del tratamiento de sus datos personales, hace de su conocimiento que la información
                        de nuestros clientes es tratada de forma estrictamente confidencial por lo que al proporcionar sus datos
                        personales, tales como:
                    </p>
                    <p>
                        1.     Nombre <br>
                        2.     Teléfonos de Oficina y móviles<br>
                        3.     Correo Electrónico.<br>
                    </p>
                    <p>
                        Estos serán utilizados única y exclusivamente para los siguientes fines:
                    </p>
                    <p>
                        1.     Contacto directo con la persona.<br>
                        2.     Información de Servicios y promociones.<br>
                        3.     Cualquier finalidad análoga o compatible con las anteriores.<br>
                    </p>
                    <p>
                        Para prevenir el acceso no autorizado a sus datos personales y con el fin de asegurar que la información
                        sea utilizada para los fines establecidos en este aviso de privacidad, hemos establecido diversos procedimientos
                        con la finalidad de evitar el uso o divulgación no autorizados de sus datos, permitiéndonos tratarlos debidamente.
                        Así mismo, le informamos que sus datos personales pueden ser Transmitidos para ser tratados por personas distintas
                        a esta empresa.   Todos sus datos personales son tratados de acuerdo a la legislación aplicable y vigente en el país,
                        por ello le informamos que usted tiene en todo momento los derechos (ARCO) de acceder, rectificar, cancelar u oponerse
                        al tratamiento que le damos a sus datos personales; derecho que podrá hacer valer a través del Área de Privacidad
                        encargada de la seguridad de datos personales en el Teléfono "55-55-55-55".
                        A través de estos canales usted podrá actualizar sus datos y especificar el medio por el cual desea recibir información, ya que,
                        en caso de no contar con esta especificación de su parte, 3A BRANDING GROUP S.A. de C.V, establecerá libremente el canal que considere pertinente
                        para enviarle información.  Este aviso de privacidad podrá ser modificado por 3A BRANDING GROUP  S.A. de C.V., dichas modificaciones serán oportunamente
                        informadas a través de correo electrónico, teléfono, página web o cualquier otro medio de comunicación que 3A BRANDING GROUP S.A. de C.V., determine para tal efecto.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

</footer>
@show

    </body>

</html>
