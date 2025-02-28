<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        if (request('search')) {
            $products = Product::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $products = Product::all();
        }

        return view('products', [
            'products' => $products
        ]);
    }

    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /******  7c064fcc-000b-43d9-89fb-84308442dce0  *******/
    public function details(Product $product)
    {
        // if(request('search')) {
        //     return view('products', [
        //         'products' => Product::where('title', 'like', '%'.request('search').'%')->get()
        //     ]);
        // }



        return view('product_details', [
            'product' => $product
        ]);
    }
}
