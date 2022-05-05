<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Primera ruta
Route::get('hola', function () {
    echo "Hola 2465903";
});

//ruta de arreglos:
Route::get('arreglo', function(){
    $estudiantes = [
        "CA" => "1",
        "JO" => true,
        "AN" => "1.78"
    ];
    
    //recorrer el arreglo
    foreach($estudiantes as $e){
        echo $e."<hr />";
    }

    //agregar elementos en PHP
    $estudiantes[] = "Marcos";
    var_dump($estudiantes);

});

//ruta de paises:
Route::get('paises', function(){
    $paises = [
        "Colombia" => [
            "capital" => "Bogota",
            "moneda" => "Peso",
            "poblacion" => 51,
            "ciudades" => [ 
                "Medellin",
                "Cali",
                "Barranquilla"
            ]
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 32,
            "ciudades" => [ 
                "Arequipe",
                "Trujiyo"
            ]
        ],
        "Paraguay" => [
            "capital" => "Asuncion",
            "moneda" => "Guaraní paraguayo",
            "poblacion" => 7,
            "ciudades" => [ 
                "Luque"
            ]
        ],
        "Argentina" => [
            "capital" => "Buenos Aires",
            "moneda" => "Peso argentino",
            "poblacion" => 45,
            "ciudades" => [ 
                "Buenos aires",
                "Cordoba",
                "Rosario"
            ]
        ],
        "Venezuela" => [
            "capital" => "Caracas",
            "moneda" => "Bolivar",
            "poblacion" => 28,
            "ciudades" => [ 
                "Caracas",
                "Ciudad Bolivar"
            ]
        ]
    ];

    //mostrar la vista
    return view('paises')
        ->with("paises" , $paises);
});