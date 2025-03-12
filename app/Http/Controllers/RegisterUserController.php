<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterUserController extends Controller
{

    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        
        $attributes = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8), 'confirmed']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        //Debería ser el home
        return view('home');
        
    }
}
