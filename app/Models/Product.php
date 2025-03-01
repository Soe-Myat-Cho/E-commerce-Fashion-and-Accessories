<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    //a product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //a product has one cart item
    public function cartItem()
    {
        return $this->hasOne(CartItem::class, 'product_id');
    }
}
