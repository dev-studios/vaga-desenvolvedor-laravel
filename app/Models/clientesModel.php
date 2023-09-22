<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientesModel extends Model
{
    use Hasfactory;

    protected $fillable = [
        'nome',
        'email',
        'created_at',
        'updated_at',
    ];
    
}