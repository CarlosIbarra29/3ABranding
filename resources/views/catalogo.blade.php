@extends('layouts.principal')

@section('title', 'Catalogo')

@section('content')
<div class="container-fluid">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 style="padding-top: 10px;">Catalogos</h3>
            </div>
        </div>
        <hr class="hr_p">
        <div class="row">
            <div class="col-sm-4">
                <a style="font-size: 17px" href="{!! asset('catalogos/catalogo_3A.pdf') !!}" download="Catálogo 3A Branding.pdf">
                    <div class="img-thumbnail text-center">
                        <img src="{{ asset('img/ser_img/magazine.png') }}" height="150px;"><br>
                        <p>Catalogo 2019</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<p style="padding-top: 300px;">
@endsection

