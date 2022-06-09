@extends('layouts.menu')

@section('contenido')
    <div class="row">
        <center><h2>Catalogo Tienda</h2></center>
    </div>
    @foreach($productos as $producto)
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" 
        width="500" 
        height="400"
        @if(is_null($producto->imagen)) 
            src="{{ asset('img/no_dis.jpg') }}"
        @else
        src="{{ asset('img/'.$producto->imagen) }}"
        @endif 
        />
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre}}<i class="material-icons right">{{ $producto->precio}}</i></span>
        <p><a href="{{url('productos/'.$producto->id)}}">Ver Detalle ...</a></p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">{{ $producto->nombre}}<i class="material-icons right">close</i></span>
     <ul>
         <li>Descripcion: {{ $producto->desc}}</li>
         <li>Precio: {{ $producto->precio}} </li>
         <li>Categoria: {{ $producto->categoria->nombre }}</li>
         <li>Marca: {{ $producto->marca->nombre }}</li>
     </ul>
        </div>
    </div>
  @endforeach
@endsection