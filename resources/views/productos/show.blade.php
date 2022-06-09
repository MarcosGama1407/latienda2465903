@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1> {{$producto->nombre}} </h1>
</div>
<div class="row">
   
        
    
    <div class="col so8">
    <div class="row">
    <img 
        width="500" 
        height="400"
        @if(is_null($producto->imagen)) 
            src="{{ asset('img/no_dis.jpg') }}"
        @else
        src="{{ asset('img/'.$producto->imagen) }}"
        @endif 
        />
    </div>
    <div class="row">
        <ul>
            <li>{{$producto->desc}}</li>
            <li>Categoria:{{$producto->marca->nombre}}</li>
            <li>Marca:{{$producto->Marca->nombre}}</li>
            <li><strong>Precio:</strong>{{$producto->precio}}</li>
        </ul>
        
</div>
</div>

<div class="col s4">

<form method="POST" action="{{route('carrito.store')}}">
    @csrf
    <div class="row">
        <h3>Añadir Producto</h3>
    </div>
    <div class="row">
        <div class="col s4 input-field">
            <select name="cantidad" id="cantidad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>


            </select>
            <label for="cantidad">cantidad</label>
        </div>
    </div>

    <div class="row">
        <div class="col s4">

        <button class="btn waves-effect waves-light" type="submit" name="action">Añadir
        <i class="material-icons right">send</i>
        </button>
        
        </div>
    </div>

    <input type="hidden" name="prod_id" value="{{$producto->id}}">

    <input type="hidden" name="prod_name" value="{{$producto->nombre}}">

</form>


</div>
@endsection