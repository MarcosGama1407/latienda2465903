<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoria;

class Producto extends Model
{
    use HasFactory;

    //relacion productos marcas

    //se expresa asi

    public function categoria(){
        return $this->belongTo(Categoria::class);
    }

}
