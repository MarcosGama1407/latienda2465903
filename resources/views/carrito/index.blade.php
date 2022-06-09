@extends('layouts.menu')

@section('contenido')
    @if(!session('cart'))
        <p>Variable no existente</p>
    @else
        <div class="row">
            <pre>
                {{  session('cart')[0]["name"]  }}
                {{  session('cart')[0]["cantidad"]  }}
            </pre>
        </div>
        <form method="POST" action="{{  route('carrito.destroy' , 1 )  }}">
            @csrf
            @method('DELETE')
            <button class="btn waves-effect waves-light" type="submit">
                Eliminar carrito
            </button>
        </form>
    @endif

@endsection