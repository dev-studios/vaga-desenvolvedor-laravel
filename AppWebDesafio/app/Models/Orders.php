<?php

namespace App\Models;

use App\Models\Products;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
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

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
