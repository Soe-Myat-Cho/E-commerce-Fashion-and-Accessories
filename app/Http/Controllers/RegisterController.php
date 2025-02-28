<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\validated;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('users.register');
    }

    public function store()
    {
        //dd(request()->all());
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        //dd('hello!');


        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        Auth::login($user);

        //dd(Auth::user());

        return redirect('/');
    }

    public function showLogin()
    {
        return view('users.login');
    }

    public function login()
    {
        //dd(request()->all());
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //dd('hello!');

        if (Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ])) {
            return redirect('/');
        } else {
            return back()->with('error', 'Please check your credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
