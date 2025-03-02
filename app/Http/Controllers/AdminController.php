<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
//use Faker\Core\File;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function customerList()
    {
        return view('admin.customer_list', ['customers' => User::all()]);
    }

    public function inventory()
    {
        return view('admin.inventory', ['products' => Product::all()->load('category')]);
    }

    public function removeProduct(Product $product)
    {
        //dd($product);
        $product->delete();
        File::delete(public_path($product->image));
        return redirect('/admin/inventory');
    }

    public function showEditForm(Product $product)
    {
        //dd($product);
        return view('admin.edit_product', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function updateProduct(Product $product)
    {
        //dd($product->image);
        //dd(request()->all());
        //dd(request('image'));
        //dd('hi');
        //$image->store('products');
        //dd($image->store('products'));

        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'discount_percentage' => 'required',
            'category' => 'required',

        ]);
        //dd('hello');
        if (request('image')) {
            File::delete(public_path($product->image));
            $image = request('image');
            $product->image = '/storage/' . $image->store('products');
        }
        // $image = request('image');

        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->discount_percentage = request('discount_percentage');
        $product->category_id = request('category');

        $product->save();



        return redirect('/admin/inventory');
    }

    public function showAddForm()
    {
        return view('admin.add_product', ['categories' => Category::all()]);
    }

    public function addProduct()
    {
        //dd(request('image'));

        $image = request('image');
        //$image->store('products');
        //dd($image->store('products'));

        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'discount_percentage' => 'required',
            'category' => 'required',
            'image' => 'required'
        ]);

        //dd('valid?');

        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->discount_percentage = request('discount_percentage');
        $product->category_id = request('category');
        $product->image = '/storage/' . $image->store('products');
        $product->save();

        return redirect('/admin/inventory');
    }
}
