@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="grey-text text-darken-1">Nuevo Producto</h1>
</div>

<div class="row">
    <form class="col s12"></form>
    <div class="row">
        <div class="input-field col s6">
            <input id="nombre" name="nombre" type="text" class="validate">
            <label for="nombre">Nombre del producto</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <textarea name="descripcion" id="descripcion" class="materialize-textarea validate"></textarea>
        <label for="Descripcion">Descripcion</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <input name="precio" id="precio" type="text" class="validate">
        <label for="precio">Precio</label>
    </div>
</div>

<div class="row">
    <div class="file-field input-field col s8">
        <div class="btn grey darken-1">
            <span>Imagen</span>
            <input type="file">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>
</div>

<button class="btn waves-effect waves-light grey darken-1" type="submit" name="action">Guardar</button>
@endsection