<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    //an order has many order_items
    public function order_items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    //an order belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
