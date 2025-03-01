<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /** @use HasFactory<\Database\Factories\OrderItemFactory> */
    use HasFactory;

    //an order_item belongs to an order
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    //an order_item belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
