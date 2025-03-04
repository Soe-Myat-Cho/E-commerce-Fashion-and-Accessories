<?php

namespace App\Http\Controllers;

//use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class OrderController extends Controller
{
    //
    public function order()
    {
        //dd(Auth::user()->id);
        //dd(Auth::user()->cart->cart_items->load('product')->first()->product->price);
        //dd(request()->all());

        request()->validate([
            'totalPrice' => 'required',
            'shipping_address' => 'required',
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total_price = request('totalPrice');
        $order->shipping_address = request('shipping_address');
        $order->save();

        //dd($order);

        foreach (Auth::user()->cart->cart_items->load('product') as $item) {
            $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $item->product_id;
            $order_item->price = $item->product->price;
            $order_item->save();
        }

        Auth::user()->cart->cart_items()->delete();

        Mail::to(Auth::user()->email)->queue(new OrderMail(Auth::user()->name, Auth::user()->email, $order->total_price, $order->shipping_address));

        return redirect('/cart');
    }

    //---------------------admin routes------------------------//
    public function orderList()
    {
        $orders = Order::all()->load('user');
        return view('admin.order_list', ['orders' => $orders]);
    }
}
