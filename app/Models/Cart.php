<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;

    //a cart belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //a cart has many cart_items
    public function cart_items()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }
}
