<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Product $product)
    {
        //dd($product->id);
        //dd(Auth::user()->cart);

        if (Auth::user()->cart) {
            $cart = Auth::user()->cart;
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->save();

            Auth::user()->cart = $cart;
        }

        //dd(Auth::user()->cart->id);
        $cart_items = new CartItem();
        $cart_items->cart_id = Auth::user()->cart->id;
        $cart_items->product_id = $product->id;
        $cart_items->save();

        return redirect('/cart');
    }

    public function removeFromCart(CartItem $cartItem)
    {
        //dd($cartItem->id);
        //$cartItem = Auth::user()->cart->cart_items()->where('product_id', $cartItem->id)->first();
        //dd($cartItem);
        $cartItem->delete();
        return redirect('/cart');
    }
}
