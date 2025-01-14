<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function noticias(){
        return $this->hasMany(Noticia::class);
    }
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;
}
