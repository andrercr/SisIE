<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
  	protected $primaryKey = 'id_categoria';
  	protected $table = 'categorias';
  	protected $fillable = ['id_categoria', 'nome', 'descricao', 'status'];
  	protected $guarded = [];
    
}
