<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register Form',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {

        // return $request->all();

        $validateData = $request->validate([
            'name' => 'required|min:3|max:225',
            'username' => 'required|min:3|max:225|unique:users',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        $validateData['password'] = hash::make($validateData['password']);

        User::create($validateData);

        $request->session()->flash('success', 'Registration successfull! Please login');


        return redirect('/login');
    }
}
