<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'cpf',
        'rg',
        'phone_number',
        'email',
        'postal_code',
        'address',
        'city',
        'state',
    ];
}
