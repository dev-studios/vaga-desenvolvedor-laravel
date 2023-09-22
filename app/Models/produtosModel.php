<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtosModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'estoque',
        'preco',
        'descricao' ,
        'created_at',
        'updated_at',
    ];

}

