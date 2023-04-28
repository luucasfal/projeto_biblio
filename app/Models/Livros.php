<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $table = 'livros';
    protected $fillable = ['book_name', 'autor', 'data_de_publicacao', 'observations', 'price'];
}
