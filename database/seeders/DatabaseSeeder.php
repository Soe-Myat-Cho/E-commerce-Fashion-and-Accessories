<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Category::factory(5)->create();

        Product::factory(10)->create();

        User::factory(5)
            ->has(Cart::factory()->has(CartItem::factory(3), 'cart_items'))
            ->has(Order::factory(2)->has(OrderItem::factory(3), 'order_items'))
            ->create();
    }
}
