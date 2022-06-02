@extends('layouts.menu')

@section('contenido')
@if( session('mensajito'))
<div class="row">
    <span>{{ session('mensajito')  }}</span>
</div>
@endif
<div class="row">
    <h1 class="grey-text text-darken-1">Nuevo Producto</h1>
</div>

<div class="row">
    
    <form method="POST" action="{{ route('productos.store') }}" class="col s12" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nombre" name="nombre" type="text" class="validate" value="{{ old('nombre') }}" placeholder="Nombre de producto">
                <label for="nombre">Nombre del producto</label>
                <span> {{ $errors->first('nombre') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="desc" id="desc" class="materialize-textarea validate"  placeholder="Nombre de producto"> 
                    {{ old('nombre') }}
                </textarea>
                <label for="desc">Descripcion</label>
                <span> {{ $errors->first('desc') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="precio" id="precio" type="text" class="validate" value="{{ old('precio') }}" placeholder="Precio de producto">
                <label for="precio">Precio</label>
                <span> {{ $errors->first('precio') }} </span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <select name="marca" id="marca">
                    @foreach($marcas as $marca)
                    <option value="">Elija Marca</option>
                    <option value="{{ $marca->id }}">{{  $marca->nombre  }}</option>
                    @endforeach
                </select>
                <label for="marca">Elija Marca</label>
                <span> {{ $errors->first('marca') }} </span>
            </div>
        </div>
        <div class="row"> 
            <div class="input-field col s8">
                <select name="categoria" id="categoria">
                    @foreach($categorias as $categoria)
                    <option value="">Elija Categoria</option>
                    <option value="{{ $categoria->id }}">{{  $categoria->nombre  }}</option>
                    @endforeach
                </select>
                <label for="categoria">Elija Categoria</label>
                <span> {{ $errors->first('categoria') }} </span>
            </div>
        </div>
        <div class="row"> <!--Input para cargar archivos-->
            <div class="file-field input-field col s8">
                <div class="btn grey darken-1">
                    <span>Imagen</span>
                    <input type="file" name="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <span>{{  $errors->first('imagen')  }}</span>
        </div>
        <button class="btn waves-effect waves-light grey darken-1" type="submit">Guardar</button>
</div>
</form>
@endsection