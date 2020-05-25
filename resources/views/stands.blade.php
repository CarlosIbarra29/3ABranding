@extends('layouts.secundario')

@section('title', 'Stands')


@section('content')
   <div id="about" class="container-fluid ">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>STANDS</h2>
            <hr class="hr_p">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>Brindamos soluciones integrales, con puntualidad, calidad y servicio personalizado</h4>
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-12 slide text-center">
            <p class="text-center">
                <img src="{{ asset('img/img_3a/stands.jpg') }}" width="50%">
            </p>
             <p><span class="glyphicon glyphicon-ok-circle"></span> Ofrecemos soluciones para stands de 3×3, 6×3, 6×6 y 9×9. </p>
            <p><span class="glyphicon glyphicon-ok-circle"></span> Venta, resguardo y mantenimiento de stands.</p>
        </div>
    </div>

</div>

@endsection



