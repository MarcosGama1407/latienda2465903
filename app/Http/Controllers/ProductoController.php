<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Aqui va a ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccion de todas las marcas
        $marcas = Marca::all();
        //Seleccion de todas las categorias
        $categorias = Categoria::all();
        //Mostrar la vista,
        //llevandole marcas y categorias
        return view('productos.new')
                    ->with('marcas' , $marcas)
                    ->with('categorias' , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //1.Establecer las reglas de validacion que apliquen a cada campo
        $reglas = [
            "nombre" => 'required|alpha',
            "desc" => 'required|min:20|max:50',
            "precio" => 'required|numeric',
            "marca" => 'required',
            "categoria" => 'required'
        ];

        //mensajes:
        $mensajes = [
            "required" => "Campo obligatorio",
            "alpha" => "Solo letras",
            "min" => "Se permiten minimo 20 caracteres",
            "numeric" => "Solo numeros"
        ];

        //2.Crear objeto validador
        $v = Validator::make($r->all() ,
                             $reglas,
                             $mensajes );

        //3.Validar la input data
        if($v->fails()){
            //Validacion fallida
            //Redireccionar al formulario
            return redirect('productos/create')
                    ->withErrors($v)
                    ->withInput();
        }
        else{
            //Crear nuevo producto<<entity>>
            $p = new Producto;
            //Asignar valores a los atributos
            //del producto
            $p->nombre = $r->nombre;
            $p->desc = $r->desc;
            $p->precio = $r->precio;
            $p->marca_id = $r->marca;
            $p->categoria_id = $r->categoria;
            //guardar en db
            $p->save();
            //redireccionar al formulario con mensaje exito(session)
            return redirect('productos/create')
                ->with('mensajito' , "Producto registrado");
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        echo "aqui van los detalles de producto con id $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        echo "aqui va el fomulario para actualizar ";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
