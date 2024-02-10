<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_short_description',
        'Product_long_description',
        'price',
        'product_category_name',
        'product_subcategory',
        'product_category_id',
        'product_subcategory_id',
        'product_img',
        'slug',
    ];
}
