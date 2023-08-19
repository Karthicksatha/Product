<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'product_images',
        'unit_type',
        'category',
        'price',
        'discount_percentage',
        'discount_amount',
        'discount_range_from',
        'discount_range_to',
        'tax_percentage',
        'tax_amount',
        'stock_entry',
    ];
    protected $casts = [
        'discount_range_from' => 'date',
        'discount_range_to' => 'date',
    ];
}
