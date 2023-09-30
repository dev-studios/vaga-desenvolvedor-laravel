<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      'customer_id',
      'product_id',
      'negotiation_date',
      'unity_price',
      'quantity',
      'total_amount',
      'status',
    ];
}
