<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
       'product_name',
       'description',
       'category',
       'unity',
       'price',
       'weight',
       'height',
       'width',
       'thickness',
       'color',
       'brand',
       'manufacturer',
       'supplier',
       'stock_quantity',
    ];
}
