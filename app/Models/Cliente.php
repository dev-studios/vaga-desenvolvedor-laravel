<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use Hasfactory;

    protected $fillable = [
        'nome',
        'email',
        'created_at',
        'updated_at',
    ];

    public function vendas(){
        return $this->hasOne(Venda::class,'cliente_id' , 'id');
    }
    
}