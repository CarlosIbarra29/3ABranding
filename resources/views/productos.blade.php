@extends('layouts.principal')

@section('title', 'Productos')

@section('content')

<h4> Categorias </h4>
@if($cat)
   <ul>
      @foreach($cat as $item)
         <li><a href="/productos/{{$item->ID_CATEGORIA}}">{{ $item->NOMBRE_CATEGORIA }}</a></li>
      @endforeach
   </ul>
@else
   <p> No hay categorias </p>
@endif



<h4> Productos detalle </h4>
@if($productos ?? '')
   <ul>
      @foreach($productos ?? '' as $p)
         <li>{{ $p->NOMBRE }}</a></li>
      @endforeach
   </ul>
@else
   <p> No hay categorias </p>
@endif


@endsection
