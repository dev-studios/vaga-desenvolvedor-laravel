<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cliente_id',
        'produto_id',
        'total',
        'status',
        'created_at',
        'updated_at',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class,'cliente_id' ,'id' );
    }
}
